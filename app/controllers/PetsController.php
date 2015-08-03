<?php

class PetsController extends BaseController {

	public function listPets()
	{
		$pets = Pet::all();
		
		return View::make('pets', compact('pets'));
	}
	
	public function addPet()
	{
		$allServices = Service::all();
		$services = array();
		foreach($allServices as $service) {
			$services[$service->id] = $service->name;
		}

		return View::make('add_pet', compact('services'));
	}
	
	public function savePet()
	{
		$pet = [
            'name' => Input::get('name')
        ];
        $rules = [
            'name' => 'required'
        ];
		
        $valid = Validator::make($pet, $rules);
        if ($valid->passes()) {
            $pet = new Pet($pet);
            $pet->save();
			
			if(!empty(Input::get('services'))) 
			{
				$pet->services()->sync(Input::get('services'));
			}
            return Redirect::to('/pets')->with('success', 'Pet is saved!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
	}
	
	public function editPet(Pet $pet)
    {
		$allServices = Service::all();
		$services = array();
		foreach($allServices as $service) {
			$services[$service->id] = $service->name;
		}
		
		return View::make('edit_pet', compact('pet','services'));
    }
	
	public function updatePet(Pet $pet)
	{
		if(!empty(Input::get('services'))) 
		{
			$pet->services()->sync(Input::get('services'));
		}
		else
		{
			$pet->services()->detach();
		}
		return Redirect::to('/pets')->with('success', 'Pet is updated!');		
	}
	
	public function deletePet(Pet $pet)
	{
		$pet->delete();
		//we can redirect using route also.
        return Redirect::route('pet.list')->with('success', 'Pet is deleted!');
	}
}

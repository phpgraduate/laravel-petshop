<?php

class ServicesController extends BaseController {

	public function listServices()
	{
		$services = Service::all();
			
		return View::make('services', compact('services'));
	}
	
	public function addService()
	{
		$allPets = Pet::all();
		$pets = array();
		foreach($allPets as $pet) {
			$pets[$pet->id] = $pet->name;
		}

		return View::make('add_service', compact('pets'));
	}
	
	public function saveService()
	{
		$service = [
            'name' => Input::get('name')
        ];
        $rules = [
            'name' => 'required'
        ];
		
        $valid = Validator::make($service, $rules);
        if ($valid->passes()) {
            $service = new Service($service);
            $service->save();
			
			if(!empty(Input::get('pets'))) 
			{
				$service->pets()->sync(Input::get('pets'));
			}
            return Redirect::to('/services')->with('success', 'Service is saved!');
        } else
            return Redirect::back()->withErrors($valid)->withInput();
	}
	
	public function editService(Service $service)
    {
		$allPets = Pet::all();
		$pets = array();
		foreach($allPets as $pet) {
			$pets[$pet->id] = $pet->name;
		}

		return View::make('edit_service', compact('service', 'pets'));
    }
	
	public function updateService(Service $service)
	{
		if(!empty(Input::get('pets'))) 
		{
			$service->pets()->sync(Input::get('pets'));
		}
		else
		{
			$service->pets()->detach();
		}
		return Redirect::to('/services')->with('success', 'Service is updated!');		
	}
	
	public function deleteService(Service $service)
	{
		$service->delete();
		//we can redirect using route also.
        return Redirect::route('service.list')->with('success', 'Service is deleted!');
	}
}

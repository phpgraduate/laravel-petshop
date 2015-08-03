<?php

class Service extends Eloquent {
 
	protected $fillable = [
		'name'
	];
	
    public function pets()
    {
        return $this->belongsToMany("Pet")->withTimestamps();
    }
 
}
?>
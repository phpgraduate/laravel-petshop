<?php

class Pet extends Eloquent {
 
	protected $fillable = [
		'name'
	];
	
    public function services()
    {
        return $this->belongsToMany("Service")->withTimestamps();
    }
 
}
?>
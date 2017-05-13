<?php

class Space extends Eloquent{

	protected $table = 'space';

	public function type(){
        return $this->belongsTo('Type');
    }

    public function bookingsrooms(){
        return $this->hasMany('BookingsRooms');
    }

}
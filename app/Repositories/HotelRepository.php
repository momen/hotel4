<?php

namespace App\Repositories;

class HotelRepository implements HotelInterface{
    
    /**
     *
     * @var object 
     */
    protected $hotelService;
    
    /**
     * Intializing the hotelService object
     */
    public function __construct() {
        $this->hotelService = \App::make('hotelService');
    }
    
    /**
     * Makes it easy to send HTTP requests using Guzzle Http service
     * 
     * @return type
     */
    public function getDestinations(){

    	$result = $this->hotelService->makeRequest();
        return $result;
    }
    
}

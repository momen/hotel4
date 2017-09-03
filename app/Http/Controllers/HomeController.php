<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\HotelRepository;

class HomeController extends Controller {

    protected $hotelRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(HotelRepository $hotelRepository) {
        $this->hotelRepository = $hotelRepository;
    }

    /**
     *  The hotel repository instance.
     * 
     * @return type
     */
    public function index() {

        $destination = $this->hotelRepository->getDestinations();
        return view('destination', compact('destination'));
    }
    
    
}

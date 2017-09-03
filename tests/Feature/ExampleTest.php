<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Repositories\HotelRepository;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        /* Initialize Hotel Repository Object */
        $hotelRepository = new HotelRepository();
        $data = $hotelRepository->getDestinations();
        
        /* Reports an error identified by $message if the two variables $expected and $actual are not equal. */
        $this->assertEquals(true, is_array($data));
        
        if(!empty($data)){
            
            $this->assertEquals(true, array_has($data, 'hotels'));
            
            $hotels = $data['hotels'];
            
            $hotelSize = count($hotels);
            $i = rand(0, $hotelSize);

            $this->assertEquals(true, array_has($hotels[$i], 'name'));
            $this->assertEquals(true, array_has($hotels[$i], 'price'));
            $this->assertEquals(true, array_has($hotels[$i], 'city'));
            $this->assertEquals(true, array_has($hotels[$i], 'availability'));
        }        
        
        
        
        $this->assertEquals(0, json_last_error());
        
    }
}

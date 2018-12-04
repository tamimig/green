<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Card; 
use App\Http\Resources\Card as CardResource;

class CardTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_generate_credit_card_page() {

    	$cards = factory(Card::class,3)->create(); 

    	foreach($cards as $card)
    	{
    		 $card->make(); 
    	}

    	$response = $this->get(route('cardpage')); 

    	$json = $response->json();

    	$resource = CardResource::collection($cards); 

    	$resourceResponse = $resource->response()->getData(true); 

    	//dd($json , $resourceResponse); 
    	
    	$this->assertEquals($json , $resourceResponse);  



        
    		}
}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cardgenerate; 
use App\Http\Resources\Cardgenerate as CardgenerateResource;


class CardgenerateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   public function test_can_make_credit_card_pyament() {

    	$cardgenerates = factory(Cardgenerate::class,3)->create(); 

    	foreach($cardgenerates as $cardgenerate)
    	{
    		 $cardgenerate->make(); 
    	}

    	$response = $this->get(route('card.transaction')); 

    	$json = $response->json();

    	$resource = CardgenerateResource::collection($cardgenerates); 

    	$resourceResponse = $resource->response()->getData(true); 

    	//dd($json , $resourceResponse); 
    	
    	$this->assertEquals($json , $resourceResponse);  



        
    		}
}

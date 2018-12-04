<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Bankgenerate; 
use App\Http\Resources\Bankgenerate as BankgenerateResource;


class BankgenerateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_can_make_bank_pyament() {

    	$bankgenerates = factory(Bankgenerate::class,3)->create(); 

    	foreach($bankgenerates as $bankgenerate)
    	{
    		 $bankgenerate->make(); 
    	}

    	$response = $this->get(route('bank.transaction')); 

    	$json = $response->json();

    	$resource = BankgenerateResource::collection($bankgenerates); 

    	$resourceResponse = $resource->response()->getData(true); 

    	//dd($json , $resourceResponse); 
    	
    	$this->assertEquals($json , $resourceResponse);  



        
    		}
}

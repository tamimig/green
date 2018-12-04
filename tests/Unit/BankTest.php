<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Bank; 
use App\Http\Resources\Bank as BankResource;


class BankTest extends TestCase
{
	use DatabaseMigrations; 
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_generate_bank_page() {

    	$banks = factory(Bank::class,3)->create(); 

    	foreach($banks as $bank)
    	{
    		 $bank->make(); 
    	}

    	$response = $this->get(route('bankpage')); 

    	$json = $response->json();

    	$resource = BankResource::collection($banks); 

    	$resourceResponse = $resource->response()->getData(true); 

    	//dd($json , $resourceResponse); 
    	
    	$this->assertEquals($json , $resourceResponse);  



        
    		}


}

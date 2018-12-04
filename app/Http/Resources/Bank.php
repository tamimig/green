<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Bank extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);

         return [

            'id' => $this->id, 

            'Name' => $this->name, 

            'Account Number' => $this->account_number,

            'Bank Name' => $this->bank_name

        ];
    }
}

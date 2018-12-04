<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cardgenerate extends JsonResource
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

            //'The Amount' => $this->amount, 

            //'Merchant_id' => $this->merchant_id,

            //'Reference' => $this->reference , 

            'Transaction Status' => $this->transaction_status

        ];
    }
}

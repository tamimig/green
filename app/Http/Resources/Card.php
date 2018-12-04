<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Card extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [

            'id' => $this->id, 

            'Card Holder Name' => $this->card_holder_name, 

            'Card Number' => $this->card_number,

            'Expiry Month' => $this->expiry_month, 

            'Expiry Year' => $this->expiry_year, 

            'Security Code' => $this->cvv



        ];
    }
}

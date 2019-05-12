<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Student extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [
        'id' => $this->id,
        'class_id' => $this->class_id,
        'badgeNumber' => $this->badgeNumber,
        'name' => $this->name,
        'surname' => $this->surname,
        'birthday' => $this->birthday,
        'sex' => $this->sex,
        'email' => $this->email,
        'details' => $this->details
      ];
    }
}

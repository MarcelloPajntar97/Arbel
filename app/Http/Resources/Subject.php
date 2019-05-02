<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Subject extends JsonResource
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
        'user_id' => $this->user_id,
        'class_id' => $this->class_id,
        'subjectName' => $this->subjectName,
        'credits' => $this->credits,
        'totHours' => $this->totHours
      ];
    }
}

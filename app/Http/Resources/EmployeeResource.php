<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'salary' => '$ ' . $this->salary,
            'type' => self::jobType($this->type)
        ];
    }
    
    public static function jobType($type)
    {

        switch ($type) {
            case 'FullTime':
                $type = 'Full Time';
                break;
            case 'Contract':
                $type = 'Contract';
                break;
            case 'PartTime':
                $type = 'Part Time';
                break;
        }
        return $type;
    }
}

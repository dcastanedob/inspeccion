<?php

namespace App\Requests;

use App\Http\ApiRequest;

class EquipmentRequest extends ApiRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          'name'   => 'required',
        ];
    }

}

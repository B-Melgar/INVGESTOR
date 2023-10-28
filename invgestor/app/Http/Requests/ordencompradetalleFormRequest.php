<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Http\Request;
use Illuminate\Validation\Rule;

class ordencompradetalleFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idordencompra',
            'idproducto', 
            'cantidad', 
            'precio', 
            'subtotal'
        ];
    }
}
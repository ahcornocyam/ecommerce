<?php

namespace ecommerce\Http\Requests;

use ecommerce\Http\Requests\Request;

class ProductRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|min:5|max:80',
            'description'   => 'required',
            'price'         => 'required|numeric',
            //'getTagListAttribute'          => 'required|unique:tags,name',
        ];
    }
}

<?php

namespace App\Http\Requests;
use App\Content;
use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
     * 
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id'=>'required',
            'title' => 'required|string|max:255',
            'continent' => 'required|string',
            'picture'=> 'mimes:jpeg,jpg,png,gif|required|max:1000',
            'country' => 'required|string',
            'costs'=>'required|numeric',
            'span'=>'required|numeric',
            'content'=>'required|string|max:250',
        ];

        
         
    }
    
   
}

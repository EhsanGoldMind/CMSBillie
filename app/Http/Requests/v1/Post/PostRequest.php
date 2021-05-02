<?php

namespace App\Http\Requests\v1\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
           'title'=>'required|unique:posts',
            'description'=>'required|min:4',
            'contenttt'=>'required|min:4',
            'file'=>'required|image',
//            'category_id' => 'required'
        ];
    }
}

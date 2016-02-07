<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AnimeRequest extends Request
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
            'name'              =>  'required',
            'description'       =>  'required|min:100',
            'imageurl'          =>  'required',
            'headerimg_url'     =>  'required',
            'episodes'          =>  'required|integer',
            'episodes_duration' =>  'required|integer',
            'categories'        =>  'required',
            'studio'            =>  'required',
            'released'          =>  'required|date',
            'mal_id'            =>  'integer',
            'op_yt_id'          =>  'max:11'
        ];
    }
}

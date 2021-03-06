<?php

namespace Genusshaus\Http\Requests\Places\Medias;

use Illuminate\Foundation\Http\FormRequest;

class StoreMediasRequest extends FormRequest
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
        $regex = '%ucarecdn.com%';

        return [
            'uploadcare' => 'required|url|regex:'.$regex,
        ];
    }
}

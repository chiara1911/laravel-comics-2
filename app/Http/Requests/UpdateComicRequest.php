<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //


                'title' => 'required|min:5|max:255',
                'description' => 'nullable|min:5',
                'thumb' => 'nullable|url',
                'price' => 'required|min:3|max:20',
                'sale_date' => 'required|date',
                'series' => 'required|min:3|max:100',
                'type' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'Il campo titolo deve avere massimo :max caratteri',
            'description.min' => 'Il campo descrizione deve avere minimo :min caratteri',
            'thumb.url' => 'Il campo immagine deve contenere una url valida',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.min' => 'Il campo prezzo deve avere almeno :min caratteri',
            'price.max' => 'Il campo prezzo deve avere massimo :max caratteri',
            'sale_date.required' => 'Il campo data di uscita è obbligatorio',
            'sale_date.date' => 'La data deve essere in questo formato: YYYY-MM-DD ',
            'series.required' => 'Il campo serie è obbligatorio',
            'seris.min' => 'Il campo serie deve avere almeno :min caratteri',
            'series.max' => 'Il campo serie deve avere massimo :max caratteri',
            'type.required' => 'Il campo Type è obbligatorio',
        ];
    }

}

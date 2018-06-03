<?php

namespace App\Http\Requests;

use App\Models\Referee;
use Illuminate\Foundation\Http\FormRequest;

class RefereeForm extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required|date_format:"d/m/Y"',
            'experience' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Lütfen isim giriniz.',
            'last_name.required' => 'Lütfen soy isim giriniz.',
            'birth_date.required' => 'Lütfen doğum tarihi giriniz.',
            'birth_date.date_format' => 'Doğum tarihi d/m/Y formatında olmalıdır.',
            'experience.required' => 'Lütfen tecrübe giriniz.',
            'experience.integer' => 'Tecbüre girdisi bir sayı olmak zorundadır.',
        ];
    }

    public function saveReferee()
    {
        Referee::create($this->all());
    }

    public function updateReferee($id)
    {
        $referee = Referee::findOrFail($id);
        $referee->fill($this->all());
        $referee->save();
    }
}

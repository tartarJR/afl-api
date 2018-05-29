<?php

namespace App\Http\Requests;


use App\Models\Season;
use Illuminate\Foundation\Http\FormRequest;

class SeasonForm extends FormRequest
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
            'season' => 'required|unique:seasons',
        ];
    }

    public function messages()
    {
        return [
            'season.required' => 'Lütfen sezon seçimi yapınız.',
            'season.unique' => 'Bu sezon daha önce yaratıldı.',
        ];
    }

    public function saveSeason()
    {
        Season::create($this->all());
    }

    public function updateSeason($id)
    {
        $game = Season::findOrFail($id);
        $game->fill($this->all());
        $game->save();
    }
}

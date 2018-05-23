<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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

            'season_id' => 'required',
            'week_id' => 'required',
            'home_team_id' => 'required',
            'away_team_id' => 'required',
            'game_date_time' => 'required|date_format:Y-m-d H:i:s',
            'place' => 'required',
            'home_team_scored' => 'nullable|integer',
            'away_team_scored' => 'nullable|integer',

        ];
    }

    public function messages()
    {
        return [
            'season_id.required' => 'Lütfen sezon seçimi yapınız.',
            'week_id.required' => 'Lütfen hafta seçimi yapınız.',
            'home_team_id.required' => 'Lütfen ev sahibi takım seçimi yapınız.',
            'away_team_id.required' => 'Lütfen misaifr takım seçimi yapınız.',
            'game_date_time.required' => 'Lütfen tarih ve zaman giriniz.',
            'place.required' => 'Lütfen yer giriniz.',
            'home_team_scored.integer' => 'Ev sahibi takım skor girdisi sayı olmak zorundadır.',
            'away_team_scored.integer' => 'Misafir takım skor girdisi sayı olmak zorundadır.',
        ];
    }
}

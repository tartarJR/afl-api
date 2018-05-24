<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
            'season_id' => 'required|integer',
            'week_id' => 'required|integer',
            'home_team_id' => 'required|integer',
            'away_team_id' => 'required|integer',
            'game_date_time' => 'required|date_format:"Y-m-d\TH:i"',
            'place' => 'required',
            'home_team_scored' => 'nullable|integer',
            'away_team_scored' => 'nullable|integer'
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
            'game_date_time.date_format' => 'Lütfen uygun tarih ve zaman aralığı giriniz.',
            'place.required' => 'Lütfen yer giriniz.',
            'home_team_scored.integer' => 'Ev sahibi takım skor girdisi sayı olmak zorundadır.',
            'away_team_scored.integer' => 'Misafir takım skor girdisi sayı olmak zorundadır.'
        ];
    }
}

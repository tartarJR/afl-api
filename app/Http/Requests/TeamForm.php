<?php

namespace App\Http\Requests;

use App\Models\Team;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TeamForm extends FormRequest
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
        $rules = ['name' => 'required|unique:teams',
            'info' => 'required',
            'primary_color_code' => 'required|color_hex',
            'secondary_color_code' => 'required|color_hex',
            'alternative_color_code' => 'nullable|color_hex',
        ];

        if ($this->isMethod('post')) {
            $rules['name'] = 'required|unique:teams';
            $rules['img_path'] = 'required|mimes:png';
        } else {
            $rules['name'] = 'required';
            $rules['img_path'] = 'mimes:png';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Lütfen takım ismi giriniz.',
            'name.unique' => 'Bu takım daha önce yaratıldı.',
            'info.required' => 'Lütfen takım bilgisi giriniz.',
            'primary_color_code.required' => 'Lütfen birincil renk kodu giriniz.',
            'primary_color_code.color_hex' => 'Birincil renk kodu hexadecimal formatında olmak zorundadır.',
            'secondary_color_code.required' => 'Lütfen ikincil renk kodu giriniz.',
            'secondary_color_code.color_hex' => 'İkincil renk kodu hexadecimal formatında olmak zorundadır.',
            'alternative_color_code.color_hex' => 'Alternatif renk kodu hexadecimal formatında olmak zorundadır.',
            'img_path.required' => 'Lütfen takım logosu seçiniz.',
            'img_path.mimes' => 'Takım logosu png formatında olmalıdır.',
        ];
    }

    public function saveTeam()
    {
        $teamLogoImg = $this->file('img_path');
        $teamLogoImgName = time() . '.' . $teamLogoImg->getClientOriginalExtension();
        $fileLocation = storage_path('app/public/images/teams/' . $teamLogoImgName);
        Image::make($teamLogoImg)->resize(400, 400)->save($fileLocation);

        $data = $this->all();
        $data['img_path'] = $teamLogoImgName;

        Team::create($data);
    }

    public function updateTeam($id)
    {
        $team = Team::findOrFail($id);
        $data = $this->all();

        if ($this->hasFile('img_path')) {

            $teamLogoImg = $this->file('img_path');
            $teamLogoImgName = time() . '.' . $teamLogoImg->getClientOriginalExtension();
            $fileLocation = storage_path('app/public/images/teams/' . $teamLogoImgName);
            Image::make($teamLogoImg)->resize(400, 400)->save($fileLocation);

            $oldTeamLogo = $team->img_path;
            $data['img_path'] = $teamLogoImgName;

            File::delete(storage_path('app/public/images/teams/' . $oldTeamLogo));
        }

        $team->fill($data);
        $team->save();
    }
}

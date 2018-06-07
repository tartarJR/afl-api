<?php

namespace App\Http\Requests;

use App\Models\Coach;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CoachForm extends FormRequest
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
         $rules = ['first_name' => 'required',
         'last_name' => 'required',
         'birth_date' => 'required|date_format:"d/m/Y"',
         'experience' => 'required|integer',
         'team_id' => 'required|integer',
         'coach_type_id' => 'required|integer'
         ];

         if ($this->isMethod('post')) {
             $rules['img_path'] = 'required|mimes:png';
         } else {
             $rules['img_path'] = 'mimes:png';
         }

         return $rules;
     }

     public function messages()
     {
         return [
             'first_name.required' => 'Lütfen ad giriniz.',
             'last_name.required' => 'Lütfen soyad giriniz.',
             'birth_date.required' => 'Lütfen doğum günü seçiniz.',
             'birth_date.date_format' => 'Doğum günü formatı d/m/Y şeklinde olmalıdır.',
             'experience.required' => 'Lütfen tecrübe giriniz.',
             'experience.integer' => 'Tecrübe girdisi bir sayı olmak zorundadır.',
             'team_id.required' => 'Lütfen takım seçiniz.',
             'coach_type_id.required' => 'Lütfen koç tipi seçiniz.',
             'img_path.required' => 'Lütfen koç resmi seçiniz.',
             'img_path.mimes' => 'Koç resmi png formatında olmalıdır.'
         ];
     }

     public function saveCoach()
     {
       $coachImg = $this->file('img_path');
       $coachImgName = time() . '.' . $coachImg->getClientOriginalExtension();
       $fileLocation = storage_path('app/public/images/coaches/' . $coachImgName);
       Image::make($coachImg)->resize(400, 400)->save($fileLocation);

       $data = $this->all();
       $data['img_path'] = $coachImgName;

       Coach::create($data);
     }

     public function updateCoach($id)
     {
       $coach = Coach::findOrFail($id);
       $data = $this->all();

       if ($this->hasFile('img_path')) {

           $coachImg = $this->file('img_path');
           $coachImgName = time() . '.' . $coachImg->getClientOriginalExtension();
           $fileLocation = storage_path('app/public/images/coaches/' . $coachImgName);
           Image::make($coachImg)->resize(400, 400)->save($fileLocation);

           $oldCoachImage = $coach->img_path;
           $data['img_path'] = $coachImgName;

           File::delete(storage_path('app/public/images/coaches/' . $oldCoachImage));
       }

       $coach->fill($data);
       $coach->save();
    }
}

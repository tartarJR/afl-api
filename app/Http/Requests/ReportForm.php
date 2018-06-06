<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Report;

class ReportForm extends FormRequest
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
         $rules = ['title' => 'required',
             'content' => 'required',
             'related_teams' => 'required'
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
             'title.required' => 'Lütfen haber başlığı giriniz.',
             'content.required' => 'Bu haber içeriği giriniz.',
             'related_teams.required' => 'Lütfen haber ile ilişkili takımları giriniz.',
             'img_path.required' => 'Lütfen haber için imaj seçiniz.',
             'img_path.mimes' => 'Haber imajı png formatında olmalıdır.',
         ];
     }

     public function saveReport()
     {
         $reportImg = $this->file('img_path');
         $reportImgName = time() . '.' . $reportImg->getClientOriginalExtension();
         $fileLocation = storage_path('app/public/images/reports/' . $reportImgName);
         Image::make($reportImg)->resize(400, 400)->save($fileLocation);

         $data = $this->all();

         $lastCreatedReport = Report::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'img_path' => $reportImgName
         ]);

        $relatedTeamIds = $data['related_teams'];

        foreach($relatedTeamIds as $relatedTeamId) {
            $lastCreatedReport->teams()->attach($relatedTeamId);
        }
     }

     public function updateReport($id)
     {
         $report = Report::findOrFail($id);
         $data = $this->all();

         if ($this->hasFile('img_path')) {

             $reportImg = $this->file('img_path');
             $reportImgName = time() . '.' . $reportImg->getClientOriginalExtension();
             $fileLocation = storage_path('app/public/images/reports/' . $reportImgName);
             Image::make($reportImg)->resize(400, 400)->save($fileLocation);

             $oldReportImg = $report->img_path;
             $data['img_path'] = $reportImgName;

             File::delete(storage_path('app/public/images/reports/' . $oldReportImg));

             $report->img_path = $reportImgName;
         }

         $report->title = $data['title'];
         $report->content = $data['content'];

         $report->save();

         $relatedTeamIds = $data['related_teams'];
         $report->teams()->sync($relatedTeamIds); // updateExistingPivot did not work
     }
}

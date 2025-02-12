<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CreateListing extends FormRequest
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
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            '*question*' => Rule::unique('listings', 'question_id')->where(function ($query) use ($request) {
                return $query->where('quiz_id', $request->quizid);
            })
        ];
    }

    public function messages()
    {
        return parent::messages(); // TODO: Change the autogenerated stub

    }

    public function attributes()
    {
        return [
            '*question*' => 'Bu Question',
        ];
    }
}
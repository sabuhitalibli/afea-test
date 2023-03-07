<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateQuestion extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $questionID = $this->question->id;

        return [
            'name' => ['required', 'max:255', Rule::unique('questions', 'name')->ignore($this->question->id)],
            'answers' => ['required', 'size:4'],
            'answers.*.id' => ['required', 'distinct', Rule::exists('answers', 'id')->where(function ($query) use ($questionID) {
                return $query->where('question_id', $questionID);
            })],
            'answers.*.content' => ['required', 'max:255', 'distinct'],
            'answers.*.is_correct' => ['required', 'boolean']
        ];
    }
}

<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class RegNoUniqueAcrossDB implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(DB::table('students')->where('reg__no', $value)
                ->orWhereExists(function ($query) use ($value) { 
                $query->select(DB::raw(1))->from('incharge')
                ->whereRaw('incharge.reg__no = students.reg__no');
            })
            ->exists()){
            $fail('The registration number is Already registered.');
        }
        if(DB::table('incharge')->where('reg__no', $value)
                ->orWhereExists(function ($query) use ($value) { 
                $query->select(DB::raw(1))->from('students')
                ->whereRaw('students.reg__no = incharge.reg__no');
            })
            ->exists()){
            $fail('The registration number is Already registered.');
        }
            
    }
}

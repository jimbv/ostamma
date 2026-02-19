<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class ReCaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret'   => env('GOOGLE_RECAPTCHA_SECRET'),
                'response' => $value,
                'remoteip' => request()->ip(),
            ]
        );

        $data = $response->json();
        if (!($data['success'] ?? false)) {
            $fail('Error en la verificación reCAPTCHA.');
        }
    }
}

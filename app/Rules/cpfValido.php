<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CpfValido implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Remove caracteres não numéricos
        $cpf = preg_replace('/\D/', '', $value);

        // Verifica se tem 11 dígitos ou é uma sequência inválida
        if (strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)) {
            $fail('O CPF informado não é válido.');
            return;
        }

        // Validação dos dígitos verificadores
        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = (10 * $d) % 11;
            $d = ($d == 10) ? 0 : $d;

            if ($cpf[$t] != $d) {
                $fail('O CPF informado não é válido.');
                return;
            }
        }
    }
}

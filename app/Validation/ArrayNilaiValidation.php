<?php

namespace App\Validation;

use CodeIgniter\Validation\Rules;

class ArrayNilaiValidation extends Rules
{
    public function array_count(array $array, string $fields, array $data, string $error = null): bool
    {
        // Check if the array has exactly three elements
        return count($array) === 3;
    }
}

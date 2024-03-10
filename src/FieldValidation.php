<?php

declare(strict_types=1);

namespace Kostarh9\OtusComposerPackage;

class FieldValidation {

    public function phoneIsValid($value): bool|int {
        if($value) {
            return preg_match('/^[0-9\-\(\)\/\+\s]*$/', $value, $matches);
        }
        return false;
    }

    public function fioIsValid($value): bool|int {
        return preg_match_all('/^([a-zA-Zа-яёА-ЯЁ\s\-()`\'"]+\s+[a-zA-Zа-яёА-ЯЁ\s\-()`\'"]+)$/u', $value);
    }

    public function emailIsValid($value): bool|string {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

}
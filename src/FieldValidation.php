<?php

declare(strict_types=1);

namespace Kostarh9\OtusComposerPackage;

class FieldValidation {

    public function phoneIsValid($value): bool {
        if($value) {
            return preg_match('/^[0-9\-\(\)\/\+\s]*$/', $value, $matches);
        }
        return false;
    }

    public function fioIsValid($value): bool {
        return preg_match_all('/^([a-zA-Zа-яёА-ЯЁ\s\-()`\'"]+\s+[a-zA-Zа-яёА-ЯЁ\s\-()`\'"]+)$/u', $value);
    }

    public function emailIsValid($value): bool {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

}

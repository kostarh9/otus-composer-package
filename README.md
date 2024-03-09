
# Field Validation

Валидация полей формы

## Требования
- PHP 7.4

## Установка
```bash
composer require kostarh9/otus-composer-package
```

### Использование

```php
<?php
$fieldValidation = new FieldValidation();
if($fieldValidation->phoneIsValid('2-19-65') {
    // do something
}
```
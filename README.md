
# Процессор строк

Краткое описание пакета

## Требования
- PHP 7.4

## Установка
```bash
composer require dmitrikirillov/otus-composer-package
```

### Использование

```php
<?php
$processor = new StringProcessor();
echo $processor->getLength('my string')
```
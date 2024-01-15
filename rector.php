<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->importNames();

    $rectorConfig->paths([
        __DIR__ . '/src',
    ]);

    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_80,
        SetList::CODE_QUALITY,
        SetList::NAMING,
        SetList::CODING_STYLE,
        SetList::TYPE_DECLARATION,
        SetList::PRIVATIZATION,
        SetList::DEAD_CODE,
        PHPUnitSetList::PHPUNIT_100,
        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
    ]);
};

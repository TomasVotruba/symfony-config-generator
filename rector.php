<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPhpSets()
    ->withImportNames(removeUnusedImports: true)
    ->withPaths([
        __DIR__ . '/src',
    ])
    ->withPreparedSets(codeQuality: true, naming: true, codingStyle: true, deadCode: true, privatization: true);

<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPhpSets()
    ->withPreparedSets(codeQuality: true, deadCode: true, codingStyle: true, typeDeclarations: true, naming: true, privatization: true, earlyReturn: true)
    ->withPaths([__DIR__ . '/bin', __DIR__ . '/config', __DIR__ . '/src', __DIR__ . '/config', __DIR__ . '/tests'])
    ->withRootFiles()
    ->withImportNames()
    ->withBootstrapFiles([__DIR__ . '/tests/bootstrap.php'])
    ->withSkip([
        '*/Source/*',
        '*/Fixture/*',
        __DIR__ . '/src/SniffRunner/ValueObject/File.php',
        __DIR__ . '/scoper.php',
    ]);

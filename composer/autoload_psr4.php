<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir).'/mediawiki';

return array(
    'WrappedString\\' => array($vendorDir . '/wikimedia/wrappedstring/src'),
    'Wikimedia\\Composer\\' => array($vendorDir . '/wikimedia/composer-merge-plugin/src'),
    'Wikimedia\\Assert\\Test\\' => array($vendorDir . '/wikimedia/assert/tests/phpunit'),
    'Wikimedia\\Assert\\' => array($vendorDir . '/wikimedia/assert/src'),
    'ValueValidators\\' => array($vendorDir . '/data-values/validators/src'),
    'Symfony\\Component\\Yaml\\' => array($vendorDir . '/symfony/yaml'),
    'Symfony\\Component\\Process\\' => array($vendorDir . '/symfony/process'),
    'SubPageList\\' => array($baseDir . '/extensions/SubPageList/src'),
    'ParserHooks\\' => array($baseDir . '/extensions/ParserHooks/src', $vendorDir . '/mediawiki/parser-hooks/src'),
    'ParamProcessor\\' => array($baseDir . '/extensions/Validator/src/ParamProcessor', $vendorDir . '/param-processor/param-processor/src', $baseDir . '/extensions/Validator/src/ParamProcessor'),
    'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
    'JsonSchema\\' => array($vendorDir . '/justinrainbow/json-schema/src/JsonSchema'),
    'Composer\\Semver\\' => array($vendorDir . '/composer/semver/src'),
);

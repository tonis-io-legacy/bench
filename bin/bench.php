#!/usr/bin/env php
<?php
chdir(dirname(__DIR__));

function get_frameworks()
{
    $files = glob('composer.json.*');
    $frameworks = [];

    foreach ($files as $file) {
        preg_match('@composer.json.(\w+)@', $file, $matches);
        $frameworks[] = $matches[1];
    }

    return $frameworks;
}

function run($cmd)
{
    say('Running: ' . $cmd);
    exec($cmd);
}

function say($msg)
{
    echo $msg . PHP_EOL;
}

$frameworks = get_frameworks();

if ($argc == 1) {
    say(sprintf('You need to specify a framework: %s', implode(', ', $frameworks)));
}

if (!in_array($argv[1], $frameworks)) {
    say(sprintf('You need to specify a valid framework: %s', implode(', ', $frameworks)));
}

$framework = $argv[1];

if (file_get_contents('composer.json') !== file_get_contents('composer.json.' . $framework)) {
    run('rm -rf vendor/');
    run(sprintf('cp composer.json.%s composer.json', $framework));
    run('composer update --prefer-dist -o');
}
run(sprintf('cd public/ && php -S 127.0.0.1:8080 %s.php', $framework));

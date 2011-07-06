<?php

$CONFIG = array(
    'preCommit' => array(
        'run-php-lint',
        'check-for-dos-endings',
        'check-whitespace',
        'enforce-coding-standards',
        'run-phpunit',
    ),
    'postCommit' => array(
        'happy-commits',
    ),
    'PivotalAPIToken' => '0123456789abcdef0123456789abcdef', // Scoped to a specific user --- https://www.pivotaltracker.com/profile to generate your own
);

// Currently uses PHP CodeSniffer
$CONFIG['codingStandard'] = 'Yourcodingstandard';

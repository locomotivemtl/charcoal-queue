<?php

/** Composer autoloader for Charcoal's PSR4-compliant Unit Tests */
$autoloader = require __DIR__.'/../vendor/autoload.php';
$autoloader->add('Charcoal\\', __DIR__.'/src/');
$autoloader->add('Charcoal\\Tests\\', __DIR__);

/** @todo For now, this var needs to be set automatically */
//Charcoal::init();
//Charcoal::config()['ROOT'] = '';

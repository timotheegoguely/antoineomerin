<?php

@include __DIR__ . DS . 'license.php';

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('debug', false);

c::set('languages', array(
  array(
    'code'    => 'fr',
    'name'    => 'French',
    'default' => true,
    'locale'  => 'fr_FR',
    'url'     => '/'
  ),
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en'
  )
));

//c::set('language.detect', true);
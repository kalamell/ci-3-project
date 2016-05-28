<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
butsayapat.pongjirasin@isobar.com
worasin.soongsud@isobar.com
chanyasasi.thanakiatsakul@isobar.com
pissanusak.in-anan@isobar.com
sankhumpha84@gmail.com
suparat.padsada@isobar.com
wasant.kraisornsiwawet@isobar.com
*/
$hook['pre_controller'][] = array(
        'class'    => 'MyClass',
        'function' => 'getSite',
        'filename' => 'MyClass.php',
        'filepath' => 'hooks',
        'params'   => array('beer', 'wine', 'snacks')
);

<?php

$config = array();
$config['name'] = "Kaizen";
$config['author'] = "NDH";
$config['version'] = '5.5';
$config['url'] = "";
$config['standalone_module_skins'] = true;
$config['framework'] = "bootstrap5";

$config['settings']['service_provider'] = [
    \MicroweberPackages\Template\NewWorld\TemplateServiceProvider::class
];


$config['is_default'] = 1; //if you set this parameter the template will be selected on the install screen

//Stylesheet Settings / accept type="color" and type="text" and type="title" and type="delimiter"

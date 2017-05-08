<?php
require_once dirname(__FILE__) . '/../../ActiveRecord.php';
// initialize ActiveRecord
// change the connection settings to whatever is appropriate for your mysql server 
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('.');
    $cfg->set_connections(array('development' => 'mysql://root:root@127.0.0.1/test'));
});
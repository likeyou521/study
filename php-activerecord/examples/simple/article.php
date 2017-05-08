<?php
require_once dirname(__FILE__) . '/init.php';

class Article extends ActiveRecord\Model
{
	// explicit table name since our table is not "books"
	static $table_name = 'article';
	static $belongs_to = array(
    	array('user')
  	);

}


// var_dump(Article::first());


?>

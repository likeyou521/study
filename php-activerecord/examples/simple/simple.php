<?php
require_once dirname(__FILE__) . '/../../ActiveRecord.php';

require_once dirname(__FILE__) . '/init.php';
// assumes a table named "books" with a pk named "id"
// see simple.sql
class Book extends ActiveRecord\Model { }



print_r(Book::first()->attributes());
?>

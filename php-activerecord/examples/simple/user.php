<?php

require_once dirname(__FILE__) . '/init.php';
// assumes a table named "books" with a pk named "id"
// see simple.sql
class User extends ActiveRecord\Model 
{ 
	// explicit table name since our table is not "books"
	static $table_name = 'user';

	// explicit pk since our pk is not "id"
	static $primary_key = 'uid';

	static $has_one = array(array('article','foreign_key'=>'uid'));
}


// var_dump(User::find(2)->article);
// $users = User::all();
// var_dump($users);

/*
*@brief 最强查集合
*/
# using some conditions
// $users = User::find('all',array( 
// 						'conditions' => array('uid in (?)', array(2,3,4,5,6)),
// 						'conditions' => array('name like (?)', '%a%'),
// 						'order' => 'uid desc', 
// 						'group' => 'uid', 
// 						'having' => 'uid > 1',
// 						'limit' => 0
// 								) 
// 					);

/*
*@brief 裸奔sql语句
**/
// $users = User::find_by_sql('select * from `user` where uid in(1,2,3,4,5) order by uid desc');

// foreach($users as $user)
// {
// 	echo '序号：'.$user->uid.'  姓名：'.$user->name.' 文章内容：'.$user->article->comment.' <br />'; 
// }

// $users = new User();

/*
* @brief 增 create 
**/
// $users->name = 'Mickey';
// $users->state = 1;
// $users->save();

/*
* @brief 删 delete
**/
// $post = $users->find(3)->delete();

// echo $post;
#集合删除
// User::table()->delete(
// 				array('uid' => array(2)
// 						)
// 				);



/*
* @brief 改 update
**/

// $post = $users->find(1);
// $post->name='maike';
// $post->save();


# Model::table()->update(AttributesToUpdate, WhereToUpdate);
// $setname = array('name' => 'Massive title!');
// $whereid = array('uid' => array(6));
// User::table()->update($setname,$whereid);

/* 
*@brief 查 read
**/
//主键第一条
// $post = $users->find(1);
// echo $post->uid; # 1
// echo $post->name; # 'maike'

//表里所有的记录信息
// $post = $users->all();

// var_dump($post);

# using some conditions
// $posts = $users->find('all',array('conditions' => array('name=?','maike')));

// $posts = $users->find('all',array('conditions' => array('state>?',0)));


// var_dump($posts);

// $infos = User::find('all',array('conditions' => array('uid in (?)', array(2,5))));

// var_dump($infos);



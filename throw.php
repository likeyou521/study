<?php

class Errorcode
{
	const MARK = 0;
}

// echo Errorcode::MARK;



try{
	$a = 10;

	if($a == 10)
	{
		throw new Exception('出错了您嘞',Errorcode::MARK);
	}
}catch (Exception $e){
	echo $e->getMessage().'<br />';
	echo $e->getCode();
}
仿件对象(Mock Object)

将对象替换为能验证预期行为（例如断言某个方法必会被调用）的测试替身的实践方法称为模仿(mocking)。


观察者模式
/********************************************************************/
Subject类
成员属性 protected $observers = [];  //观察者的一个数组集合
成员属性 protected $name; //Subject的名字
构造函数 public function __construct($name){ $this->name = $name;}  

成员方法 
/*
*@brief 得到Subject的名字
*/
public function getName(){return $this->name;}

/*
*@brief 绑定观察者
*/                      类名     变量名  $observer是实例化Observer类后的对象  
public function attach(Observer $observer){$this->observers[] = $observer;}

/*
*@brief 通知已经订阅的观察者
*/
 public function doSomething()
 {
     // 做点什么
     // ...

     // 通知观察者发生了些什么
     $this->notify('something');
 }

/*
*@brief 收到的信息 发送到观察者 的方法
*/
protected function notify($argument)
{
    foreach ($this->observers as $observer) {
        $observer->update($argument);
    }
}

 // 其他方法。

 /------------------------------------------------------------/

 Observer类

成员方法 public function update($argument){ // 做点什么。}


/*******************************************************************/

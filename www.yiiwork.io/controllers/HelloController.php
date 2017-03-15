<?php
namespace app\controllers;

use yii\web\Controller;
//1.控制器的命名规范:控制器名Controller.php
//2.访问控制器的函数:?r=控制其名/操作名
//2.1控制器名和操作名都要小写
class HelloController extends Controller{
    public $layout = "mylayout";
    public function actionSayhello(){
        echo "Hello World !";
//        tp5 return $this->fetch(); 参数默认和操作同名
//        yii return $this->render(); 必须指定模板名
        return $this->render("sayhello");
    }
//    tp5 request()
//    yii 需要自己实例化对象
    public function actionIndex() {
//        $session = \Yii::$app->session;
//        Yii中\Yii::$app->session用的时候如果没开启会自动开启
//        $_SESSION PHP原生的代码 session_start();
//        $session['name'] = 'zhangSan';
//        if($session->isActive){
//            echo "session已经开启";
//        }  else {
//            echo 'session没有开启';
////            $session->open();
//        }
//        if($session->has("age")){
//            echo '存储了';
//       }
//            echo '存储的姓名为'.$session['name']."<hr>";
//        遍历不行了
//        foreach ($session['_flashParam'] as $key => $value) {
//            echo $key."**********<**>***<**>**********".$value."<hr>";
//        }
//        $session->close(); 关闭session
//        $session->remove("name");//删除单个
//        $session->destroy();删除所有 
        
//        服务器把cookie发给(存储)浏览器
//        写cookie
//        7bd5ee08f3933376944e8ef6488a936d1b7608f329be21fed8c28eb36b39befba%3A2%3A%7Bi%3A0%3Bs%3A4%3A%22LiSi%2…
        $cookies = \Yii::$app->response->cookies;
        
        $cookies->add(new \yii\web\Cookie([
                       'name' => 'name',
                       'value' => '大宝元年',
                       'expire' => time()+60*60*24*7,
                    ]));

//        浏览器吧cookie发给服务器
//        如果用户修改了浏览器上的cookie值
        $cookies = \Yii::$app->request->cookies;
        var_dump($cookies);
        echo '<hr>';
        if(isset($cookies['name'])){
            echo "从浏览器发过来的cookie是".$cookies['name']."<hr>";
        }
//       
       
        
        
        
        
        
        
        
//       $request = \Yii::$app->request;
////       $response = \Yii::$app->response;
////       tp5中是 input('get.')
//       $get = $request->get();
//       var_dump($get);
//       echo '<hr>';
//       $name = $request->get('name');
////       参数2 字段的默认值
//       $name = $request->get('name',"没有姓名");
//       if($request->isGet){
//           echo '这是get请求';
//       }
//       var_dump($name);
////       url 有助于做缓存处理
//       echo '<hr>'.$request->url;
//       echo '<hr>'.$request->absoluteurl;
//       echo '<hr>'.$request->queryString;
//       $header = $request->headers;
//       echo '<hr>'.$header->get('accept-language');
//       echo '<hr>'.$request->userHost;
//       echo '<hr>'.$request->userIP;
//       $response = \Yii::$app->response;
////       tp5 json("",404);
////       $response->statusCode = 200;
//       $response->headers->add("name","zhangSan");
//       $response->headers->add("Server","Nginx");
//       $response->content="Hello World";
////       $response->redirect("http://www.baidu.com",301)->send();
////       sendFile适合返回小文件
////       sendStreamAsFile适合返回大文件
//       $response->sendFile("robots.txt");
    }
    public function actionTest(){
//        render($view, $params = []) 参数2是个数组
        $name = \Yii::$app->request->get('name');
        $images = ["1.png","2.png","3.png"];
        return $this->render("test",[
            "name"=>$name,
            "pic"=>$images,
             'address'=>"<h1 style='color:red;'>世界那么大,脚本攻击</h1>"   
            ]);
    }
}
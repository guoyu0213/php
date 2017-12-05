<?php
//require './vendor/autoload.php';

namespace frontend\controllers;
use Yii;
use yii\data\Pagination;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm; 
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\Title;
use DfaFilter\SensitiveHelper;

/**
 * Site controller
 */
class DemoController extends Controller
{	
    
  
   // 
	public $enableCsrfValidation = false;
    public function actionIndex(){
    	 return $this->render('index');
    }
    public function actionLogin(){
        $data = yii::$app->request->post();
        $sql="SELECT * FROM username WHERE username='".$data['username']."' And password = '".$data['password']."'";
      
        $query = Yii::$app->db->createCommand($sql)->queryOne();
       if($query){
       $session = Yii::$app->session;
       $session->open();
       $session->set('username',$query['username']);

            $this->redirect(array('/demo/show','username'=>$query['username']));
       }else{
            echo "登录失败";
            //$this->redirect(array('/demo/index'));
       }

    }
    public function actionShow(){
         $data = yii::$app->request->get();
        
        return $this->render('show',['username'=>$data['username']]);
    }
     public function actionAdd(){
           $data = yii::$app->request->post();
          // print_r($data['title']);
        $wordData = array(
        '你妈',
        '草',
        '小学生',
        '你妹',
        '你大爷',
        
    );
          $islegal = SensitiveHelper::init()->setTree($wordData)->islegal($data['title']);
          $filterContent = SensitiveHelper::init()->setTree($wordData)->replace($data['title'], '***');
        $username = $data['username'];
        $title= $filterContent;
        $nei = $data['nei'];
         $sql= "INSERT INTO title (username,title,nei) VALUES ('".$username."','".$title."','".$nei."')";
         $res=Yii::$app->db->createCommand($sql)->execute();
         if($res){
            $this->redirect(array('/demo/zhangshi','username'=>$username));  
         }else{ 
            echo "添加失败";
         }
     }
     public function actionZhangshi(){

          $data = yii::$app->request->get();
         $sql="SELECT * FROM title ";
        $query = Yii::$app->db->createCommand($sql)->queryAll();


         $sql="SELECT * FROM title";
        $query = Yii::$app->db->createCommand($sql)->queryAll();
        $co =  count($query);
        $data = Title::find();  //Field为model层,在控制器刚开始use了field这个model,这儿可以直接写Field,开头大小写都可以,为了规范,我写的是大写
        $pages = new Pagination(['totalCount' =>$co, 'pageSize' => '2']);    //实例化分页类,带上参数(总条数,每页显示条数)
        $model = $data->offset($pages->offset)->limit($pages->limit)->all();
        return $this->renderPartial('zhangshi',[
            'model' => $model,
            'pages' => $pages,
            'data'=> $query,
        ]);

       
        //print_r($query);die;
       // return $this->render('zhangshi',['data'=>$query]);
     }
     public function actionDelete(){
         $data = yii::$app->request->get();
         //print_r($data);die;
         $sql="DELETE FROM title WHERE id ='".$data['id']."' ";
        $res = \Yii::$app->db->createCommand($sql)->execute();
        if($res){
               $session = Yii::$app->session;
            $session->open();
           $username =  $session->get('username');
        
            $this->redirect(array('/demo/zhangshi','username'=>$username));
        }else{
            echo "删除失败";
        }
     }

      public function actionUpdate(){
            $data = yii::$app->request->get();
          $sql="SELECT * FROM title WHERE id='".$data['id']."'";
        $query = Yii::$app->db->createCommand($sql)->queryOne();
        //print_r($query);die;
        return $this->render('update',['data'=>$query]);
      }
      public function actionUpdates(){
        $data = yii::$app->request->post();

         $sql='UPDATE title SET username = "'.$data['username'].'" ,title = "'.$data['title'].'",nei = "'.$data['nei'].'"   WHERE id = :id';
        $res = Yii::$app->db->createCommand($sql,[':id'=>$data['id']])->execute();
        if($res){
             $session = Yii::$app->session;
            $session->open();
           $username =  $session->get('username');
             $this->redirect(array('/demo/zhangshi','username'=>$username));
        }else{
            echo "修改失败";
        }
     }

      function actionFenye(){
       
    }
}

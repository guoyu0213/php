<?php
namespace frontend\controllers;
use Yii;
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

/**
 * Site controller
 */
class HomeController extends Controller
{	
	public $enableCsrfValidation = false;
    public function actionIndex(){
    	 return $this->render('index');
    }
    public function actionAdd(){
    	 	
    	 	$data = yii::$app->request->post();
    	 	$username = $data['username'];
    	 	$password = $data['password'];
    	 $sql= "INSERT INTO username (username, password) VALUES ('".$username."','".$password."')";
    	 $res=Yii::$app->db->createCommand($sql)->execute();
    	 if($res){
    	 	$this->redirect(array('/home/show'));  
    	 }else{
    	 	echo "添加失败";
    	 }
    }
    public function actionShow(){

    	$sql="SELECT * FROM username";
    	$query = Yii::$app->db->createCommand($sql)->queryAll();
    	return $this->render('show',['data'=>$query]);
    }
    public function actionDelete(){
    	$data = yii::$app->request->get();
    	$sql="DELETE FROM username WHERE id ='".$data['id']."' ";
    	$res = \Yii::$app->db->createCommand($sql)->execute();
    	if($res){
    		$this->redirect(array('/home/show'));
    	}else{
    		echo "删除失败";
    	}
    }
     public function actionUpdate(){
     	$data = yii::$app->request->get();
     	  $sql="SELECT * FROM username WHERE id='".$data['id']."'";
     	$query = Yii::$app->db->createCommand($sql)->queryOne();
     	return $this->render('update',['data'=>$query]);
     }
     public function actionUpdates(){
     	$data = yii::$app->request->post();
     	 $sql='UPDATE username SET username = "'.$data['username'].'" ,password = "'.$data['password'].'"   WHERE id = :id';
		$res = Yii::$app->db->createCommand($sql,[':id'=>$data['id']])->execute();
		if($res){
			$this->redirect(array('/home/show'));
		}else{
			echo "修改失败";
		}
     }
}

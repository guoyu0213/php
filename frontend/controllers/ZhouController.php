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

class ZhouController extends Controller
{

    public $enableCsrfValidation = false;
    public function actionIndex(){
        $sql = "SELECT * FROM z1_user";
        $query = Yii::$app->db->createCommand($sql)->queryOne();
        return $this->render('index',['data'=>$query]);
    }
    public function actionAdd(){
       $data = yii::$app->request->post();
       if($data['password']==$data['passwords']){
             $sql = "INSERT INTO z1_user(phone,password) VALUES('".$data['phone']."','".$data['password']."')";
            $query = Yii::$app->db->createCommand($sql)->execute();
              $this->redirect(array('/zhou/zhang'));
        }else{
        echo "密码不正确";
        }
    }
    public function actionZhang(){
        $sql = "SELECT * FROM z1_biaoqian";
        $query = Yii::$app->db->createCommand($sql)->queryOne();
       return $this->render('zhang',['data'=>$query]);
    }
    public function actionZhu(){
          $data = yii::$app->request->post();
          $sql = "INSERT INTO z1_biaoqian(nickname,shengri,dizhi) VALUES('".$data['nickname']."','".$data['shengri']."','".$data['dizhi']."')";
          $query = Yii::$app->db->createCommand($sql)->execute();
          $this->redirect(array('/zhou/biao'));
    }
    public function actionBiao(){
        $sql = "SELECT * FROM z1_biaoqian";
        $query = Yii::$app->db->createCommand($sql)->queryOne();

        return $this->render('biao',['data'=>$query]);
    }
    public function actionWan(){
        echo "完成";
    }

}

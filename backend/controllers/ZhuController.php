<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class ZhuController extends Controller
{
    public  $enableCsrfValidation=false;
    public $layout = 'index';
    public function actionIndex(){
        $sql = "SELECT * FROM ziduan";
        $query = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('index',['data'=>$query]);
    }
    public function actionInsert(){
        return $this->render('insert');
    }
    public function actionAdd(){

        $data = yii::$app->request->post();
        if($data['xianzhi1']==''&&$data['xianzhi2']==''){
            $arr['xianzhi'] = '无';
            
        }else if($data['xianzhi1']!=''&&$data['xianzhi2']!=''){

            $arr['xianzhi'] =$data['xianzhi1'].'~'.$data['xianzhi2'];
        }
        $sql= "INSERT INTO ziduan (ziduan,type,moren,isset,guize,xianzhi,xianzhi1,xianzhi2) VALUES ('".$data['ziduan']."','".$data['type']."','".$data['moren']."','".$data['isset']."','".$data['guize']."','".$arr['xianzhi']."','".$data['xianzhi1']."','".$data['xianzhi2']."')";
        $res=Yii::$app->db->createCommand($sql)->execute();
        if($res){   
           $this->redirect(array('/zhu/index'));  
        }else{  
            echo "添加失败";
        }
    }
    public function actionUpdate(){
         $data = yii::$app->request->get();
         $sql = "SELECT * FROM ziduan WHERE id = '".$data['id']."'";
         $query = Yii::$app->db->createCommand($sql)->queryOne();
         //print_r($query);die;
         return $this->render('update',['data'=>$query]);
    }
    public function actionDelete(){
        $data = yii::$app->request->get();
        $sql="DELETE FROM ziduan WHERE id ='".$data['id']."' ";
        $res = \Yii::$app->db->createCommand($sql)->execute();
        $this->redirect(array('/zhu/index'));  
    }
    public function actionUpdates(){
         $data = yii::$app->request->post();
          if($data['xianzhi1']==''&&$data['xianzhi2']==''){
            $arr['xianzhi'] = '无';
            
        }else if($data['xianzhi1']!=''&&$data['xianzhi2']!=''){

            $arr['xianzhi'] =$data['xianzhi1'].'~'.$data['xianzhi2'];
        }
          $sql='UPDATE ziduan SET ziduan = "'.$data['ziduan'].'" ,moren = "'.$data['moren'].'",type = "'.$data['type'].'",isset="'.$data['isset'].'",guize="'.$data['guize'].'",xianzhi="'.$arr['xianzhi'].'"   WHERE id = :id';
        $res = Yii::$app->db->createCommand($sql,[':id'=>$data['id']])->execute();
        if($res){
           $this->redirect(array('/zhu/index'));
        }else{
            echo "修改失败";
        }
    }
}

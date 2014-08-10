<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14-5-20
 * Time: 下午3:12
 */

class BaseController extends Controller{

        protected $userId;
        protected $userName;
        protected $realName;
        protected $permission;
        protected $_setting;

        public function init(){
            parent::init();
            $this->userId=Yii::app()->user->getState('userId');
            $this->userName=Yii::app()->user->getState('userName');
            $this->realName=Yii::app()->user->getState('realName');

            if(empty($this->userId)){
                $this->redirect(array('/site/index'));
            }

            $this->_setting=require_once('/protected/config/setting.php');


        }
} 
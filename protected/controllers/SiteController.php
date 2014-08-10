<?php
class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	/**
	 * 登录
	 */
	public function actionLogin()
	{
        $model=new Manager();
        $errorCode = 1;
        $errorCode = 1;
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $post['username'] = trim($_POST['username']);
            $post['password'] = trim($_POST['password']);

            $model->attributes = $post;
            if($model->validate()){
                $result =  $model->login();
                if($result){
                    $this->redirect( $this->createUrl('member/index'));
                }else{
                    $errorCode = 0;
                }
            }
        }
        $this->render('index',array('errorCode'=>$errorCode));
	}

    /**
     * 检测是否登录
     */
    public function actionIslogin(){
       $msg = array('success'=>false,'errors'=>array('msg'=>'未登录'));
       if( Yii::app()->user->getState('userId') ){
           $msg = array('success'=>true,'msg'=>'');
       }
        echo(CJSON::encode($msg));
    }
    /**
     * 修改用户登录密码
     */
    public function actionUpdate()
    {
        $newPassword = $_POST['password']?trim($_POST['password']):'';
        if($newPassword){
            exit('-1');
        }
        $userId = Yii::app()->user->getState('userId');
        $model = $this->loadModel($userId);
        $model->PASSWORD = md5($newPassword);
        if ($model->save())
            exit(1);
        else
            exit(0);
    }

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
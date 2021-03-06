<?php

class CompanyController extends BaseController
{

    public function init(){
        parent::init();
    }

    /*
     * 首页
     */
    public function actionIndex()
    {
        $condition = array(
            'periodicalId'=>isset($_POST['periodicalId'])?trim($_POST['periodicalId']):0,
            'companyCode1'=>isset($_POST['companyCode1'])?trim($_POST['companyCode1']):'',
            'companyCode2'=>isset($_POST['companyCode2'])?trim($_POST['companyCode2']):'',
            'address'=>isset($_POST['address'])?trim($_POST['address']):'',
            'productCode'=>isset($_POST['productCode'])?trim($_POST['productCode']):''
        );
        $list = Company::model()->getList($condition);
        $this->render('index',array('list'=>$list));
    }

    public function actionAdd(){
        $this->layout = 'none';

        $jzsType = $this->_setting['jzsType'];

        $this->render('add',array('jzsType'=>$jzsType));
    }
    public function actionCreate()
    {
        $model = new Company();
        if (isset($_POST)) {
            if ($model->saveData($_POST)){
                $msg = array('success'=>true,'msg'=>'厂商添加成功');
            }else{
                $msg = array('success'=>false,'msg'=>'厂商保存失败');
            }
            exit(CJSON::encode($msg));
        }
    }

    public function actionView()
    {
        $companyId = isset($_GET['companyId'])?intval($_GET['companyId']):0;
        $item = $this->loadModel($companyId);
        echo CJSON::encode(array('info'=>$item));
    }


    public function actionUpdate($id)
    {
        $model = new Company();
        if (isset($_POST)) {
            if ($model->saveData($_POST)){
                $msg = array('success'=>true,'msg'=>'厂商修改成功');
            }else{
                $msg = array('success'=>false,'msg'=>'厂商修改失败');
            }
            exit(CJSON::encode($msg));
        }
    }


    public function actionDelete($id)
    {
        if ($this->loadModel($id)->delete())
            exit(1);
        else
            exit(0);
    }

    public function actionSearch(){
        $this->layout = 'none';
        $condition = array(
            'periodicalId'=>isset($_POST['periodicalId'])?trim($_POST['periodicalId']):0,
            'companyCode1'=>isset($_POST['companyCode1'])?trim($_POST['companyCode1']):'',
            'companyCode2'=>isset($_POST['companyCode2'])?trim($_POST['companyCode2']):'',
            'address'=>isset($_POST['address'])?trim($_POST['address']):'',
            'productCode'=>isset($_POST['productCode'])?trim($_POST['productCode']):'',
            'email'=>isset($_POST['email'])?trim($_POST['email']):''
        );
        $list = Company::model()->getList($condition);
        $this->render('search',array('list'=>$list));
    }

    public function loadModel($id)
    {
        $model = Company::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }


}

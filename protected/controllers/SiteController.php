<?php

class SiteController extends CController
{
	public function actionIndex()
	{
	    $preps=preps::model()->findAll();
        $this->render('Index',['Preps'=>$preps]);
	}
	
	public function actionStudents()
	{
	    $students=Students::model()->findAll();
        $this->render('Studs',['Students'=>$students]);
	}
    
    public function actionKafedrs()
    {
        $kafedrs=Kafedrs::model()->findAll();
        $this->render('Kafs',['Kafedrs'=>$kafedrs]);
    }
    
   	public function actionAbiturient()
	{
	    $abiturient=Abiturient::model()->findAll();
        $this->render('Abitur',['Abiturient'=>$abiturient]);
	}
    
       	public function actionLogin()
	{
        $this->render('Login');
	}
    
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
    
}
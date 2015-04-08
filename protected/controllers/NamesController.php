<?php

class NamesController extends CController
{
	public function actionIndex()
	{
        $names = ['Аня','Petya','Sasha'];
        $this->render('index',['namesArray'=>$names]);
	}
}
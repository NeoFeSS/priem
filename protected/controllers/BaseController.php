<?php

class BaseController extends CController
{
    public function actionIndex()
    {
        $a=1;
        $b=10;
        if ($b>=2)
        {
            echo $a;
            $b=$b-1;
        }
        $this->render('index');
    }
    
    
}
    


?>
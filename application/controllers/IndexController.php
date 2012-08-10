<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $model = new Application_Model_Post();
        $dados = $model->select();

        $this->view->assign("dados", $dados);
    }

    public function sobreAction()
    {
        // action body
    }


}






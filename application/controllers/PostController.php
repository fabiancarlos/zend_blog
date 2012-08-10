<?php

class PostController extends Zend_Controller_Action
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

    public function showAction()
    {
        // action body
    }

    public function newAction()
    {
        // action body
    }

    public function createAction()
    {
        // action body
    }

    public function editAction()
    {
        // action body
    }

    public function updateAction()
    {
        // action body
    }

    public function destroyAction()
    {
        // action body
    }


}
















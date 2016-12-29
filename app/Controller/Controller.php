<?php
namespace App\Controller;

use App\Model\Model;

class Controller {
    public $model;

    public function __construct()
    {
        $this->model = new Model();

    }

    public function invoke()
    {

        $reslt = $this->model->getlogin();
        if($reslt == 'login')
        {
            include 'resource/afterlogin.php';
        }
        else
        {
            include 'resource/login.php';
        }

    }
}


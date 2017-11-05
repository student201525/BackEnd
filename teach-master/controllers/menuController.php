<?php
/**
 * Created by PhpStorm.
 * User: сергей
 * Date: 03.11.2017
 * Time: 13:09
 */

class menuController
{
    /*1 method*/
    public function index()
    {
        $examples=$this->model->load();
        $this->setResponce($examples);
    }
}
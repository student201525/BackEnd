<?php
/**
 * Created by PhpStorm.
 * User: сергей
 * Date: 03.11.2017
 * Time: 13:10
 */

class gameObjectController
{
    /*1,2,3,4,5 methods*/
    public function index()
    {
        $examples=$this->model->load();           // просим у модели все записи
        $this->setResponce($examples);            // возвращаем ответ
    }

    public function view($data)
    {
        $example=$this->model->load($data['id']); // просим у модели конкретную запись
        $this->setResponce($example);
    }

    public function add()
    {
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['power']) && isset($_POST['speed']))
        {
            // мы передаем в модель массив с данными
            // модель должна вернуть boolean
            $dataToSave = array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'image'=>$_POST['image'], 'power'=>$_POST['power'], 'speed'=>$_POST['speed']);
            $addedItem  = $this->model->create($dataToSave);
            $this->setResponce($addedItem);
        }
    }

    public function edit($data)
    {

        // НАПИШИТЕ РЕАЛИЗАЦИЮ метода save в классе Model
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['image']) && isset($_POST['power']) && isset($_POST['speed']))
        {
            // мы передаем в модель массив с данными
            // модель должна вернуть boolean
            $dataToEdit = array('id'=>$_POST['id'], 'name'=>$_POST['name'], 'image'=>$_POST['image'], 'power'=>$_POST['power'], 'speed'=>$_POST['speed']);
            $editItem  = $this->model->save($dataToEdit, $data['id']);
            $this->setResponce($editItem);
        }
    }

    public function delete($data)
    {
        // НАПИШИТЕ РЕАЛИЗАЦИЮ метода save в классе Model
        $del=$this->model->delete($data['id']); // просим у модели конкретную запись
        $this->setResponce($del);
    }
}
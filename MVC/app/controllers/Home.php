<?php

class Home extends Controller
{

    public function index()
    {
        $model = new Model;
        $arr['age'] = 22;
        $arr['name'] = 'Moemen saadeh';


        $result = $model->where($arr);


        show($result);
        $this->view('home');
    }
}

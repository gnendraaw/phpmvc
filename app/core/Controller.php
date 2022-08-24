<?php
class Controller {
    public function view($view, $data = [])
    {
        // require_once '../app/views/' . $view . '.php';
        require_once "../app/views/{$view}.php";
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function salt($num)
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $res = '';

        for($i = 0; $i < $num; ++$i)
        {
            $x = rand(0, strlen($chars) -1);
            $res .= $chars[$x];
        }

        return $res;
    }
}
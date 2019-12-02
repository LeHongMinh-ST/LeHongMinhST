<?php

class controllers
{
    public function models($model)
    {

        require_once "./MVC/models/" . $model . ".php";
        return new $model;
    }

    public function views($view,$data=[])
    {
        require_once "./MVC/views/" . $view . ".php";
    }
}

?>
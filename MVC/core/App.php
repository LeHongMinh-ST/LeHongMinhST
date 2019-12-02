<?php
class App{

    protected $controller ="Home";
    protected $action ="Show";
    protected $prarams =[];

    public function __construct()
    {
        $arr = $this->UrlProcess();
        //Xử lý controller
        if(file_exists("./MVC/controllers/".$arr[0].".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./MVC/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        //Xử lý Function
        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action = $arr[1];
                unset($arr[1]);
            }
        }

        //Xử lý prarams
        $this->prarams = $arr ? array_values($arr) : [];

        //Thực hiện lệnh
        call_user_func_array([$this->controller,$this->action], $this->prarams);
    }

    public function UrlProcess(){
        if(isset($_GET["url"])){
            $url = $_GET["url"];
            $url = $url[strlen($url)-1] == "/" && strlen($url) != 1 ? $url : $url . "/";
            return explode("/",filter_var(trim($url)));
        }
        return [""];
    }

}

?>
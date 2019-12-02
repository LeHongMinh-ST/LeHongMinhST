<?php

class Home extends controllers
{
    private $PostModel;
    private $CategoryModel;

    public function __construct()
    {
        $this->PostModel = $this->models("Post");
        $this->CategoryModel =$this->models("Categories");
    }

    public function Show($current_page)
    {
        //Current Page Handle
        $current_page = $current_page == "" ? 1: (int)$current_page;

        $start = (($current_page - 1) * POST_PER_PAGE);


        $rowsPost = $this->PostModel->countAllPost();
        $totalPage = $this->coutPage($rowsPost);

        $data = [
            "page" => "home",
            "post"=>$this->PostModel->getAllPost(),
            "Category"=>$this->CategoryModel->Categoris(),
            "PostInPage" =>$this->PostModel->getPostInPage($start),
            "totalPage" =>$totalPage,
            "curent_page" =>$current_page
        ];
        $this->views("PageMaster", $data);
    }

    private function coutPage($rowPage)
    {
        return ceil($rowPage/POST_PER_PAGE);
    }

    public function About()
    {
        $data = $data = [
            "page" => "about",
            "post"=>$this->PostModel->getAllPost(),
            "Category"=>$this->CategoryModel->Categoris(),
        ];

        $this->views("PageMaster", $data);
    }

    public function Contact()
    {
        $data = $data = [
            "page" => "contact",
            "post"=>$this->PostModel->getAllPost(),
            "Category"=>$this->CategoryModel->Categoris(),
        ];

        $this->views("PageMaster", $data);
    }
}

?>

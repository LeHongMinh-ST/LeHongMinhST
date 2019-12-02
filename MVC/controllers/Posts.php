<?php
class Posts extends controllers
{
    private $PostModel;
    private $CategoryModel;

    public function __construct()
    {
        $this->PostModel = $this->models("Post");
        $this->CategoryModel = $this->models("Categories");
    }

    public function Show($slug)
    {
        $dataPost = $this->PostModel->getPostByslug($slug);
        $Category_Slug = $this->CategoryModel->getCategoryById($dataPost["category_id"]);
        $data = [
            "page" => "post",
            "post" => $this->PostModel->getAllPost(),
            "Category" => $this->CategoryModel->Categoris(),
            "dataPost" => $dataPost,
            "Category_Slug"=>$Category_Slug
            ];
        $this->views("PageMaster",$data);
    }
}
?>

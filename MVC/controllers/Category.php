<?php
class Category extends controllers
{
    private $CategoryModel; //
    private $PostModel;

    function __construct()
    {
        $this->CategoryModel = $this->models("Categories");
        $this->PostModel= $this->models("Post");
    }

    public function News($slug,$current_page)
    {
        //Current Page Handle
        $current_page = $current_page == "" ? 1: (int)$current_page;

        $start = (($current_page - 1) * POST_PER_PAGE);

        $numberOfPage = $this->countPageInCategory($slug);
        $Category_Slug = $this->CategoryModel->getCategoryBySlug($slug);
        $data = [
            "page" => "category",
            "postCategory"=>$this->PostModel->getPostbyCategories($Category_Slug["id"],$start),
            "Category"=>$this->CategoryModel->Categoris(),
            "Category_Slug"=>$Category_Slug,
            "post"=>$this->PostModel->getAllPost(),
            "countPage" => $numberOfPage,
            "curent_page"=> $current_page
        ];
        $this->views("PageMaster", $data);
    }

    private function countPageInCategory($slug){
        $numberOfPost = $this->PostModel->countPostInCategoryById($this->CategoryModel->getCategoryBySlug($slug)["id"]);
        return ceil($numberOfPost/POST_PER_PAGE);
    }
}

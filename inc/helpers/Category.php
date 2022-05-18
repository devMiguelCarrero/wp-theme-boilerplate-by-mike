<?php
class TBM_Category_Helper
{

    public function getPostCategories()
    {
        $categories = get_the_category();
        TBM_View::getVariable('category-list', ['categories' => $categories]);
    }

    public static function instance()
    {
        return new TBM_Category_Helper();
    }
}

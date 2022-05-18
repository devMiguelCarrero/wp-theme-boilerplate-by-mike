<?php
class TBM_Tag_Helper
{

    public function getPostTags()
    {
        $tags = get_the_tags();
        TBM_View::getVariable('tag-list', ['tags' => $tags]);
    }

    public static function instance()
    {
        return new TBM_Tag_Helper();
    }
}

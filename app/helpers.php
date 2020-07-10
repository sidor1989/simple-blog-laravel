<?
if (! function_exists('generateCategoryLists')) {
    function generateCategoryLists() {
        return \App\Category::where('parent_id', 0)->with('children')->get();
    }
}
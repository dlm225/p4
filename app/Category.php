<?php

namespace p4;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** Get the questions for the category **/
    public function questions() {
        return $this->hasMany('\p4\Question');
    }

    public static function getAllCategories() {
        $categories = \p4\Category::orderBy('id','asc')->get();

        return $categories;
    }

    public static function categoriesForDropdown() {
        # Build array for category's dropdown
        $categories = \p4\Category::orderBy('id','asc')->get();
        $categories_for_dropdown = [];
        $categories_for_dropdown[0] = 'Choose a category...';

        foreach($categories as $category) {
            $categories_for_dropdown[$category->id] = $category->category;
        }
        return $categories_for_dropdown;
    }
}

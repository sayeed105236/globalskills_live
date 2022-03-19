<?php
use App\Models\MainCategory;

if (!function_exists('categories')) {
  function categories()
  {
    $categories=MainCategory::all();
    if ($categories) {
        return $categories;
    }else {
      return [];
    }


  }

}




 ?>

<?php

namespace App\Repositories;

use DB;

class CategoryRepository
{
    public function getCategories()
    {
        $res = DB::select('select * from categories');
        return $res;
    }
}

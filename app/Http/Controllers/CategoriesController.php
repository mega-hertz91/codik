<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($id) {
        $category = '1';

        if(isset($id)) {
            $category = $id;
        }

        $cat = DB::table('categories')->where('id', intval($category))->first();

        return view('categories', ['cat' => $cat]);
    }
}

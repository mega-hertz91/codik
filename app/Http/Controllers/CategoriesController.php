<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function getCategories($id) {
        $category = $id;

        $cats = DB::table('categories')->get();
        $cat = DB::table('categories')->where('id', intval($category))->first();
        $lot_by_id = DB::table('lots')
            ->select('lots.id', 'lots.name', 'lots.description', 'lots.start_price', 'lots.finish_date', 'lots.image', 'categories.name AS cat_name')
            ->leftJoin('categories', function ($join) {
                $join->on('lots.category_id', '=', 'categories.id');
            })
            ->where('categories.id', '=', intval($id))
            ->get();

        return view('all-lot', [
            'lots' => $lot_by_id,
            'title' => $cat->name,
            'cats' => $cats
        ]);
    }

    public function getLotId($id)
    {

        $cats = DB::table('categories')->get();
        $lot_by_one = DB::table('lots')
            ->select('lots.id', 'lots.name', 'lots.description', 'lots.start_price', 'lots.finish_date', 'lots.image', 'categories.name AS cat_name')
            ->leftJoin('categories', function ($join) {
                $join->on('lots.category_id', '=', 'categories.id');
            })
            ->where('lots.id', '=', intval($id))
            ->first();

        return view('lot', [
            'lot' => $lot_by_one,
            'cats' => $cats
        ]);
    }

    public function getLotAll () {
        $categories = DB::table('categories')->get();
        $lots = DB::table('lots')
            ->select('lots.id', 'lots.name', 'lots.start_price', 'lots.finish_date', 'lots.image', 'categories.name AS cat_name')
            ->leftJoin('categories', function ($join) {
                $join->on('lots.category_id', '=', 'categories.id');
            })
            ->get();

        return view('all-lot',
            [
                'title' => 'Все лоты',
                'cats' => $categories,
                'lots' => $lots
            ]
        );
    }
}

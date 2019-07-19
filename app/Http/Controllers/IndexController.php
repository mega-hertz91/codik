<?php
/**
 * Created by PhpStorm.
 * User: PROGRAM
 * Date: 16.07.2019
 * Time: 19:25
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Facades\FunctionService;


class IndexController extends Controller
{
    public function getContent () {
        $date_now = date('Y-m-d');
        $limit_value = 6;
        $categories = DB::table('categories')->get();
        $lots = DB::table('lots')
            ->select('lots.id', 'lots.name', 'lots.start_price', 'lots.finish_date', 'lots.image', 'categories.name AS cat_name')
            ->leftJoin('categories', function ($join) {
                $join->on('lots.category_id', '=', 'categories.id');
            })
            ->limit($limit_value)
            ->where('lots.finish_date', '>=', $date_now)
            ->get();

        return view('index',
            [
                'title' => 'Yeticave - интернет аукцион', 'cats' => $categories,
                'lots' => $lots,
                'date_lot' => $date_now
            ]
        );
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PagesController extends Controller
{
    public function index() {
        return view('pages/index')->with([
            'transparent' => true
        ]);
    }

    public function shop(Request $request) {
        // Try to get the filter parameters
        try {
            $query = $request->input('query');
            $category = $request->input('category');
            $min = $request->input('minimum-price');
            $max = $request->input('maximum-price');
        } catch (\Throwable $th) {
            $query = '';
            $category = '';
            $min = 0;
            $max = 999999;
        }

        // If there was no value supplied for min or max
        if($min == '' || $max == '') {
            // Initialize it to 0 and 999999
            $min = 0;
            $max = 999999;
        }
        // Get all the laptops
        $items = Item::where([
            ['title', 'ILIKE', '%' . $query . '%'],
            ['category', 'ILIKE', '%' . $category . '%'],
        ])->whereBetween('price', [$min, $max])->orderBy('created_at')->paginate(6);

        $items->current_page = $request->input('page');

        return view('pages/shop')->with([
            'items' => $items->items(),
            'itemsCount' => $items->total(),
            'pagination' => $items->links(),
            'transparent' => true
            ]);
    }

    public function show($id) {
        $item = Item::find($id);

        return view('pages/show')->with([
            'item' => $item,
            'transparent' => 'false' # For some reason false (boolean) is evaluated to empty
        ]);;
    }
}

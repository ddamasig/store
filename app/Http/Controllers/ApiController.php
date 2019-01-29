<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ApiController extends Controller
{
    public function get(Request $request) {
        // Try to get the filter parameters
        try {
            $query = $request->input('query');
            $category = $request->input('category');
            $min = $request->input('min');
            $max = $request->input('max');
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
        $sample = Item::paginate(5);

        $pagination = [
            'total' => $items->total(),
            'per_page' => $items->perPage(),
            'current_page' => $items->currentPage(),
            'last_page' => $items->lastPage(),
            'from' => $items->firstItem(),
            'to' => $items->lastItem(),
            'links' => $items->links()
        ];

        return response()->json([
            'items' => $items->items(),
            'itemsCount' => $items->total(),
            'pagination' => $sample,
            'query' => $query
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->toArray();
        return array_reverse($products);
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
        // validate fields
        $attrs = $request->validate([
            'name' => 'required|string',
            'image' => 'required|file',
        ]);


        //Area registration
        /* if (auth()->user()->id)
        {
            return response([
                'message' => 'Permission denied to create Area.'
            ]);
        }
        else
        {
            $area = Area::create([
                'name' =>$attrs['name'],
                'user_id' => auth()->user()->id,
                'etat' => 1
            ]);
        }*/
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->file('image')->storePubliclyAs('upload' ,$imageName);


        $product = Product::create([
            'name' =>$request->name,
            'picture' => $imageName,
            'description' => $request->description,
            'etat' => 1
        ]);

        return response([
            'product' => $product,
        ], 200);
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

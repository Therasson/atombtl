<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pos;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*return response([
            'areas' => Area::orderBy('created_at', 'desc')->with('user', function($user) { return $user->get(); })
                ->get()
        ], 200);

        return response([
            'pos' => Pos::orderBy('created_at', 'desc')->get()
        ], 200);*/

        $pos = Pos::all()->toArray();
        return array_reverse($pos);
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
        var_dump($rquest->all());
        die();
        
        //validate fields
        $attrs = $request->validate([
            'name' => 'required|string',
            'secteur' => 'required',
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
        $area = Area::create([
            'name' =>$attrs['zone'],
            'user_id' => $request->user,
            'description' => $request->description,
            'etat' => 1
        ]);

        return response([
            'area' => $area,
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

<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Text::all();
        return response()->json([
            'message' => 'OK',
            'data' => $items
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Text;
        $item->text = $request->text;
        $item->save();
        return response()->json([
            'message' => 'Created successfully',
            'data' => $item
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show(Text $text)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        //
    }
}

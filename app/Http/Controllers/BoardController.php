<?php

namespace App\Http\Controllers;

use App\Models\board\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('board\index', [
            'boardList' => Board::paginate(5, ['*'], 'page', $request->page)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('board\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Board::boardUpload($request->all());
    }
    
    /** 
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\boardModel  $boardModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('board/edit' , [
            'board' => Board::find($request->id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\boardModel  $boardModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return Board::boardUpdate($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\boardModel  $boardModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}

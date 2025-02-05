<?php

namespace App\Http\Controllers;

use App\Models\Salad;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SaladController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function commancer(Request $request)
    {
        Session::flash('table', $request->table);
        return redirect(route('salad.index'));
    }
    public function index(Request $request)
    {
        $salads = Salad::orderBy('created_at', 'desc')->get();
        return View('salad.index', compact('salads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salad = Salad::find($id);
        if($salad){
            return view('salad.show',compact('salad'));
        }else{
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

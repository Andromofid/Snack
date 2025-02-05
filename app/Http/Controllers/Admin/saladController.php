<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Salad;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class saladController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        dd(Salad::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('admin.salad.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validate input fields
        $request->validate([
            'titre' => 'required|string|max:255',
            'prix' => 'required|numeric',
            'photo' => 'required|max:2048', // Ensure it's an image
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('salads', 'public'); // Store image in storage/app/public/salads
        } else {
            $imagePath = null;
        }

        // Create new Salad entry
        Salad::create([
            'titre' => $request->titre,
            'prix' => $request->prix,
            'photo' => $imagePath,
        ]);

        // Redirect back with success message
        return redirect()->route('adminSalad.index')->with('success', 'Salad ajouté avec succès!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

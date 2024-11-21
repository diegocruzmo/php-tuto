<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PetRequest;


class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pets = Pet::all();
        return view('pet.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('pet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetRequest $request): RedirectResponse
    {
        Pet::create($request->all());

        return redirect()->route('pet.index')->with('success', 'Pet saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet): View
    {
        return view('pet.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet): View
    {
        return view('pet.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PetRequest $request, Pet $pet): RedirectResponse
    {
        $pet->update($request->all());
        return redirect()->route('pet.index')->with('success', 'Pet updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet): RedirectResponse
    {
        $pet->delete();
        return redirect()->route('pet.index')->with('danger', 'Pet deleted');
    }
}

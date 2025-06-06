<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ListingController extends Controller
{
    public function __construct(){
        //Gate::authorize(Listing::class, 'listing');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Listing/Index',
        [
            'listings' => Listing::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.Hello
     */
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->user()->listings()->create(
            $request->validate([
                'beds' => 'required|integer|min:1|max:20',
                'baths' => 'required|integer|min:1|max:20',
                'area' => 'required|integer|min:15|max:10000',
                'city' => 'required|string',
                'postal_code' => 'required|integer',
                'address' => 'required|string',
                'price' => 'required|integer|min:1',
            ]));
        // Listing::create($validatedData);

        return redirect()->route('listing.index')
        ->with('success', 'Listing was created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return inertia('Listing/Show',
        [
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return inertia('Listing/Edit',
        [
            'listing' => $listing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $listing->update(
            $request->validate([
            'beds' => 'required|integer|min:1|max:20',
            'baths' => 'required|integer|min:1|max:20',
            'area' => 'required|integer|min:15|max:10000',
            'city' => 'required|string',
            'postal_code' => 'required|integer|min:1',
            'address' => 'required|string',
            'price' => 'required|integer|min:1',
        ]));

        return redirect()->route('listing.index')
        ->with('success', 'Listing was updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        // return redirect()->back()
        // ->with('success', 'Listing was deleted successfully.');
        return redirect()->route('listing.index')
        ->with('success', 'Listing was deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWineRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Wine;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::all();
       
            return view ("admin.index", compact("wines"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWineRequest $request)
    {
        $data = $request->all();
        $newWine = new Wine();
        $newWine->fill($data);
        $newWine->slug = Str::slug($request->wine);
        $newWine->save();
        return redirect()->route('wines.show', $newWine->slug);
    }

    /**
     * Display the specified resource.
     */
    public function show(Wine $wine)
    {
        return view('admin.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wine $wine)
    {
        return view('admin.edit', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wine $wine)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['wine']);
        $wine->update($data);
        return redirect()->route('wines.show', $wine->slug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();
        return redirect()->route('wines.index')->with('message', 'wine'. $wine->wine . 'è stato eliminato');
    }
}

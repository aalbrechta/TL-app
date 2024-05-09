<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index')
            ->with('measurement', Measurement::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('create')
            ->with('measurement', Measurement::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'lake' => 'required|string|max:255',
            'description' => 'required|string',
            'temperature' => 'required|numeric',
        ]);

        $data = request()->except(['_token']);
        Measurement::create($data);

        return redirect()->route('Measurement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Measurement $measurement)
    {
        return view('admin')
            ->with('measurement', Measurement::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measurement $measurement)
    {
        return view('edit')
            ->with('measurements', Measurement::all())
            ->with('measurement', $measurement);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'lake' => 'required|string|max:255',
            'description' => 'required|string',
            'temperature' => 'required|numeric',
        ]);

        $measurement = Measurement::findOrFail($id);
        $measurement->update($request->all());

        return redirect()->route('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Measurement $measurement): RedirectResponse
    {
        try {
            $measurement->delete();
        } catch (Exception $exception) {
            return redirect()->back()->withErrors(['Pri procesu odstranenia záznamu merania došlo k chybe!']);
        }

        return redirect()->route('Measurement.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('measurement.index')
            ->with('measurement', Measurement::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('measurement.create')
            ->with('measurement', Measurement::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'lake' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:25', 'max:250'],
            'temperature' => ['required'],
        ]);

       Measurement::create($request->all());

        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(): void
    {
       $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measurement $measurement)
    {

        return \view('measurement.edit')
            ->with('measurements', Measurement::all())
            ->with('measurement', $measurement);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'lake' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:25', 'max:250'],
            'temperature' => ['required'],
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
        } catch (\Exception  $exception) {
            return redirect()->back()->withErrors(['Pri procesu odstranenia záznamu merania došlo k chybe!']);
        }

        return redirect()->route('/');
    }

}

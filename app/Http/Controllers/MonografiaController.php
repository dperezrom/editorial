<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonografiaRequest;
use App\Http\Requests\UpdateMonografiaRequest;
use App\Models\Monografia;

class MonografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monografias = Monografia::all();

        return view('monografias.index', [
            'monografias' => $monografias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $monografia = new Monografia();

        return view('monografias.create', [
            'monografia' => $monografia
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMonografiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonografiaRequest $request)
    {
        $validados = $request->validated();
        $monografia = new Monografia($validados);
        $monografia->save();
        return redirect()->route('monografias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function show(Monografia $monografia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Monografia $monografia)
    {
        return view('monografias.edit', [
            'monografia' => $monografia,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMonografiaRequest  $request
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonografiaRequest $request, Monografia $monografia)
    {
        $validados = $request->validated();
        $monografia->titulo = $validados['titulo'];
        $monografia->anyo = $validados['anyo'];
        $monografia->save();

        return redirect()->route('monografias.index')->with('success', 'Monografia modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monografia $monografia)
    {
        if ($monografia->articulos()->count() === 0) {
            $monografia->delete();
            return redirect()->route('monografias.index')->with('success', 'Monografia borrada con exito');
        }
        return redirect()->route('monografias.index')->with('error', 'Esta monografia tiene articulos asociados.');
    }
}

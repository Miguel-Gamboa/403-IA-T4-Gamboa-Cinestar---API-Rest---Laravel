<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CinestarController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function cines()
    {
        $cines = DB::select('CALL sp_getCines()');
        foreach ($cines as $cine) {
            $cine->slug = Str::slug($cine->RazonSocial);
        }
        return view('cines', ['cines' => $cines]);
    }

    public function cine($slug)
    {
        $cines = DB::select('CALL sp_getCines()');
        $cine = collect($cines)->first(function($cine) use ($slug) {
            return Str::slug($cine->RazonSocial) === $slug;
        });
        $cine->peliculas = DB::select('CALL sp_getCinePeliculas(?)', [$cine->id]);
        $cine->tarifas = DB::select('CALL sp_getCineTarifas(?)', [$cine->id]);

        return view('cine', ['cine' => $cine]);
    }

    public function peliculas($id)
    {
        $numericId = $id === 'cartelera' ? 1 : ($id === 'estrenos' ? 2 : 0);
        $peliculas = DB::select('CALL sp_getPeliculas(?)', [$numericId]);
        return view('peliculas', ['peliculas' => $peliculas]);
    }

    public function pelicula($id)
    {
        $pelicula = DB::select('CALL sp_getPelicula(?)', [$id]);
        return view('pelicula', ['pelicula' => $pelicula]);
    }
}
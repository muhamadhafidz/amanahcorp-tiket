<?php

namespace App\Http\Controllers;

use App\Models\Measuring_indication;
use App\Models\Witel_sto;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        $data = Witel_sto::with('measuring_indications')->whereHas('measuring_indications', function (Builder $query){
            $query->whereBetween('created_at', ['2022-06-15 00:00:00', '2022-06-22 23:59:59']);
        })->get();

        // $data = Measuring_indication::where('created_at', '<=', '2022-07-08')->get();
        // dd($data);
        return view('index', [
            'data' => $data
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class filmController extends Controller
{
    public function index(){
        $populerMovie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2MzAxYThjYzBiNTEyM2I1YWYwZjNhZTdlYTEwNDU4MiIsInN1YiI6IjYzZDlmMDY3OTU1YzY1MDBhODQzMGJkMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Z3cqYgX8knBos87nQRpNrNQ-czciGvF3iyCcjKCwF18')
        ->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];

        $upComing = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2MzAxYThjYzBiNTEyM2I1YWYwZjNhZTdlYTEwNDU4MiIsInN1YiI6IjYzZDlmMDY3OTU1YzY1MDBhODQzMGJkMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Z3cqYgX8knBos87nQRpNrNQ-czciGvF3iyCcjKCwF18')
        ->get('https://api.themoviedb.org/3/movie/upcoming')
        ->json();

        $latest = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2MzAxYThjYzBiNTEyM2I1YWYwZjNhZTdlYTEwNDU4MiIsInN1YiI6IjYzZDlmMDY3OTU1YzY1MDBhODQzMGJkMiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Z3cqYgX8knBos87nQRpNrNQ-czciGvF3iyCcjKCwF18')
        ->get('https://api.themoviedb.org/3/movie/latest')
        ->json();
        
        return view('film', [
            'populerMovie' => $populerMovie,
            'upComing' => $upComing,
            'latest' => $latest
        ]);
    }
}

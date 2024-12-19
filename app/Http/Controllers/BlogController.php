<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $data_saran = Saran::get();
        return view('mastertable', compact('data_saran'));
    }

    public function delete($id){
        $data_saran = Saran::findorfail($id);
        $data_saran->delete();
        return redirect()->route('table');
    }

    public function user(){
        return view('frontend.user');
    }

    public function submitUser (Request $request) {
        Saran::create($request->all());
        return redirect()->route('user');
    }
}

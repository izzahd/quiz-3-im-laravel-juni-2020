<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }

    public function create(){
        return view('artikel.form');
    }

    public function store(Request $request){

        $data = $request->all();
        unset($data["_token"]);
        $artikel = ArtikelModel::save($data);
        if($artikel){
            return redirect('/artikel');
        }
    }

    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        $tags = explode(', ' , $artikel->tag);
        return view('artikel.show', compact('artikel', 'tags'));
    }

    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id){

        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        $artikel = ArtikelModel::update($data, $id);
        if($artikel){
            return redirect('/artikel');
        }
    }

    public function destroy($id){
        $artikel = ArtikelModel::destroy($id);
        return redirect('/artikel');
    }

}

?>
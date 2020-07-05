<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArtikelModel {
    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data){
        $slug = Str::slug($data["judul"], '-');
        $data +=    ["user_id" => 1,        //karena belum ada fungsi login, user id dibuat default 1
                    "slug" => $slug]; 
        $artikel_baru = DB::table('artikel')->insert($data);
        return $artikel_baru;
    }

    public static function find_by_id($id){
        $artikel = DB::table('artikel')->where('id', $id)->first();
        return $artikel;
    }

    public static function update($data, $id){
        $slug = Str::slug($data["judul"], '-');
        $data += ["slug" => $slug];
        $artikel_baru = DB::table('artikel')->where('id', $id)->update($data);
        return $artikel_baru;
    }

    public static function destroy($id){
        $artikel = DB::table('artikel')->where('id', $id)->delete();
        return $artikel;
    }
}

?>
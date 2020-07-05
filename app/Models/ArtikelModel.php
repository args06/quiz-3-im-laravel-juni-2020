<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArtikelModel extends Model
{
    //
    public static function getAll()
    {
        $items = DB::table('artikel')->get();
        return $items;
    }

    public static function insert($data)
    {
        $items = DB::table('artikel')->insert($data);
        return $items;
    }

    public static function getByID($id)
    {
        $items = DB::table('artikel')->get()->where('id',$id);
        return $items;
    }

    public static function edit($data)
    {
        $items = DB::table('artikel')->where('id',$data['id'] )->update($data);
        return $items;
    }

    public static function remove($id)
    {
        $items = DB::table('artikel')->where('id', $id)->delete();
        return $items;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    //
    public static function getAll()
    {
        $items = DB::table('user')->get();
        return $items;
    }
}

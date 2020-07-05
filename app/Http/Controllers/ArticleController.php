<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index()
    {
        $articles = ArtikelModel::getAll();
        return view('medium.home', compact('articles'));
    }

    function create()
    {
        $users = UserModel::getAll();
        return view('medium.create', compact('users'));
    }

    function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date("Y-m-d H:i:s");
        $slug = "";
        $title = explode(' ',$request->title);
        for ($i = 0; $i<count($title); $i++){
            $title[$i] = strtolower($title[$i]);
            if ($i == count($title)-1){
                $slug = $slug . $title[$i];
            } else {
                $slug = $slug . $title[$i] . "-";
            }
        }

        $item = array(
            "judul"         => $request->title,
            "isi"           => $request->article,
            "slug"          => $slug,
            "user_id"       => $request->user,
            "tags"          => $request->tags,
            "created_at"    => $date,
            "updated_at"    => null
        );

        ArtikelModel::insert($item);
        return redirect('/artikel');
    }

    function show($id){
        $articles = ArtikelModel::getByID($id);
        return view('medium.detail', compact('articles'));
    }

    function edit($id){
        $articles['users'] = UserModel::getAll();
        $articles['ids'] = ArtikelModel::getByID($id);
        return view('medium.edit', compact('articles'));
    }

    function update(Request $request, $id){
        date_default_timezone_set("Asia/Jakarta");
        $date = date("Y-m-d H:i:s");
        echo $request->article . "<br>";
        echo $request->tags . "<br>";
        $item = array(
            "id"            => $request->id,
            "judul"         => $request->title,
            "isi"           => $request->article,
            "slug"          => $request->slug,
            "user_id"       => $request->user,
            "tags"          => $request->tags,
            "updated_at"    => $date
        );
        ArtikelModel::edit($item);
        return redirect('/artikel');
    }

    function destroy($id){
        ArtikelModel::remove($id);
        return redirect('/artikel');
    }
}

@extends('medium.template.footer')
@extends('medium.template.body')
@extends('medium.template.header')

@section('title', 'Home')
@section('heading', 'Article Detail')

@section('style')
    .erd{
    margin: auto;
    display: block;
    }
    .heading{
    font-size: 32px;
    margin-top: 50px;
    margin-bottom: 50px;
    }
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10" style="margin: auto; margin-top: 10px">
                <div class="card">
                    @foreach($articles as $article)
                        <div class="card-body">
                            <h4 class="card-title" align="center">Title : {{$article->judul}}
                                <a href="/artikel/{{$article->id}}/edit" class="badge badge-info">Edit</a>
                                <a href="/artikel/{{$article->id}}/delete" class="badge badge-info">Delete</a>
                            </h4>
                            <h6 class="card-title" align="center">Slug : {{$article->slug}}</h6>
                            <p class="card-text">{{$article->isi}}</p>
                            <?php
                            $tags = explode(',', $article->tags);
                            ?>
                            <div align="center">
                                @foreach($tags as $tag)
                                    <button class="btn btn-primary">{{$tag}}</button>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection



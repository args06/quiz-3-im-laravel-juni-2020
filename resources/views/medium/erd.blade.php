@extends('medium.template.footer')
@extends('medium.template.body')
@extends('medium.template.header')

@section('title', 'Entity Relationship Diagram')
@section('heading', 'Entity Relationship Diagram - Medium Web')

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
    <img src="images/erd.png" alt="Gambar ERD" class="erd">
@endsection



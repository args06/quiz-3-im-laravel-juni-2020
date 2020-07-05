@extends('medium.template.footer')
@extends('medium.template.body')
@extends('medium.template.header')

@section('title', 'Form Edit Artikel')
@section('heading', 'Form Edit Artikel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                @foreach($articles['ids'] as $id)
                    <form method="post" action="/artikel/{{$id->id}}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" value="{{$id->id}}">
                        <input type="hidden" name="slug" value="{{$id->slug}}">
                        <div class="form-group">
                            <label for="name">Article Title :</label>
                            <input type="text" class="form-control" name="title"
                                   value="{{$id->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="nim">Your Article :</label>
                            <input type="text" class="form-control" name="article" value="{{$id->isi}}">
                        </div>
                        <div class="form-group">
                            <label for="nim">Your Article Tags:</label>
                            <input type="text" class="form-control" name="tags" value="{{$id->tags}}">
                        </div>
                        <div class="form-group">
                            <label for="nim">Your Account :</label>
                            <select name="user" class="form-control" readonly>
                                @foreach($articles['users'] as $user)
                                    @if($id->user_id == $user->id)
                                    <option value={{$user->id}}> {{$user->username}} - {{$user->full_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endsection

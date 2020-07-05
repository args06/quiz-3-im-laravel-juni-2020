@extends('medium.template.footer')
@extends('medium.template.body')
@extends('medium.template.header')

@section('title', 'Form Tambah Artikel')
@section('heading', 'Form Tambah Artikel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form method="post" action="/artikel">
                    @csrf {{-- Ini biar datanya aman --}}
                    <div class="form-group">
                        <label for="name">Article Title :</label>
                        <input type="text" class="form-control" placeholder="Enter your article title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="nim">Your Article :</label>
                        <textarea class="form-control" placeholder="Enter your article here" name="article" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nim">Your Article Tags:</label>
                        <textarea class="form-control" placeholder="Enter your here here. Example : Technology,Medical,Laravel,Sanvercode" name="tags" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nim">Your Account :</label>
                        <select name="user" class="form-control">
                            <option>Select Your Account</option>
                            @foreach($users as $user)
                                <option value={{$user->id}}>{{$user->username}} - {{$user->full_name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
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

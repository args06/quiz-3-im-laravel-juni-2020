@extends('medium.template.footer')
@extends('medium.template.body')
@extends('medium.template.header')

@section('title', 'Home')
@section('heading', 'List Article')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="/artikel/create" class="btn btn-primary my-3">Tambah Article</a>
                <?php $i = 1; ?>
                @foreach($articles as $article)
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$i}} - {{$article->judul}}
                            <a href="/artikel/{{$article->id}}" class="badge badge-info">Detail</a>
                        </li>
                    </ul>
                    <?php $i++; ?>
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



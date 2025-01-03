@extends('front.layout.app')

@section('content')
<div class="card shadow-sm p-3">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session('errors'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('errors') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
       
    <div class="card-header ">
       

        <h4 class="fs-1">Yazarlar</h4>
    </div>

    <div class="card-body">
    <div class="table-responsive text-nowrap">
            <a href="{{ route('yazarSayfasi') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Yazar Ekle
            </a>
        </div>
        <hr>

        @if($author->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover w-100">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Yazar Adı</th>
                        <th>Yazar Soyadı</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Güncelleme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($author as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->name }}</td>
                        <td>{{ $a->surname }}</td>
                        <td>{{ $a->created_at }}</td>
                        <td>{{ $a->updated_at }}</td>
                        <td>
                            <a href="{{route('yazarlarUpdatePage',$a->id)}}" class="btn btn-primary btn-lg">
                                 Güncelle
                            </a>
                            <a href=" {{route('panel.authorDelete',$a->id)}}" class="btn btn-danger btn-lg">
                               Sil
                             </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="alert alert-warning text-center">
            Henüz kategori eklenmedi.
        </div>
        @endif
    </div>
</div>
@endsection

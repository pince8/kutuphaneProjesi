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
       

        <h4 class="fs-1">Kategori İşlemleri</h4>
    </div>

    <div class="card-body">
    <div class="table-responsive text-nowrap">
            <a href="{{ route('kategorilerOlustur') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Kategori Oluştur
            </a>
        </div>
        <hr>

        @if($cats->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover w-100">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Kategori Adı</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Güncelleme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cats as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->created_at }}</td>
                        <td>{{ $c->updated_at }}</td>
                        <td>
                            <a href="{{route('kategorilerUpdatePage',$c->id)}}" class="btn btn-primary btn-lg">
                                 Güncelle
                            </a>
                            <a href=" {{route('panel.categoryDelete',$c->id)}}" class="btn btn-danger btn-lg">
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

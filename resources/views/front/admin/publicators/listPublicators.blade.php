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
       

        <h4 class="fs-1">Yayınevleri</h4>
    </div>

    <div class="card-body">
    <div class="table-responsive text-nowrap">
            <a href="{{ route('publicatorSayfasi') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Yayınevi Ekle
            </a>
        </div>
        <hr>

        @if($publicator->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover w-100">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Yayınevi Adı</th>
                        <th>Yayınevi Soyadı</th>
                        <th>Yayınevi Adresi</th>
                        <th>Yayınevi Maili</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Güncelleme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($publicator as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->surname }}</td>
                        <td>{{ $p->address }}</td>
                        <td>{{ $p->mail }}</td>
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->updated_at }}</td>
                        <td>
                            <a href="{{route('publicatorUpdatePage',$p->id)}}" class="btn btn-primary btn-lg">
                                 Güncelle
                            </a>
                            <a href=" {{route('panel.publicatorDelete',$p->id)}}" class="btn btn-danger btn-lg">
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
            Henüz yayınevi eklenmedi.
        </div>
        @endif
    </div>
</div>
@endsection

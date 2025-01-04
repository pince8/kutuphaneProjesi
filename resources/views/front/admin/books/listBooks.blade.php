
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
       

        <h4 class="fs-1">Kitaplar</h4>
    </div>

    <div class="card-body">
    <div class="table-responsive text-nowrap">
            <a href="{{ route('bookSayfasi') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Kitap Ekle
            </a>
        </div>
        <hr>

        @if($book->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover w-100">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Kitap Adı</th>
                        <th>Sayfa Numarası</th>
                        <th>Durumu</th>
                        <th>Barkod No</th>
                        <th>Ödünç Verilme Süresi</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Güncelleme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($book as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->name }}</td>
                        <td>{{ $b->pageNumber }}</td>
                        <td>{{ $b->is_lended }}</td>
                        <td>{{ $b->barkod_no }}</td>
                        <td>{{ $b->lend_time }}</td>
                        <td>{{ $b->created_at }}</td>
                        <td>{{ $b->updated_at }}</td>
                        <td>
                            <a href="{{route('bookUpdatePage',$p->id)}}" class="btn btn-primary btn-lg">
                                 Güncelle
                            </a>
                            <a href=" {{route('panel.bookDelete',$p->id)}}" class="btn btn-danger btn-lg">
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
            Henüz kitap eklenmedi.
        </div>
        @endif
    </div>
</div>
@endsection

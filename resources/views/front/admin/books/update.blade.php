@extends('front.layout.app')

@section('content')


<div class="row">
    <div class="col-12">
    <div class="card">
                <div class="card-header">
                    <h4>Kitap Güncelle</h4>
                  </div>
                  <div class="card-body">
                  @if (session('success'))
                  <div class="alert alert-success">
                 {{ session('success') }}
                  </div>
                  @endif

                 
                    <form action="{{route('bookGuncelle')}}" method="POST">
                      @csrf
                      
                      <div class="form-group">

                      <input type="hidden" name="bookID" value="{{$book->id}}">
                      
                      <label for="inputPassword5">Kitabın Adı:</label>
                      <input type="text" id="publicatorInput" name="bookName" class="form-control" value="{{$book->name}}">
                     
                      <label for="inputPassword5">Kitabın Sayfa Numarası:</label>
                      <input type="text" id="publicatorInput" name="bookPageNumber" class="form-control" value="{{$book->pageNumber}}">

                      <label for="inputPassword5">Durumu (Ödünç Alındı Mı / Alınmadı Mı):</label>
                      <input type="text" id="publicatorInput" name="bookIs_lended" class="form-control" value="{{$book->is_lended}}">

                      <label for="inputPassword5">Barkod Numarası:</label>
                      <input type="text" id="publicatorInput" name="bookBarkod_no" class="form-control" value="{{$book->barkod_no}}">

                      <label for="inputPassword5">Ödünç Verme Süresi:</label>
                      <input type="text" id="publicatorInput" name="bookLend_time" class="form-control" value="{{$book->lend_time}}">

                    </div>
                    <button type="submit" class="btn btn-info">Güncelle</button>
                    </form>
                   
                      </div>
                    </div>
                  </div>
                </div>
    </div>
</div>
@endsection
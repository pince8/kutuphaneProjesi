@extends('front.layout.app')

@section('content')


<div class="row">
    <div class="col-12">
    <div class="card">
                <div class="card-header">
                    <h4>Yazar Ekle</h4>
                  </div>

                  @if (session('success'))
                  <div class="alert alert-success">
                 {{ session('success') }}
                  </div>
                  @endif

                  <div class="card-body">
                    <form action="{{route('yazarEkle')}}" method="POST">
                      @csrf
                      
                      <div class="form-group">
                      <label for="inputPassword5"> Yazarın Adı:</label>
                      <input type="text" id="kategoriInput" name="authorName"  class="form-control" placeholder="Yazarın adını giriniz">
                     
                    </div>

                    <div class="form-group">
                      <label for="inputPassword5">Yazarın Soyadı:</label>
                      <input type="text" id="kategoriInput" name="authorSurname"  class="form-control" placeholder="Yazarın soyadını giriniz">
                     
                    </div>
                    <button type="submit" class="btn btn-info">Kaydet</button>
                    </form>
                   
                      </div>
                    </div>
                  </div>
                </div>
    </div>
</div>
@endsection
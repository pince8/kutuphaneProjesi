@extends('front.layout.app')

@section('content')


<div class="row">
    <div class="col-12">
    <div class="card">
                <div class="card-header">
                    <h4>Kategori Oluştur</h4>
                  </div>

                  @if (session('success'))
                  <div class="alert alert-success">
                 {{ session('success') }}
                  </div>
                  @endif
                  <div class="card-body">
                    <form action="{{route('kategoriEkle')}}" method="POST">
                      @csrf
                      
                      <div class="form-group">
                       
                      <label for="inputPassword5">Kategori Adı:</label>
                      <input type="text" id="kategoriInput" name="categoryName" class="form-control" placeholder="Kategori adını giriniz">
                     
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
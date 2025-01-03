@extends('front.layout.app')

@section('content')


<div class="row">
    <div class="col-12">
    <div class="card">
                <div class="card-header">
                    <h4>Kategori Güncelle</h4>
                  </div>
                  <div class="card-body">
                  @if (session('success'))
                  <div class="alert alert-success">
                 {{ session('success') }}
                  </div>
                  @endif

                 
                    <form action="{{route('kategoriGuncelle')}}" method="POST">
                      @csrf
                      
                      <div class="form-group">

                      <input type="hidden" name="categoryID" value="{{$category->id}}">
                      
                      <label for="inputPassword5">Kategori Adı:</label>
                      <input type="text" id="kategoriInput" name="categoryName" class="form-control" value="{{$category->name}}">
                     
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
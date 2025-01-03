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

                 
                    <form action="{{route('publicatorGuncelle')}}" method="POST">
                      @csrf
                      
                      <div class="form-group">

                      <input type="hidden" name="publicatorID" value="{{$publicator->id}}">
                      
                      <label for="inputPassword5">Yazar Adı:</label>
                      <input type="text" id="publicatorInput" name="publicatorName" class="form-control" value="{{$publicator->name}}">
                     
                      <label for="inputPassword5">Yazar Soyadı:</label>
                      <input type="text" id="publicatorInput" name="publicatorSurname" class="form-control" value="{{$publicator->surname}}">

                      <label for="inputPassword5">Adres:</label>
                      <input type="text" id="publicatorInput" name="publicatorAddress" class="form-control" value="{{$publicator->address}}">

                      <label for="inputPassword5">Mail:</label>
                      <input type="text" id="publicatorInput" name="publicatorMail" class="form-control" value="{{$publicator->mail}}">
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
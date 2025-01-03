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
                    <form action="{{route('publicatorEkle')}}" method="POST">
                      @csrf
                      
                    
                      <div class="form-group">
                      <label for="inputPassword5">Yayınevi Adı:</label>
                      <input type="text" id="kategoriInput" name="publicatorName"  class="form-control" placeholder="Yayınevi adını giriniz">
                     
                    </div>

                    <div class="form-group">
                      <label for="inputPassword5">Yayınevi Soyadı:</label>
                      <input type="text" id="kategoriInput" name="publicatorSurname"  class="form-control" placeholder="Yayınevi soyadını giriniz">
                     
                    </div>

                    <div class="form-group">
                      <label for="inputPassword5"> Yayınevi Maili:</label>
                      <input type="text" id="kategoriInput" name="publicatorMail"  class="form-control" placeholder="Yayınevi mailini giriniz">
                     
                    </div>

                    <div class="form-group">
                      <label for="inputPassword5">Yayınevi Adresi:</label>
                      <input type="text" id="kategoriInput" name="publicatorAddress"  class="form-control" placeholder="Yayınevi adresini giriniz">
                     
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
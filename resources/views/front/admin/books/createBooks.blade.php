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
                    <form action="{{route('bookEkle')}}" method="POST">
                      @csrf
                      
                      <div class="form-group">
                      <label for="inputPassword5"> Kitabın Adı:</label>
                      <input type="text" id="kategoriInput" name="authorName"  class="form-control" placeholder="Kitabın Adını Giriniz">
                    </div>

                    <div class="form-group">
                      <label for="inputPassword5"> Kitabın Sayfa Numarası</label>
                      <input type="text" id="kategoriInput" name="authorSurname"  class="form-control" placeholder="Kitabın Sayfa Numarasını Giriniz:">
                    </div>

                    <div class="form-group">
                      <label for="inputPassword5"> Kitabın Durumu</label>
                      <input type="text" id="kategoriInput" name="authorSurname"  class="form-control" placeholder="Kitabın Durumunu Giriniz(ödünç alındıysa->1/ alınmadıysa->0):">
                    </div>

                    <div class="form-group">
                      <label for="inputPassword5"> Kitabın Barkod Numarası</label>
                      <input type="text" id="kategoriInput" name="authorSurname"  class="form-control" placeholder="Kitabın Barkod Numarasını Giriniz:">
                    </div>

                    <div class="form-group">
                      <label for="inputPassword5">Ödünç Verilme Süresi </label>
                      <input type="text" id="kategoriInput" name="authorSurname"  class="form-control" placeholder="Kitabın Ödünç Verilme Süresini Giriniz:">
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
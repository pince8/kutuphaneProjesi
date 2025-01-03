
<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('panel') }}/assets/css/app.min.css">
  <link rel="stylesheet" href="{{ asset('panel') }}/assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('panel') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('panel') }}/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('panel') }}/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset('panel') }}/assets/img/favicon.ico" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Üye Ol</h4>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Ad</label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name"  placeholder="Adınızı girin"autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Soyad</label>
                      <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Soyadınızı girin">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" placeholder="Mailinizi girin">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Şifre</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                        name="password"  placeholder="Şifrenizi girin">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                   
                    <div class="form-group col-6">
                    <label for="phone" class="d-block">Telefon Numarası</label>
                    <input id="phone" type="tel" class="form-control" name="phone" placeholder="Telefon numaranızı girin" pattern="[0-9]{10}" required>
                    </div>

                  </div>
                 
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Üye Ol
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
              Zaten Kayıtlı mısınız? <a href="{{route('girisYap')}}">Giriş Yap</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('panel') }}/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="{{ asset('panel') }}/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="{{ asset('panel') }}/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset('panel') }}/assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="{{ asset('panel') }}/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('panel') }}/assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>
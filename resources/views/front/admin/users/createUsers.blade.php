<section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">Name</label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus="">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Surname</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                  <label for="phone" class="d-block">Phone</label>
                  <input id="phone" type="tel" class="form-control" name="phone" placeholder="Telefon numaranızı girin" pattern="[0-9]{10}" required>
                   </div>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="auth-login.html">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
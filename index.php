<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dark.css">
  <link rel="stylesheet" href="css/pace.css">
  <script src="js/jquery.js"></script>
  <title>Inicio de sistema| IscjlchavezGAdmin</title>
</head>
<body>
  <div class="container">
      <div class="justify-content-center mt-5">
          <div class="row mt-3 text-center">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <h1 class="text-center display-6">Login | <span class="text-success"> Inicio de sesión</span></h1>
                <div class="row mt-2 px-1 justify-content-center mt-5">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                    <div>
                    <div class="row mt-2 justify-content-center">
                      <img src="img/New_Logo_Gris_2023.png" alt="iscjlchavezG" style="width: 250px;">
                    </div>
                    <form action="" method="post" autocomplete="off" class="needs-validation" novalidate">
                      <div class="row mt-4 justify-content-center">
                        <div class="col-sm-8 col-md-8 col-lg-8">
                            <input type="text" name="Usuario" id="Usuario" placeholder="Usuario" class="form-control rounded-pill border-success" autocomplete="off">
                        </div>
                      </div>
                      <div class="row mt-2 mb-2 justify-content-center">
                          <div class="col-sm-8 col-md-8 col-lg-8">
                            <input type="password" name="Password" id="pass" placeholder="Password" class="form-control rounded-pill border-success" autocomplete="off">
                          </div>
                      </div>
                      <div class="row mt-1 justify-content-center">
                          <div class="col-sm-3 col-md-3 col-lg-3">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="darkSwitch">
                              <label class="darkSwitch" for="verPass">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                  <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low-fill"/>
                                </svg> |
                                <svg class="bi" width="15" height="15" fill="currentColor">
                                  <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars-fill"/>
                                </svg>
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-3 col-md-3 col-lg-3">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="ver" onclick="verpass(this);">
                                <label class="form-check-label" for="ver">Ver Password</label>
                              </div>
                          </div>
                      </div>
                      <div class="row mt-4 mb-2 justify-content-center">
                          <div class="col-sm-8 col-md-8 col-lg-8">
                              <div class="d-grid gap-2">
                                <input type="submit" name="btn-ingresar" id="btn-ingreso" class="btn btn-sm btn-outline-success bg-gradient rounded-pill">
                              </div>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="row mt-2 justify-content-center">
                <div class="col-sm-12 col-lg-12 col-md-12">
                  <svg class="bi text-success" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#facebook"/>
                  </svg>
                  <svg class="bi text-success" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#twitter"/>
                  </svg>
                  <svg class="bi text-success" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#instagram"/>
                  </svg>
                  <svg class="bi text-success" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#github"/>
                  </svg>
                  <svg class="bi text-success" width="20" height="20" fill="currentColor">
                    <use xlink:href="library/icons/bootstrap-icons.svg#youtube"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/dark-mode.js"></script>
      <script>
          function verpass(cb) {
              if (cb.checked)
                $('#pass').attr("type", "text");
              else
                $('#pass').attr("type", "password");
          }
      </script>
</body>
</html>
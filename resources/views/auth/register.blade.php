<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->
<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('assets/dist/css/style.min.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
      <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
          <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <div class="card mb-0">
                <div class="card-body">
                  <a href="index-2.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                    <img src="{{asset('ChatApp.png')}}" width="180" alt="">
                  </a>
                  <h6 class="text-center text-primary">Mulailah mengenal dengan ChatApp</h6>
                  <div class="position-relative text-center my-4">
                    <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                  </div>
                  <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleInputtext" aria-describedby="textHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <a href="authentication-login.html" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign Up</a>
                    <div class="d-flex align-items-center">
                      <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                      <a class="text-primary fw-medium ms-2" href="authentication-login.html">Sign In</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  Import Js Files -->
    <script src="{{ asset('assets/dist/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!--  core files -->
    <script src="{{asset('assets/dist/js/app.min.js')}}"></script>
    <script src="{{asset('assets/dist/js/app.init.js')}}"></script>
    <script src="{{asset('assets/dist/js/app-style-switcher.js')}}"></script>
    <script src="{{asset('assets/dist/js/sidebarmenu.js')}}"></script>

    <script src="{{asset('assets/dist/js/custom.js')}}"></script>
  </body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Jul 2023 02:01:04 GMT -->
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/brand/logo.png')}}" />

    <!-- TITLE -->
    <title>PAO – Admin</title>
    <!-- Bootstrap -->
    <link href="{{ asset('ass/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('ass/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('ass/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('ass/vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('ass/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <br>
    <br>
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <form class="row g-3 needs-validation" action="{{route('register-user')}}" method="post" novalidate>
                    @if(Session::has('success'))
                    <div class="alert alert-success col-12">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="col-12">
                <div class="separator"> </div>
                <img src="{{ asset('assets/images/brand/logo.png')}}" class="rounded mx-auto d-block" style="width:50%">
                <div class="separator"> </div>
                <label for="yourPassword" class="form-label">Create an Account | PAO-HRIS </label>
                <div class="separator"> </div>
              </div>
                    <div class="col-12">
                      <input type="text" name="name" class="form-control" id="yourName" value="{{old('name')}}" placeholder="Enter Your Name">
                     <span class="text-danger">@error('name') {{$message}} @enderror</span>
                    </div>

                    <div class="col-12">
                      <input type="email" name="email" class="form-control" id="yourEmail" value="{{old('email')}}" placeholder="Enter Your Email">
                      <span class="text-danger">@error('email') {{$message}} @enderror</span>
                    </div>

                    <div class="col-12">
                        <input type="text" name="username" class="form-control" id="yourUsername" value="{{old('username')}}" placeholder="Enter Your UserName">
                        <span class="text-danger">@error('username') {{$message}} @enderror</span>
                    </div>

                    <div class="col-12">
                      <input type="password" name="password" class="form-control" id="yourPassword" value="{{old('password')}}" placeholder="Enter Your Password">
                      <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login">Log in</a></p>
                    </div>
                  </form>
          </section>
        </div>
  </body>
</html>

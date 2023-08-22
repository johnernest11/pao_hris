
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
    <title>PAO HRIS</title>
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
    <br><br>
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="row g-12 needs-validation" action="{{route('login-user')}}" method="post" novalidate>
              <div class="col-12">
                <div class="separator"> </div>
                <img src="{{ asset('assets/images/brand/logo.png')}}" class="rounded mx-auto d-block" style="width:50%">
                <div class="separator"> </div>
                <label for="yourPassword" class="form-label">Login In | PAO-HRIS </label>
                <div class="separator"> </div>
                      @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                <div class="alert alert-danger col-12">{{Session::get('fail')}}</div>
                        @endif
                      @csrf
              </div>
              <div class="col-12">
                <input type="email" name="email" class="form-control" id="yourEmail" value="{{old('email')}}"  placeholder="Email">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
              </div>
              <div class="col-12">
                  <input type="password" name="password" class="form-control" id="yourPassword" value="{{old('password')}}" placeholder="Password">
                  <span class="text-danger">@error('password') {{$message}} @enderror</span>
             </div>
              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">Login</button>
              </div>
              <div class="col-12">
                <p class="change_link">Forgot Password ?
                  <a href="/forgot-password" class="to_register"> Click Here! </a>
                </p>
              </div>
              <br>
              <br>
              <div class="separator">
                <div class="clearfix"></div>
                <div>
                  <h1><i class="fa fa-building"></i> Human Resources Information System</h1>
                </div>
              </div>
              <div class="col-12">
                <p class="change_link">Register Account ?
                  <a href="/registration" class="to_register"> Sign In </a>
                </p>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>




    <script>
        const togglePassword = document
            .querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>
  </body>
</html>

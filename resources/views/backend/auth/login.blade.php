@extends('backend.auth.layouts.auth')
@section('content')
  <div class="content-wrapper"><!--Login Page Starts-->
        <section id="login">
          <div class="container-fluid">
            <div class="row full-height-vh m-0">
              <div class="col-12 d-flex align-items-center justify-content-center">
              <div class="card" style="width: 50vw;">
              <div class="card-content">
              <div class="card-body login-img">
              <form method="POST" action="{{route('login')}}">
              @csrf
              <div class="row m-0">
              <div class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">
              <img src="https://goalachiever1.com/public/app-assets/img/gallery/login.png" alt="" class="img-fluid" width="400" height="230">
              </div>
              <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
              <h4 class="mb-4 card-title">Login</h4>
                <p class="card-text mb-4">
                Welcome back, please Login to go to your account.
                </p>
              <input type="email" class="form-control mb-3" name="email" id="email" value="" placeholder="User Email" required="" autocomplete="email" autofocus="">
              <input type="password" name="password" id="password" class="form-control mb-1" placeholder="Password" required="" autocomplete="current-password">
             
                  
              <div class="d-flex justify-content-between mt-2">
              <div class="remember-me">
              <div class="custom-control custom-checkbox custom-control-inline mb-3">
              <input type="checkbox" id="remember" name="remember" class="custom-control-input">
              <label class="custom-control-label" for="remember">
              Remember Me
              </label>
              </div>
              </div>
              <div class="forgot-password-option">
              <a href="forgot-password-page.html" class="text-decoration-none text-primary">Forgot Password
              ?</a>
              </div>
              </div>
              <div class="fg-actions d-flex justify-content-between">
              <div class="login-btn">
              <div class="btn-group mr-1 mb-1">
              <button type="button" class="btn btn-raised btn-success btn-min-width dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign Up</button>

              <div class="dropdown-menu">
              <a class="dropdown-item" href="https://goalachiever1.com/user/sign-up/member">Member</a>

              <a class="dropdown-item" href="https://goalachiever1.com/user/sign-up/educator">Educator</a>

              <a class="dropdown-item" href="https://goalachiever1.com/user/sign-up/sponsor">Sponsor</a>

              <a class="dropdown-item" href="https://goalachiever1.com/user/sign-up/schoolparticipant">School Participant</a>

              <a class="dropdown-item" href="https://goalachiever1.com/user/representative/signup">Representative</a>

              </div>
              </div>
              </div>
              <div class="recover-pass">
              <button class="btn btn-primary" type="submit">
              Sign In
              </button>
              </div>
              </div>
              </div>
              </div>
              </form>
              </div>
              </div>
              </div>
              </div>
            </div>
          </div>
        </section>


</div>
@endsection
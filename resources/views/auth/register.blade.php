@extends('layout/main')
@section('content')
<section class="vh-150">  <form action="/register" method="post">
  @csrf
    <div class="container py-5 h-100" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4">
          <div class="card" style="color: #4B515D; border-radius: 35px;">
            <div class="card-body p-4">
              <div class="d-flex" style = "justify-content: center;">
                <h1>Sign up</h1>
              </div> 
              <div>
                <div class="form-outline mb-4">
                    <input type="first_name" id="first_name" class="form-control" name = 'firstname' placeholder="First name" />                    
                </div>
                <div class="form-outline mb-4">
                    <input type="last_name" id="last_name" class="form-control" name = 'lastname' placeholder="Last name" />                    
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="username" class="form-control" name = 'username' placeholder="Username" />                    
                </div>
                
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" name = 'password' placeholder="Password" />
                </div>
                <div class="form-outline mb-4">
                  <input name = 'password_confirmation' type="password" id="password_confirmation" class="form-control" placeholder="Confirm Password" />
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="email" name = 'email' class="form-control" placeholder="Email" />                    
                </div>
                <a href="/">
                  <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 100%">Sign up</button>
                </a>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>  </form>
  </section>

    @if ($errors -> any())
    @foreach ($errors -> all() as $error)
      <li style = "color:white">{{ $error }}</li>
    @endforeach
    @endif

@endsection
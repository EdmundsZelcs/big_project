@extends('layout/main')
@section('content')
<section class="vh-150">
    <div class="container py-5 h-100" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4">
          <div class="card" style="color: #4B515D; border-radius: 35px;">
            <div class="card-body p-4">
              <div class="d-flex" style = "justify-content: center;">
                <h1>Sign in</h1>
              </div> 
              <div>
                <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control" placeholder="Email or username" />                    
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" placeholder="Password" />
                </div>
                
                <button type="button" class="btn btn-primary btn-block mb-4" style="width: 100%">Sign in</button>
                <p>Don't have an account? <a href="\signup"> Sign up</a></p>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

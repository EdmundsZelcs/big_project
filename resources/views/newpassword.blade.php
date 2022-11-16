@extends('layout/main')
@section('content')
<section class="vh-150">
    <div class="container py-5 h-100" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-8 col-lg-6 col-xl-4">
          <div class="card" style="color: #4B515D; border-radius: 35px;">
            <div class="card-body p-4">
              <div class="d-flex" style = "justify-content: center;">
                <h1>Set New Passowrd </h1>
              </div> 
              <div>  
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" placeholder="New Password" />                    
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" placeholder="Re-enter Password" />                    
                  </div>
                <a href="/login">
                    <button type="button" class="btn btn-primary btn-block mb-4" style="width: 100%">Submit</button>
                </a>
                
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
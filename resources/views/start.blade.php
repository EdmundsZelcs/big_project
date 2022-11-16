@extends('layout/main')
@section('content')
<style>
.signin{
    display: flex;
    justify-content: flex-end; 
}
</style>
<div class="signin">
    <a href="/login" >
        <button type="button"  class="btn btn-primary btn-block mb-4">Login</button>
    </a> 
</div>

@endsection
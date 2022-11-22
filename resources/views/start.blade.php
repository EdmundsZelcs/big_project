@extends('layout/main')
@section('content')
<body>
{{-- <div class="row">
    <div class="col-lg-4 offset-4">
    <input type = "text" id="cityName" placeholder="City name" class="form-control"> 
    <button class="btn btn-info" id="search"><i class="fas fa-search"></i></button>
    </div>
</div>
    
    
<div class="mb-4 pb-2">
    <div class="card shadow-0">
        <div class="card-body p-4">
    
        <h4 class="mb-1 sfw-normal" id="city"></h4>
        <h6 class="mb-1 sfw-normal" id="country"></h6>
        <p class="mb-2" id="temperature"></p>
        <p id="cloud"></p>
        <div class="d-flex flex-row align-items-center">
            <p class="mb-0 me-4" id="cloud"></p>
        </div>
    
    </div>
</div> --}}
<script>
$("#search").on("click", function(){
    var city = $("#cityName").val();
    var url = "https://wordsapiv1.p.rapidapi.com/words/hatchback/typeOf"
    search(url);
});

$(document).ready(function(){
    // function search(url){
        let settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://mashape-community-urban-dictionary.p.rapidapi.com/define",
        "method": "GET",
        "headers": {
            "X-RapidAPI-Key": "'81cab233dfmshe882d2f6381eb5cp134584jsn6b012dfb0de1'",
            "X-RapidAPI-Host": "mashape-community-urban-dictionary.p.rapidapi.com"
        }
        }
    $.ajax(settings).done(function (response) {
        console.log(response);
    });
});

//     $.ajax(settings).done(function (response) {
//         console.log(response);
//         $("#city").html(response.location.name)
//         $("#country").html(response.location.country)
//         $("#temperature").html("<p>Current temperature: "+response.current.temp_c+" °C</p>")
//         $("#cloud").html("<p class= mb-0 me-4>Clouds: "+response.current.condition.text+"</p>")
//     })
// };
</script>
@endsection
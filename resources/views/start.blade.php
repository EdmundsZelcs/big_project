@extends('layout/main')
@section('content')
<body>
<style>
#songs{
    color: white;
}
#row{
    display: flex;
}
</style>
<div class="row">
    <div class="col-lg-4 offset-4 " id="row">
    <input type = "text" id="singerName" placeholder="Singer name" class="form-control"> 
    <button class="btn btn-info" id="search"><i class="fas fa-search"></i></button>
    </div>
</div>
    
    

<div id='songs'>

</div>
<script>
$("#search").on("click", function(){
    var name = $("#singerName").val();
    var url = "https://genius-song-lyrics1.p.rapidapi.com/search?q=" +name+ "&per_page=10&page=1"
    search(url);
});

// $(document).ready(function(){
    function search(url){
        let settings = {
        "async": true,
        "crossDomain": true,
        "url": url,
        "method": "GET",
        "headers": {
            "X-RapidAPI-Key": "81cab233dfmshe882d2f6381eb5cp134584jsn6b012dfb0de1",
		    "X-RapidAPI-Host": "genius-song-lyrics1.p.rapidapi.com"
        }
    }
    $.ajax(settings).done(function (res) {
        console.log(res);
        for(let i = 0; i < res.response.hits.length; ++i){
            $("#songs").append(`<h3>${res.response.hits[i].result.artist_names}</h3><h1>${res.response.hits[i].result.title}</h1><img src='${res.response.hits[i].result.header_image_thumbnail_url}'></img>`)
        }
    })
}
    
// });

    
    
</script>
@endsection
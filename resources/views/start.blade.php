@extends('layout/main')
@section('content')
<body>
<style>
#songs{
    /* color: white; */
}
#row{
    display: flex;
}
.card{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
#songs{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}
.card-body {
  padding: 2px 16px;
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

    function search(url){
        let settings = {
        "async": true,
        "crossDomain": true,
        "url": url,
        "method": "GET",
        "headers": {
            "X-RapidAPI-Key": "12f857626emsh1590a9529544646p125c31jsn95f7514f722f",
		    "X-RapidAPI-Host": "genius-song-lyrics1.p.rapidapi.com"
        }
    }
    $.ajax(settings).done(function (res) {
        console.log(res);
        $('#songs').empty()
        for(let i = 0; i < res.response.hits.length; ++i){
            $("#songs").append(
                `<div class="card" style="width: 18rem;">
                <img src="${res.response.hits[i].result.header_image_thumbnail_url}" class="card-img-top">
                <div class="card-body">
                   <h5 class="card-title" >${res.response.hits[i].result.title}</h5>
                   <p class="card-text">${res.response.hits[i].result.artist_names}</p>
            </div>
        </div>`
            )
        }
    })
}
</script>
@endsection
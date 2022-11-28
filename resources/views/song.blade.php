@extends('layout/main')
@section('content')

<h1>sagaja</h1>
<script>
function search(url){
    let settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://genius-song-lyrics1.p.rapidapi.com/search?q=&per_page=10&page=1",
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
               <h5 class="card-title" >${res.response.hits[i].result.api_path}</h5>
               <p class="card-text">${res.response.hits[i].result.artist_names}</p>
        </div>
    </div>`
        )
    }
})
}
</script>
@endsection
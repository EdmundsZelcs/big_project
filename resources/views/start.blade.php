@extends('layout/main')
@section('content')
<body>
<style>
#bilde{
    width: 360px;
    height: 360px;
}
#row{
    display: flex;
}
#songs{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
        flex-direction: column;
}
.box {
  margin: 10% auto;
  position:relative;
  color: white;
  display: flex;
  flex-wrap: wrap;
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
            "X-RapidAPI-Key": "b26019582bmshb3a281caa0795d4p14e29djsn9aab39c84c7f",
		    "X-RapidAPI-Host": "genius-song-lyrics1.p.rapidapi.com"
        }
    }
    $.ajax(settings).done(function (res) {
        console.log(res);
        $('#songs').empty()
        for(let i = 0; i < res.response.hits.length; ++i){
            $("#songs").append(
                `<div class="box">
    <div id="card-container">
      <div id="card">
        <div class="front face">
            <a href="/song/${res.response.hits[i].result.id}"><img src="${res.response.hits[i].result.header_image_thumbnail_url}" class="card-img-top" id = "bilde"></a>
        </div>
        <div class="back face">
          <h1>${res.response.hits[i].result.title}</h1>
          <h5>${res.response.hits[i].result.artist_names}</h5>
        </div>
      </div>
    </div>`
            )
        }
    })
}
</script>
@endsection

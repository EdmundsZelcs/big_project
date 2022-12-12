@extends('layout/main')
@section('content')
<style>
	body {
		overflow-x: hidden;
		height: 100%;
	}
	.time-font {
		font-size: 50px;
	}
	
	.sm-font {
		font-size: 18px;
	}
	
	.med-font {
		font-size: 28px;
	}
	
	.large-font {
		font-size: 60px;
	}
	.player{
		display: flex;
		align-items: center;
		flex-direction: column;
		margin-top: 150px;
	}
	#audio{
		background-color: whitesmoke;
		border-bottom-right-radius: 20px;
		border-bottom-left-radius: 20px;
		width: 20%;
	}
	#image{
		height: 400px;
		width: 385px;
		border-top-right-radius: 30px;
		border-top-left-radius: 30px;
	}
	</style>


<div class="player">
	<div class="imgbox">
	  <img id="image"/>
   </div>
	<audio id = "audio" src="https://audio-ssl.itunes.apple.com/itunes-assets/AudioPreview114/v4/9b/b7/14/9bb71498-9853-7fc5-8b5a-8797a7379726/mzaf_15787296561849039166.plus.aac.p.m4a"   controls></audio>
 </div>
 
	<script>
	// <h1>{{$id}}</h1>
	const settings = {
		"async": true,
		"crossDomain": true,
		"url": "https://genius-song-lyrics1.p.rapidapi.com/songs/"+parseInt({{$id}}),
		"method": "GET",
		"headers": {
			"X-RapidAPI-Key": "7514a35fbdmsh7fd21a0d30989b7p166452jsn3f7acea208d9",
			"X-RapidAPI-Host": "genius-song-lyrics1.p.rapidapi.com"
		}
	};
	$.ajax(settings).done(function (res) {
		console.log(res);
		$("#image").attr("src",res.response.song.song_art_image_thumbnail_url)
		// $("#title").html(res.response.lyrics.lyrics.body.html)	
		// $("#date").html("<p> Release date : "+res.response.lyrics.tracking_data.created_month+"</p>")
	});
</script>
@endsection

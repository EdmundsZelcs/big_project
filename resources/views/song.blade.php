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
	
	</style>


<div class="player">
	<div class="imgbox">
	  <img id="image"/>
   </div>
	<audio src="https://audio-ssl.itunes.apple.com/itunes-assets/AudioPreview114/v4/02/c6/07/02c607ce-db8e-78c7-a470-9ecacdba1fd9/mzaf_8261651039021930979.plus.aac.p.m4a"  controls></audio>
 </div>
 
	<script>
	// <h1>{{$id}}</h1>
	const settings = {
		"async": true,
		"crossDomain": true,
		"url": "https://genius-song-lyrics1.p.rapidapi.com/songs/"+parseInt({{$id}}),
		"method": "GET",
		"headers": {
			"X-RapidAPI-Key": "b26019582bmshb3a281caa0795d4p14e29djsn9aab39c84c7f",
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

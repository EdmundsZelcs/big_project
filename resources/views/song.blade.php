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
	<div class="container-fluid px-1 px-md-4 py-5 mx-auto">
		<div class="row d-flex justify-content-center px-3">
			<div class="card">
				<p class="ml-auto mr-4 mt-3 mb-0" id = "title" ></p>
				<!-- <img src= ${res.response.song.custom_song_art_image_url}> -->
				<!-- <p class="ml-auto mr-4 mb-0 med-font" id = "image"></p> -->
				<!-- <h1 class="ml-auto mr-4 large-font">-20&#176;</h1> -->
				<!-- <p class="time-font mb-0 ml-4 mt-auto">08:30 <span class="sm-font">AM</span></p> -->
				<p class="ml-4 mb-4" id = "date"></p>
			</div>
		</div>
	</div>
	<script>
	// <h1>{{$id}}</h1>
	const settings = {
		"async": true,
		"crossDomain": true,
		"url": "https://genius-song-lyrics1.p.rapidapi.com/songs/"+parseInt({{$id}})+"/lyrics",
		"method": "GET",
		"headers": {
			"X-RapidAPI-Key": "693b90f959mshb717bb10cf3d94dp175520jsn8ac4770b9cbd",
			"X-RapidAPI-Host": "genius-song-lyrics1.p.rapidapi.com"
		}
	};
	$.ajax(settings).done(function (res) {
		console.log(res);
		// $("#image").html(res.response.song.custom_song_art_image_url)
		$("#title").html(res.response.lyrics.lyrics.body.html)	
		$("#date").html("<p> Release date : "+res.response.lyrics.tracking_data.created_month+"</p>")
	});
</script>
@endsection

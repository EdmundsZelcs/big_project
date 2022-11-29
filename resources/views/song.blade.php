@extends('layout/main')
@section('content')
<style>

</style>

<script>
// <h1>{{$id}}</h1>
const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://genius-song-lyrics1.p.rapidapi.com/songs/"+parseInt({{$id}})+"?text_format=dom",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "8b158c4bc7msh8b0b0c20d9caeeep1a8805jsna499c47353c4",
		"X-RapidAPI-Host": "genius-song-lyrics1.p.rapidapi.com"
	}
};
$.ajax(settings).done(function (response) {
	console.log(response);
});
</script>
@endsection

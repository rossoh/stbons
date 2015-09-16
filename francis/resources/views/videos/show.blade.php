@extends('app')

@section('content')


<p> Video </p>
	<video id="example_video_1" class="video-js vjs-default-skin"
	  controls preload="auto" width="1280" height="528"
	  poster="http://video-js.zencoder.com/oceans-clip.png"
	  data-setup='{"example_option":true}'>
	 <source src="{{ $video->videoFile }}" type='video/mp4' />
	 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
	</video>

@endsection('content')
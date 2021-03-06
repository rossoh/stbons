@extends('app')

@section('content')

<style>
.form-group {
  max-width: 750px;
  padding: 15px;
  margin: 0 auto;
}

.jumbotron {
	padding-right: 20px;
	padding-left: 20px
}
</style>

<div class="container">

	<div class="jumbotron">
	  <h2 class="text-primary">Add your own video!</h2>
	  <p style=""> This page is where you can add your own science video to the website. Then the rest of the school can watch it and give you their votes.&nbsp;<span class="text-primary"><i class="glyphicon glyphicon-heart"></i></span></p>
	  <p> Remember to give your video a title which says what it is about. Make sure you write in the big box which big science question your video answers. Get an adult to help you if you are unsure.</p>
	  <p> Your video must be less than one minute long! All the videos on this website stop playing after one minute.</p>
	</div>

{!! Form::open(array('url' => '/video/upload', 'files' => true)) !!}

			<div class="form-group">
				<span class="text-primary"><span class="glyphicon glyphicon-user"></span></span>&nbsp;{!! Form::label('studentName', 'What is your first name and surname?') !!}
				{!! Form::text('studentName', "", ['class' =>'form-control']) !!}
			</div>
			
			<div class="form-group">
				<span class="text-primary"><span class="glyphicon glyphicon-education"></span></span>&nbsp;{!! Form::label('className', 'Which class are you in?') !!}
				<br>
				{!! Form::select('className', array('RH' => 'RH', 'RM' => 'RM', '1H' => '1H', '1MS' => '1MS', '2T' => '2T', '2WR' => '2WR', '3J' => '3J', '3T' => '3T', '4C' => '4C', '4SA' => '4SA', '5K' => '5K', '5P' => '5P', '6D' => '6D', '6GW' => '6GW'), ['class' =>'form-control']) !!}
			</div>
			
			<div class="form-group">
				<span class="text-primary"><span class="glyphicon glyphicon-film"></span></span>&nbsp;{!! Form::label('studentName', 'What is the title of your video?') !!}
				{!! Form::text('title', "", ['class' =>'form-control']) !!}
			</div>
			
			<div class="form-group">
				<span class="text-primary"><span class="glyphicon glyphicon-pencil"></span></span>&nbsp;{!! Form::label('studentName', 'What is the big science question in your video?') !!}
				{!! Form::textarea('videoDescription', "", ['class' =>'form-control']) !!}
			</div>
			
			<div class="form-group">
				<span class="text-primary"><span class="glyphicon glyphicon-folder-open"></span></span>&nbsp;&nbsp;{!! Form::label('video', 'Find where you saved your video:') !!}
				{!! Form::file('video') !!}
			</div>
			
			<div class="form-group">
				<span class="text-primary"><span class="glyphicon glyphicon-plus"></span></span>&nbsp;{!! Form::submit('Add your video!') !!}
				<br>
				<h4 class='text-muted'>Your video might take a minute to upload. Just wait, don't refresh your browser!</h4>

			</div>

{!! Form::close() !!}

@endsection('content')
</div>
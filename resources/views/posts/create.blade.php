@extends('layouts.app')
@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Create New Post</h3>
			{!! Form::open(array('route' => 'posts.store','method'=>'POST', 'files'=>true)) !!}
    			{{ Form::label('title','Title:') }}
    			{{ Form::text('title',null,array('class' =>'form-control')) }}

    			
    			
    			{{ Form::label('body','Post Body')}}
    			{{ Form::textarea('body',null,array('class'=> 'form-control')) }}

                {{ Form::label('title','image url') }}
    			{{ Form::file('file',null,array('class'=> 'form-control')) }}

               {{ Form::select('category', array(
                    'fasion' => 'fasion',
                    'sports' => 'sports',
                    'movies' => 'movies',
                    'cricket' => 'cricket',
                    'politics' => 'politics',
                    'religious' => 'religious',
                    'other' => 'other',
                ),array('class'=> 'form-control'))}}


                {{ Form::label('title','carousel url') }}
                {{ Form::file('file1',null,array('class'=> 'form-control')) }}
	
    			{{ Form::label('title','Video url:') }}
    			{{ Form::text('video_url',null,array('class' =>'form-control')) }}

    			{{ Form::submit('Create Post',array('class' => 'btn btn-success btn-lg btn-block')) }}


			{!! Form::close() !!}
		</div>
	</div>
	
@endsection
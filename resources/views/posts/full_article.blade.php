@extends('layouts.app')

@section('content')


<div class="container-fluid">
<div class="row">
    <div class="col-md-2">
        @include('partials._leftbar')
        
    </div>

    <div class="col-md-7">
            <div class="panel">
		<div class="panel-header">
		{{$post->title}}
		</div>
		<div class="panel-body">
			<div class="images">
				<img src="\images\{{$post->image_url}}" class="img-responsive" alt="img"/>
			</div>

			<div class="text">
				{{$post->body}}
			</div> 
		

		</div>
		<div class="panel-footer">
		{{'Views : '.$post->views}}
		<br>
		{{$post->created_at->format('Y-M-d h:m A')}}
		</div>
	</div>
    </div>
    <div class="col-md-3">
            @include('partials._rightbar')
    </div>
</div>
	

</div>




@endsection
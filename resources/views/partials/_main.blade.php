
<?php

  use App\Post; 
  $posts = Post::all();
?>
<hr id="hr">
@foreach($posts as $post)
<div id="mainDiv" style="padding-top: 10px;">

		<ul class="media-list main-list">

			<li class="media"><a class="pull-left" href="#"> </a>

				<div class="row">
					<div class="col-md-2">

						<div class="text-center date-body" style="width: 110px">
							<label for="" class="date-title">{{$post->created_at->format('Y-M-d h:m A')}}</label>
							<!-- <div class="date-content">
								<p class="dia">10</p>
								<hr class="nomargin" />

							</div> -->
						</div>
					</div>
					<div class="col-md-7">
						<h2 class="media-heading" style="padding-left: 10px;">
							<a href="fullArticle/{{$post->id}}">  {{$post->title}} </a>
						</h2>
					</div>
					<div class="col-md-3">

						<a href="http://facebook.com"
							class="btn btn-social-icon btn-facebook"> <i
							class="fa fa-facebook"></i></a> <a
							class="btn btn-social-icon btn-google-plus"><i
							class="fa fa-google-plus"></i></a> <a
							class="btn btn-social-icon btn-twitter"><i
							class="fa fa-twitter"></i></a>

					</div>
				</div>

				
				<div class="media-body" >
					<h4 class="media-content">
						<img id="imgMain" class="media-object img-responsive pull-left "src="{!! url('images/'.$post->image_url) !!}" alt="not displayed" style="padding-right: 10px; max-width: 300px;max-height: 300px;padding-bottom:10px;">
						
							{{substr($post->body,0,100)}}
					
					</h4>

					


					<!-- readMore -->
					<div class="row">
						<div class="col-md-8">
							<div
								class="source-section first-section first-lower-section subscribe"
								id="viewMore">
								<a href=""><button type="button"
									class="btn btn-success btn-md btn-subscribe">
									<i class="fa fa-newspaper-o fa-lg "></i><a href="fullArticle/{{$post->id}}">Read More</a>
								</button></a>

							</div>
						</div>
						<div class="col-md-2">
							<div class="numberofviews2 pull-right">
								<font color="#000000"><b><span
										class="glyphicon glyphicon-eye-open "></span> {{$post->views}}</b></font> Views
							</div>
						</div>
						<div class="col-md-2">
							<div class="numberofviews2 pull-right">
								<font color="#000000"><b><span
										class="glyphicon glyphicon-thumbs-up"></span> 5,253</b></font> Likes
							</div>

						</div>

					</div>
					{{$post->video_url}}
					@if($post->video_url!='')
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
								<div class="embed-responsive embed-responsive-16by9">
 									<iframe class="embed-responsive-item" src="{{$post->video_url}}"></iframe>
								</div>
						</div>
						<div class="col-md-2"></div>
						
					</div>
					@endif

				</div>


	</div>
	<hr id="hr">
	@endforeach
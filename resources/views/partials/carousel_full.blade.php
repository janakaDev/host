<?php
  //Post::orderBy('created_at', 'desc')->take(1)->get();
    use App\Post;
    $queries=Post::orderBy('id','desc')->take(4)->get();
?>



<div class="container-fluid">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- Wrapper for slides -->

       
      <div class="carousel-inner" style="border: 5px solid;">
       <?php $i = 0; ?>
        @foreach( $queries as $query )
            <div style="background-color: black;" class="item @if($i === 0) {{ 'active' }} @endif">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="{!! url('images/'.$query->image_url) !!}" class="img-responsive" style="max-width: 300px;max-height: 250px;"></div>
                         <?php $i++; ?>
                        <div class="col-md-9">
                            <h2 style="color:white;">{{$query->title}}</h2>
                            <p>{{substr($query->body,1,500)}}."...."</p>
                            <div
                            class="source-section first-section first-lower-section subscribe"
                            id="viewMore">
                            <a href=""><button type="button"
                              class="btn btn-success btn-md btn-subscribe">
                              <i class="fa fa-newspaper-o fa-lg "></i>Read More
                            </button></a>

              </div>
                        </div>
                    </div>
                </div>            
            </div> 
        @endforeach
      </div>
        
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
             
             <?php $i2 = 0; ?>
            @foreach( $queries as $query )
                  
                  <li data-target="#custom_carousel" data-slide-to="0" class="@if($i2 ===0) {{ 'active' }} @endif" >

                  <a href="#"><img class="img-responsive pull-left" src="{!! url('images/'.$query->image_url) !!}" style="max-width: 50px;max-height: 50px;"><small class="content">{{$query->title}}</small></a></li> 
            @endforeach
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
</div>


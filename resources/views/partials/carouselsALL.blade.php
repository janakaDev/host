<?php
  use App\Post;
  $queries=Post::orderBy('id','desc')->get();
?>
<div class="dynamicTile" style="padding-left: 35px;">
<div class="row hidden-xs hidden-sm ">
    <div class="col-sm-12 col-md-2 horizontal" >
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel" data-interval="1700">
          <!-- Wrapper for slides -->
          <div class="carousel-inner cuadro_intro_hover ">
           <?php $i = 0; ?>
      @foreach( $queries as $query )
            <div class="item @if($i === 0) {{ 'active' }} @endif">
               <img src="{!! url('images/'.$query->carousel_url) !!}" class="img-responsive"/>
               <?php $i++; ?>
            
            <div class="caption">
              <div class="blur"></div>
              <div class="caption-text">
                <h6 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px; color: white;">{{$query->title}}</h6>
                <a href=""><button type="button"
                  class="btn btn-success btn-md btn-subscribe">
                  <i class="fa fa-newspaper-o fa-lg "></i><a href="fullArticle/{{$query->id}}">Read More</a>
                </button></a>
              </div>
            </div>
            </div>
      @endforeach
          </div>
      
        </div>
         
      </div>
  </div>


  <div class="col-sm-12 col-md-2 horizontal" >
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel" data-interval="1700">
          <!-- Wrapper for slides -->
          <div class="carousel-inner cuadro_intro_hover ">
           <?php $i = 0; ?>
      @foreach( $queries as $query )
            <div class="item @if($i === 0) {{ 'active' }} @endif">
               <img src="{!! url('images/'.$query->carousel_url) !!}" class="img-responsive"/>
               <?php $i++; ?>
            
            <div class="caption">
              <div class="blur"></div>
              <div class="caption-text">
                <h6 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px; color: white;">{{$query->title}}</h6>
                <a href=""><button type="button"
                  class="btn btn-success btn-md btn-subscribe">
                  <i class="fa fa-newspaper-o fa-lg "></i><a href="fullArticle/{{$query->id}}">Read More</a>
                </button></a>
              </div>
            </div>
            </div>
      @endforeach
          </div>
      
        </div>
         
      </div>
  </div>

 <div class="col-sm-12 col-md-2 horizontal" >
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel" data-interval="1700">
          <!-- Wrapper for slides -->
          <div class="carousel-inner cuadro_intro_hover ">
           <?php $i = 0; ?>
      @foreach( $queries as $query )
            <div class="item @if($i === 0) {{ 'active' }} @endif">
               <img src="{!! url('images/'.$query->carousel_url) !!}" class="img-responsive"/>
               <?php $i++; ?>
            
            <div class="caption">
              <div class="blur"></div>
              <div class="caption-text">
                <h6 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px; color: white;">{{$query->title}}</h6>
                <a href=""><button type="button"
                  class="btn btn-success btn-md btn-subscribe">
                  <i class="fa fa-newspaper-o fa-lg "></i><a href="fullArticle/{{$query->id}}">Read More</a>
                </button></a>
              </div>
            </div>
            </div>
      @endforeach
          </div>
      
        </div>
         
      </div>
  </div>
  <div class="col-sm-12 col-xs-12 col-md-2 horizontal" >
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel" data-interval="1700">
          <!-- Wrapper for slides -->
          <div class="carousel-inner cuadro_intro_hover ">
           <?php $i = 0; ?>
      @foreach( $queries as $query )
            <div class="item @if($i === 0) {{ 'active' }} @endif">
               <img src="{!! url('images/'.$query->carousel_url) !!}" class="img-responsive"/>
               <?php $i++; ?>
            
            <div class="caption">
              <div class="blur"></div>
              <div class="caption-text">
                <h6 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px; color: white;">{{$query->title}}</h6>
                <a href=""><button type="button"
                  class="btn btn-success btn-md btn-subscribe">
                  <i class="fa fa-newspaper-o fa-lg "></i><a href="fullArticle/{{$query->id}}">Read More</a>
                </button></a>
              </div>
            </div>
            </div>
      @endforeach
          </div>
      
        </div>
         
      </div>
  </div>
  <div class="col-sm-12 col-md-2 horizontal" >
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel" data-interval="1700">
          <!-- Wrapper for slides -->
          <div class="carousel-inner cuadro_intro_hover ">
           <?php $i = 0; ?>
      @foreach( $queries as $query )
            <div class="item @if($i === 0) {{ 'active' }} @endif">
               <img src="{!! url('images/'.$query->carousel_url) !!}" class="img-responsive"/>
               <?php $i++; ?>
            
            <div class="caption">
              <div class="blur"></div>
              <div class="caption-text">
                <h6 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px; color: white;">{{$query->title}}</h6>
                <a href=""><button type="button"
                  class="btn btn-success btn-md btn-subscribe">
                  <i class="fa fa-newspaper-o fa-lg "></i><a href="fullArticle/{{$query->id}}">Read More</a>
                </button></a>
              </div>
            </div>
            </div>
      @endforeach
          </div>
      
        </div>
         
      </div>
  </div>
  <div class="col-sm-12 col-md-2 horizontal" >
      <div id="tile1" class="tile">
        
         <div class="carousel slide" data-ride="carousel" data-interval="1700">
          <!-- Wrapper for slides -->
          <div class="carousel-inner cuadro_intro_hover ">
           <?php $i = 0; ?>
      @foreach( $queries as $query )
            <div class="item @if($i === 0) {{ 'active' }} @endif">
               <img src="{!! url('images/'.$query->carousel_url) !!}" class="img-responsive"/>
               <?php $i++; ?>
            
            <div class="caption">
              <div class="blur"></div>
              <div class="caption-text">
                <h6 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px; color: white;">{{$query->title}}</h6>
                <a href=""><button type="button"
                  class="btn btn-success btn-md btn-subscribe">
                  <i class="fa fa-newspaper-o fa-lg "></i><a href="fullArticle/{{$query->id}}">Read More</a>
                </button></a>
              </div>
            </div>
            </div>
      @endforeach
          </div>
      
        </div>
         
      </div>
  </div>

</div>
</div>

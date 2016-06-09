<?php
  //Post::orderBy('created_at', 'desc')->take(1)->get();
    use App\Post;
    $products=Post::orderBy('id','asc')->take(4)->get();
    $count =Post::count();
    $slides     ='';
    $Indicators ='';
   

     //  $query      = "select * from berita order by id desc limit 3";
      // $res        = mysqli_query($con,$query);
     //  $count      =   mysqli_num_rows($res);
     


?>


<div class="container">
   <div class="carousels">
<div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="50">       
           

           <div class="carousel slide">
               <div class="row">
                   <div class="carousel-inner">
                       <?php $i = 0; ?>
                       @foreach( $products as $product )
                           <div class="item @if($i === 0) {{ 'active' }} @endif">
                               <div class="col-lg-12 col-md-12 col-sm-12">
                                   <img src="{!! url('images/'.$product->image_url) !!}" class="img-responsive">
                               </div>
                               <?php $i++; ?>
                            </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="" data-slide="prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                    </a>
                    <a class="right carousel-control" href="" data-slide="next">
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </a>
                </div>
  </div>
       
</div>
</div>
<?php
  //Post::orderBy('created_at', 'desc')->take(1)->get();
    use App\Post;
    $query=Post::orderBy('id','desc')->take(3)->get();
    $count =Post::count();
    $slides     ='';
    $Indicators ='';
    $counter    =0;

     //  $query      = "select * from berita order by id desc limit 3";
      // $res        = mysqli_query($con,$query);
     //  $count      =   mysqli_num_rows($res);
     


?>


<div class="container">
    <div class ="row">
  <div class="col-md-6 ">
   <div class="panel panel-primary">
    <div class="panel-heading">Headline News</div>
          
    <!-- Slider News by Carousel -->  
     <div id='myCarousel' class='carousel slide' data-ride='carousel'>    
      <ol class='carousel-indicators'>
       {{ "<li data-target='#myCarousel' data-slide-to='0'></li>"}}
       {{ "<li data-target='#myCarousel' data-slide-to='1'></li>"}}
       {{ "<li data-target='#myCarousel' data-slide-to='2'></li>"}}
       
      </ol>               
       <div class='carousel-inner'>
      
        
        

        @foreach($query as $q)       
             @if ($counter==0)
             
              <div class="item active">         
              <a href=''>
               <img class="img-responsive" src="{!! url('images/'.$q->image_url) !!}">
               </a>
                    
         
               <div class="container">  
               <div class="carousel-caption left-caption" style="background-color:#EE0930;">
              <a href=''> <font color=#ffffffff style="font-family: Verdana,Arial,Helvetica,Georgia; font-size: 13px";>
              <h5 class="text-left">{{$q->title}}</h5></font>
              </a>
              <br>
              <p style='font-family: Verdana,Arial,Helvetica,Georgia; font-size: 10px; text-align: justify;'> {{$q->body}}</p>" 
             <br> 
              <p><a href=''>
             <h6 class="text-left">Selengkapnya</b></h6>
              </p>
              </div>
              </div>
              </div>
             
             


             @else
             
              <div class="item">   
              <a href=''>
              <img src="{!! url('images/'.$q->image_url) !!}">
              </a>         
              <div class="container">
                    
              <div class="carousel-caption left-caption" style="background-color:#EE0930;">
              <a href=''> <font color="#ffffffff" style="font-family: Verdana,Arial,Helvetica,Georgia; font-size: 13px;'><h5 class='text-left">"{{$q->title}}"</h5></font>
              </a>
              <br>
              <p style="font-family: Verdana,Arial,Helvetica,Georgia; font-size: 10px; text-align: justify;"> 
              {{$q->title}}</p>
              <br>
              <p><a href=''> <h6 class="text-left">Selengkapnya</b> </h6></p>   
              </div>
              </div>
              </div>
                <?php
                    $counter++;
                ?>  
              
              @endif  
               
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
                  
              </div>
                   
              
              
        
        @endforeach
   </div>

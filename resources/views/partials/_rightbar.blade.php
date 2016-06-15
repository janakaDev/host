
<?php

  use App\Post; 
  $posts = Post::all();
  $posts1 = Post::orderBy('created_at', 'desc')->take(1)->get();
  //$result->result = DB::table('posts')->select('image_url')->orderBy('created_at', 'desc')->take(1)->first();
  $result=Post::orderBy('created_at', 'desc')->first()->image_url;
  $result1=Post::orderBy('created_at', 'desc')->first()->title;
  $result2=Post::orderBy('created_at', 'desc')->first()->body;
  $result3=Post::orderBy('created_at', 'desc')->first()->id;
?>


<div style="padding-top: 20px; padding-right:15px;">

          <div class="thumbnail">
           <img id="imgMain" class="media-object img-responsive pull-left "src="{!! url('images/'.$result) !!}" alt="not displayed" style="max-width: 290px;max-height: 250px;">
              <div class="caption29">
               <a href=""fullArticle/{{$result3}}""> <h4 style="color:#6495ED;padding-top: 20px;"><span class="glyphicon glyphicon-th-large"></span>{!!$result1!!}</h4></a>


                <p>{!!substr($result2,1,500)!!}</p>
                

                <a href="fullArticle/{{$result3}}" class="btn btn-info btn-xs" role="button"><span ></span>Read More</a> 

               
            </div>
          </div>








<!--this is for the news ticker -->
<ul class="ppost_nav" style="padding-top:15px; padding-right:10px;">
          
          
              @foreach ($posts as $post)
                      <li>
                          <div class="media" >
                              <a class="media-left" href="single_page.html">
                                 <img id="imgMain" class="media-object img-responsive pull-left "src="{!! url('images/'.$post->image_url) !!}" alt="not displayed" style="max-width: 70px;max-height: 70px;">
                              </a>
                              <div class="media-body">
                                <a class="catg_title" href="single_page.html" style="text-align:justify;">
                                  {{$post->title}}
                                </a>                    
                              </div> 
                              <div class="numberofviews2"><font color="#000000"><b><span class="glyphicon glyphicon-eye-open "></span> 5,253</b></font> Views</div>
                              <div class="numberofviews2"><font color="#000000"><b><span class="glyphicon glyphicon-thumbs-up"></span> 5,253</b></font> Likes</div>
                              <div class="timestamp">
                                  
                              </div>
                        </div>
            </li>  
           @endforeach
             <div class="hr-primary" />  
                                      
</ul>
<div style="padding-left:45px;">
   
    <script type="text/javascript" src="http://www.cricwaves.com/cricket/widgets/script/scoreWidgets.js"></script>
</div>





</div>

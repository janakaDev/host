@extends('layouts.app')
</div>
@section('content')

<div class="row">
 @include('partials.carouselsALL')
    <div class="col-md-2" >
       
       @include('partials._leftbar') 
    </div>

        <div class="col-md-7 col-lg-06">
          
           @include('partials._main')
          
        </div>
        <div class="col-md-3 col-lg-3">
           
      		  @include('partials._rightbar')
        </div>
</div>
<div class="row" style="padding: 20px;">
  @include('partials.carousel_full')
</div>

<div class="row">
 <div class="col-md-1" >    
 </div>
 <div class="col-md-10">
  @include('partials._additional')
  </div>
<div class="col-md-1" >  
 </div>
</div>






@endsection

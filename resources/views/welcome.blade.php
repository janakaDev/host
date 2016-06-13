@extends('layouts.app')
</div>
@section('content')

<div class="row">
  @include('partials.carousel_full')
</div>
<div class="row">
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

@endsection

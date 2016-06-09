<div class=" navbar-wrapper ">
<div class="header-top">
<div class="row">    
<div class="col-md-12">
<nav class=" navbar navbar-default navbar-fixed navbar-inverse ">
        <div >
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    newsLanka
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    
    
    
    <div class="col-md-12" style="padding-top: 20px; padding-bottom: 5px;">
            
            <div class="col-md-9">
                
                            <div class="btn-toolbar demoPadder" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group" role="group" aria-label="First group">
                    <button type="button" class="btn btn-default">Fashion</button>
                    <button type="button" class="btn btn-default">Movies</button>
                    <button type="button" class="btn btn-default">Sports</button>
                    <button type="button" class="btn btn-default">Politics</button>
                    <button type="button" class="btn btn-default">Fashion</button>
                    <button type="button" class="btn btn-default">Movies</button>
                    <button type="button" class="btn btn-default">Sports</button>
                    <button type="button" class="btn btn-default">Politics</button>
                    <button type="button" class="btn btn-default">Fashion</button>
                    <button type="button" class="btn btn-default">Movies</button>
                    <button type="button" class="btn btn-default">Sports</button>
                    <button type="button" class="btn btn-default">Politics</button>
                    <button type="button" class="btn btn-default">Sports</button>
                    
                  </div>
                </div>
            </div>
            <div id="custom-search-input" class="col-md-3 pull-left" >
                            <div class="input-group col-md-12">
                                <input type="text" class="  search-query form-control" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
            </div>
          

    </div>
    

    </nav>
    </div>
    </div>    
    </div>
    </div>
 
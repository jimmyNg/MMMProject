<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Authentication App With Laravel 4</title>
    {{ HTML::style('packages/bootstrap/css/bootstrap.css') }}
    {{ HTML::style('css/main.css')}}
  </head>
 
 	<body>

	    <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
           <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MMM</a>
           </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">  
                        @if(!Auth::check())
                            <li>{{ HTML::link('users/register', 'Register') }}</li>   
                            <li>{{ HTML::link('users/login', 'Login') }}</li>   
                        @else
                            <li>{{ HTML::link('users/logout', 'logout') }}</li>
                        @endif
                    </ul>  
                </div>
          </div>
        </nav>
 
 	<div class="container">
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
        @if(Session::has('num'))
            <p class="alert">{{ Session::get('num')['email'] }}</p>
        @endif

        {{ $content }}
    </div>
	</body>

</html>

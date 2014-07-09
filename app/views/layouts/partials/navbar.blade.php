
<div class="navbar navbar-inverse">
  <div class="navbar-collapse collapse navbar-inverse-collapse">
        <ul class="nav navbar-nav">
            <li><a href="http://blog.dev">Home</a></li>
            <li><a href="{{ action('PostsController@index') }}">View All Posts</a></li>

            @if(Auth::check())
                <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
                <li><a href="{{ action('HomeController@logout') }}">Logout</a></li>
                <? $user = Auth::user()->first_name ?>
            @else
                <li><a href="{{ action('HomeController@login') }}">Log In</a></li>
            @endif
        </ul>
            {{ Form::open(array('action' => 'PostsController@index', 'method' => 'get', 'class' => 'navbar-form navbar-right')) }}
            {{ Form::text('search', null, array('class' => 'form-control col-lg-8', 'placeholder' => 'Search'))}}
            {{ Form::submit('Search', ['class' => 'btn btn-md btn-primary']) }}
            {{ Form::close() }}
        <ul class="nav navbar-nav navbar-right">
         @if(isset($user))
          <li><a id="welcome">Hello, <span class="text-primary">{{$user}}</span></a></li>
          @endif
        </ul>
  </div>
</div>





<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Laravel 7.X</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{url('/home')}}">Home</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/services')}}">Services</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{URL::to('/create')}}">New product</a></li>
        </ul>
    </div>
</nav>
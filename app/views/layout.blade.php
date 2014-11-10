<html>

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/ripples.min.css" rel="stylesheet">
    <link href="/css/material-wfont.min.css" rel="stylesheet">
    
    @section('head')
    <title>{{App::make('ceddd\Shop')->getName()}}</title>

    @show

</head>

<body>
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{App::make('ceddd\Shop')->getName()}}</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <!-- class="active" -->
                <!-- <li ><a href="{{asset('product')}}">Product</a></li>
                <li ><a href="{{asset('customer')}}">Customer</a></li>
                <li ><a href="{{asset('manager')}}">Manager</a></li>
                <li ><a href="{{asset('history')}}">History</a></li>
                <li ><a href="{{asset('manager/shop')}}">Shop</a></li> -->
                <li ><a href="{{asset('manager')}}">จัดการ</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="{{url('/search')}}" method="GET" role="form">
                <input class="form-control col-md-8" placeholder="ค้นหาสินค้า" type="text" name="search">
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    @if (Auth::guest())
                        <a href="{{URL::to('/login')}}">Login</a>
                    @else
                        <a href="{{URL::to('/logout')}}">{{Auth::user()->name}} ( Logout )</a>
                    @endif 
                </li>
            </ul>
        </div>
    </div>

    <div class='container'>
    
        @foreach($errors->all() as $message)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <li>{{ $message }}</li>
            </div>
        @endforeach

        @yield('body')
    </div>

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/js/ripples.min.js"></script>
    <script src="/js/material.min.js"></script>
    <!-- swal -->
    <script src="/lib/swal/sweet-alert.js"></script>
    <link rel="stylesheet" href="/lib/swal/sweet-alert.css">

    @yield('js')

</body>

</html>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Request::segment(1) == '' ? 'active' : '' }}">
                    <a href="{{ route('homepage.index') }}">Home</a>
                </li>
                <li class="{{ Request::segment(2) == 'about' ? 'active' : '' }}">
                    <a href="{{ route('about.index') }}">About</a>
                </li>
                <li class="{{ Request::segment(3) == 'faq' ? 'active' : '' }}">
                    <a href="{{ route('faq.index') }}">FAQ</a>
                </li>
                <li class="{{ Request::segment(4) == 'contact-us' ? 'active' : '' }}">
                    <a href="{{ route('feedback.index') }}">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

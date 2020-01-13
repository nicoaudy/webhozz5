<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>@yield('title', 'Webhozz Commerce')</title>

     <!-- Bootstrap core CSS -->
     <link href="{{ asset('styles/bootstrap.min.css') }}" rel="stylesheet">

     <style>
          .bd-placeholder-img {
               font-size: 1.125rem;
               text-anchor: middle;
               -webkit-user-select: none;
               -moz-user-select: none;
               -ms-user-select: none;
               user-select: none;
          }

          @media (min-width: 768px) {
               .bd-placeholder-img-lg {
                    font-size: 3.5rem;
               }
          }
     </style>

     <!-- Custom styles for this template -->
     <link href="{{ asset('styles/pricing.css') }}" rel="stylesheet">
</head>

<body>
     <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
          <h5 class="my-0 mr-md-auto font-weight-normal">Wcommerce🔥</h5>
          <nav class="my-2 my-md-0 mr-md-3">
               @guest
               <a class="p-2 text-dark" href="/login">Login</a>
               <a class="p-2 text-dark" href="/register">Register</a>
               @else
               <a class="p-2 text-dark" href="/category">Category</a>
               <a class="p-2 text-dark" href="/products">Products</a>
               <a class="p-2 text-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
               @endguest
          </nav>
     </div>

     <div class="container">

          <div style="margin-bottom: 300px">
               @yield('content')
          </div>

          <footer class="pt-4 my-md-5 pt-md-5 border-top">
               <div class="row">
                    <div class="col-12 col-md">
                         <img class="mb-2" src="{{ asset('images/bootstrap-solid.svg') }}" alt="" width="24" height="24">
                         <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
                    </div>
                    <div class="col-6 col-md">
                         <h5>Features</h5>
                         <ul class="list-unstyled text-small">
                              <li><a class="text-muted" href="#">Cool stuff</a></li>
                              <li><a class="text-muted" href="#">Random feature</a></li>
                              <li><a class="text-muted" href="#">Team feature</a></li>
                              <li><a class="text-muted" href="#">Stuff for developers</a></li>
                              <li><a class="text-muted" href="#">Another one</a></li>
                              <li><a class="text-muted" href="#">Last time</a></li>
                         </ul>
                    </div>
                    <div class="col-6 col-md">
                         <h5>Resources</h5>
                         <ul class="list-unstyled text-small">
                              <li><a class="text-muted" href="#">Resource</a></li>
                              <li><a class="text-muted" href="#">Resource name</a></li>
                              <li><a class="text-muted" href="#">Another resource</a></li>
                              <li><a class="text-muted" href="#">Final resource</a></li>
                         </ul>
                    </div>
                    <div class="col-6 col-md">
                         <h5>About</h5>
                         <ul class="list-unstyled text-small">
                              <li><a class="text-muted" href="#">Team</a></li>
                              <li><a class="text-muted" href="#">Locations</a></li>
                              <li><a class="text-muted" href="#">Privacy</a></li>
                              <li><a class="text-muted" href="#">Terms</a></li>
                         </ul>
                    </div>
               </div>
          </footer>
     </div>
</body>

</html>

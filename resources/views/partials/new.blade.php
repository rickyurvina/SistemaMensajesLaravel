<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            {{config('app.name')}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link {{setActive('home')}}" href="{{route('home')}}"> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{setActive('about')}}" href="{{route('about')}}">About
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{setActive('contact')}}" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{setActive('portafolio.*')}}" href="{{route('projects.index')}}">Portafolio</a>
            </li>
          @guest
           <li class="nav-item">
               <a class="nav-link {{setActive('/login')}}" href="{{route('login')}}">{{__('Login')}}
               </a>
           </li>
             @else
              <li class="nav-item"><a  href="#"   onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}</a></li>
              @endguest
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </ul>
        </div>
    </div>
</nav>
</form>

{{--   <pre>{{dump(request()->url())}}</pre>--}}
{{--    <pre>{{dump(request()->path())}}</pre>--}}
{{--    <pre>{{dump(request()->url())}}</pre>--}}
{{--    <pre>{{dump(request()->routeis('home'))}}</pre>--}}
{{--    nos indica cual esta activado--}}
{{--        <li class="{{request()->routeIs('home') ? 'active': ''}}"><a href="/">home</a></li>--}}
{{--        <li class="{{request()->routeIs('about') ? 'active': ''}}"><a href="/about">About</a></li>--}}
{{--        <li class="{{request()->routeIs('contact') ? 'active': ''}}"><a href="/contact">Contact</a></li>--}}
{{--    <li class="{{request()->routeIs('portafolio') ? 'active': ''}}"><a href="/portafolio">Portafolio</a></li>--}}

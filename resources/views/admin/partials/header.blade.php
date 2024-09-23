<header>
    <div class="container-fluid bg-dark text-white d-flex justify-content-between p-2 align-items-center">

        <h1><a href="{{ route('home') }}">Portfolio</a></h1>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('admin') }}">{{__('Dashboard')}}</a>
                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
          </div>
    </div>
</header>
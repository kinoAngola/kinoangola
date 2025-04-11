<div>
    <h1>{{ Auth::user()->name }}</h1>
    <a href="{{route('home')}}">Página Inicial</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</div>

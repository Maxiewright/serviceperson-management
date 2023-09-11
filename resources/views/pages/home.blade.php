@guest()
    <a href="{{ route('login') }}">{{__('Login')}}</a>
@else
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">{{__('Log Out')}}</button>
    </form>
@endguest

    <div class="had">
        <img src="{{asset('img/logo.png')}}" alt="goga" class="logo">
        @auth
        @if(auth()->user()->roles )
        <a href="{{route('admin')}}" class="p1"><p>Админ</p></a>
        @endif
        @endauth
        <a href="{{route('welcome')}}" class="p1"><p>Главная страница</p></a>
        
        @auth
        <a href="{{route('user-show')}}" class="p1"><p>Личный кабинет</p></a>
        <form method="POST" action="{{route('logout')}}">
        @csrf
        <button style="background: none; border: none; cursor: pointer;" class="p2"><p>Выход</p></button>
        </form>
        @endauth
        @guest
        <a href="{{route('login')}}" class="p2"><p>Вход</p></a>
        @endguest
        <div class="polosa"></div>
    </div>
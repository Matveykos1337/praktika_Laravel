<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reparacion</title>     
    </head>
    <body>
        <style>
body{
    margin: 0%;
    background-color: #ccaf9b;
}
p, a, button{
    font-family: 'Century Gothic';
    color: black;
}

input {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    margin: 0;
    padding: 5px;
    border-radius: 10px;
    border: 2px solid #573718;   
}

.had{
    width: 100%;
    display: flex;
    flex-wrap: wrap;  
    justify-content: center;
    align-items: center;  
}
.logo{
    height: 7%;
    width: 6%;
    margin-right: 33%;
   
}
.p1{
    text-decoration: none;
    margin-right: 3%;
    font-size: 20px;
}
.p2{
    text-decoration: none;
    font-size: 20px;
}
.polosa{
    width: 90%;
    height: 2px;
    background-color: #000000; 
}
.block1{
    background-color: #ece9e4;
    width: 90%;
    margin-top: 3%;
    margin-left: 5%;
    margin-right: 5%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding-top: 5%;
}
.rep{
    font-size: 30px;
    margin-bottom: 5%;
}
.adr{
    font-family: 'Century Gothic';
    font-size: 17px;
}
.po{
    width: 100%;

}

.knop2{
    text-decoration: none;
    background-color: #573718; 
    padding: 10px 20px;
    border: none;
    display: flex;
    color: white;
    justify-content: center;
    margin-left: 0.5%;
    margin-bottom: 10%;
    font-size: 17px;
}

.knop2:hover {
    background: rgba(0,0,0,0);
	box-shadow: inset 0 0 0 3px #573718;
    color: black;
    transition: 1s;
}

@media only screen and (max-width: 1024px) { 
.p1{
    text-decoration: none;
    margin-right: 3%;
    font-size: 16px;
}
.p2{
    text-decoration: none;
    font-size: 16px;
}
    .logo{
    height: 10%;
    width: 9%;
    margin-right: 26%;
   
}
}
@media only screen and (max-width: 800px) {
    .knop{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 24%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 15px;
}
.adr{
    font-family: 'Century Gothic';
    font-size: 15px;
}
}
@media only screen and (max-width: 490px) {
    .p1{
    text-decoration: none;
    margin-right: 3%;
    font-size: 13px;
}
.p2{
    text-decoration: none;
    font-size: 13px;
}
    .logo{
    height: 10%;
    width: 9%;
    display:none;
}
.knop{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 24%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 12px;
}
.knop2{
    text-decoration: none;
    background-color: #573718; 
    padding: 10px 20px;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 17px;
}
}
@media only screen and (max-width: 380px) {
    .knop{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 24%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 10px;
}}
</style>

    @include('components.header')
    <form class="block1" method="POST" action="{{ route('register') }}">
            @csrf
            <p class="rep">Reparacion</p>
            <!-- Login -->
                <p class="adr">Логин<br>
                <input pattern="^[a-zA-Z\D ^0-9]+$" title="Любое слово на латинице" id="name" class="po" type="text" name="name" value="{{ old('name') ??''  }}" required autofocus />
                </p>
                <!-- FIO -->
                <p class="adr">ФИО<br>
                <input pattern="^[А-Яа-яЁё\s]+$" title="Любое слово на русском включая пробелы" id="fio" class="po" type="text" name="fio" value="{{ old('fio') ??''  }}" required />
                </p>
            <!-- Email Address -->
                <p class="adr">E-mail<br>
                <input id="email" class="po" type="email" name="email" value="{{ old('email') ??''  }}" required />
                </p>
            <!-- Password -->
                <p class="adr">Пароль<br>
                <input id="password" class="po" type="password" name="password" required autocomplete="new-password" />
                </p>
            <!-- Confirm Password -->
                <p class="adr">Подтвердите пароль<br>
                <input id="password_confirmation" class="po" type="password" name="password_confirmation" required />
                </p>
            
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
        @endif

        @if(session('errorMessage'))
                <div class="alert alert-danger">
                    {{ session('errorMessage') }}
                </div>
        @endif

        
        <button class="knop2">
            <a style="text-decoration: none; color: black;" type="submit">Зарегистрироваться</a>
        </button>
        
        </form>
</html>

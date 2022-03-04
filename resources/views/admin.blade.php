<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reparacion</title>     
    </head>
    <body alink="white" vlink="white" link="white">
        <style>
body{
    margin: 0%;
    background-color: #ccaf9b;
}
p{
    font-family: 'Century Gothic';
    color: black;
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
    justify-content: space-around;
    flex-direction: column;
    padding-top: 5%;
}
.rep{
    margin-left: 13%;
    font-size: 30px;
    margin-bottom: 5%;
}

.uved{
    font-family: 'Century Gothic';
    margin-left: 13%;
    font-size: 20px;
    margin-bottom: 2%;
}

.soob{
    height: 20%;
    width: 80%;
    background-color: #d9a881;
    display: flex;
    flex-direction: column;
    margin-left: 10%;
    margin-bottom: 5%;
}
.ul{
margin-left: 6%;
font-size: 20px;
}
.vs{
margin-left: 6%;
}
.knop{
    text-decoration: none;
    margin-left: 6%;
    margin-right: 6%;
    background-color: #573718; 
    padding: 10px 20px;
    border: none;
    display: flex;
    color: white;
    justify-content: center;
    margin-bottom: 2%;
    font-size: 17px;
}

.knop:hover {
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
.ul{
margin-left: 6%;
font-size: 18px;
}

.vs{
margin-left: 6%;
font-size: 13px;
}
.knop{
    text-decoration: none;
    margin-left: 6%;
    background-color: #573718; 
    height: 3%;
    width: 10%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
    font-size: 13px;
}
}
@media only screen and (max-width: 800px) {
    .knop{
    text-decoration: none;
    margin-left: 6%;
    background-color: #573718; 
    height: 3%;
    width: 13%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
    font-size: 10px;
}
}
@media only screen and (max-width: 480px) {
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
.ul{
margin-left: 6%;
font-size: 15px;
}

.vs{
margin-left: 6%;
font-size: 10px;
}
.knop{
    text-decoration: none;
    margin-left: 6%;
    background-color: #573718; 
    height: 2%;
    width: 14%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
    font-size: 10px;
}
}
@media only screen and (max-width: 370px) {
    .rep{
    margin-left: 13%;
    font-size: 25px;
    margin-bottom: 5%;
}
.knop{
    text-decoration: none;
    margin-left: 6%;
    background-color: #573718; 
    height: 2%;
    width: 20%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
    font-size: 7px;
}
}

        </style>
      
        @include('components.header')
        <p class="rep">Сообщения пользователей</p>
        <div class="uved">
        @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif
        </div>
        <div class="block1">
            @foreach($data as $el)
            <div class="soob">
                <p class="ul"><b>{{ $el->adress }}</b></p>
                <p class="vs">{{ $el->opisanie }}</p>
                <p class="vs">{{ $el->kategory }}</p>
                <p class="vs">{{ $el->maxcost }}</p>
                <img class="vs" style="width: 25%; height: 25%;" src="{{ asset("storage/$el->img") }}" alt="">
                <p class="vs"><small>{{ $el->created_at }}</small></p>
                <a href="{{ route('user-delete', $el->id) }}" type="submit" class="knop">Удалить</a>
            </div>
            @endforeach
        </div>

</html>

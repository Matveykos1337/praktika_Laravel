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
.knop{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 8%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
    font-size: 17px;
}

.knop:hover {
    background: rgba(0,0,0,0);
	box-shadow: inset 0 0 0 3px #573718;
    transition: 1s;
}

.knop2{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 12%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 17px;
}

.knop2:hover {
    background: rgba(0,0,0,0);
	box-shadow: inset 0 0 0 3px #573718;
    transition: 1s;
}

@media only screen and (max-width: 1440px) {
    .knop2{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 16%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 17px;
}  
}
@media only screen and (max-width: 1280px) {
    .knop2{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 20%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 17px;
} 
}
@media only screen and (max-width: 1024px) {
    .knop2{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 22%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 17px;
} 
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
    margin-bottom: 2%;
    font-size: 15px;
}
.knop2{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 28%;
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
    margin-bottom: 2%;
    font-size: 12px;
}
.knop2{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 32%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 12px;
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
    margin-bottom: 2%;
    font-size: 10px;
}
.knop2{
    text-decoration: none;
    background-color: #573718; 
    height: 4%;
    width: 36%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 10%;
    font-size: 10px;
}
}
</style>
    <div class="had">
        <img src="{{asset('img/logo.png')}}" alt="goga" class="logo">
        <a href="{{route('welcome')}}" class="p1"><p>Главная страница</p></a>
        <a href="{{route('vhod')}}" class="p2"><p>Вход</p></a>
        <div class="polosa"></div>
    </div>
    <div class="block1">
        <p class="rep">Reparacion</p>
        <p class="adr">Login<br>
            <input type="text" class="po">
        </p>
        <p class="adr">Password<br>
            <input type="password" class="po">
        </p>
        <a href="" class="knop"><p>Войти</p></a>
        <a href="{{route('zareg')}}" class="knop2"><p>Зарегестрироваться</p></a>
    </div>
</html>
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

input {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit; 
    margin: 0;
    padding: 5px;
    border-radius: 10px;
    border: 2px solid #573718;   
}

select {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    margin: 0;
    padding: 5px;
    border-radius: 10px;
    border: 2px solid #573718;  
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
font-size: 25px;
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

.adr{
    font-family: 'Century Gothic';
    margin-left: 6%;
    font-size: 14px;
}
.po{
    width: 70%;
}

.imgstore {
    border: 0px;
    margin-left: 6%;
    margin-bottom: 2%;
}

@media only screen and (max-width: 1440px) {
    .knop{
    text-decoration: none;
    margin-left: 6%;
    background-color: #573718; 
    height: 4%;
    width: 9%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
    font-size: 15px;
} 
}
@media only screen and (max-width: 1280px) {
    .knop{
    text-decoration: none;
    margin-left: 6%;
    background-color: #573718; 
    height: 4%;
    width: 10%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
    font-size: 14px;
}
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
    width: 15%;
    display: flex;
    justify-content: space-around;
    margin-bottom: 2%;
    font-size: 8px;
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
    <div class="block1">
        <p class="rep">Личный кабинет</p>
        @if(session('success'))
        <div class="uved">
            {{ session('success') }}
        </div>
        @endif
        <div class="soob">
        <form method="post" action="{{ route('users') }}" enctype="multipart/form-data">
            @csrf
            
            <p class="adr">Адрес помещения:<br>
            <input type="text" class="po" name="adress" id="adress">
            </p>
            <p class="adr">Описание:<br>
            <input type="text" class="po" name="opisanie" id="opisanie">
            </p>

            <p class="adr">Категория:<br>
            <select name="kategory" id="kategory">
            <option value="Ремонт" name="kategory1" id="1">Ремонт</option>
            <option value="Дизайн проект" name="kategory2" id="2">Дизайн проект</option>
            <option value="Стройка" name="kategory3" id="3">Стройка</option>
            <option value="Проект+постройка" name="kategory4" id="4">Проект+постройка</option>
            </select>
            </p>

            <p class="adr">Максимальная цена:<br>
            <input type="number" size="100" name="maxcost" id="maxcost">
            </p>

            <p class="adr">Загрузить фото</p>
            <input type="file" name="img" id="img" class="imgstore">

            <button type="submit" class="knop">Отправить</button>
        </div>
        </form>

        <p class="rep">Ваши заявки</p>
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
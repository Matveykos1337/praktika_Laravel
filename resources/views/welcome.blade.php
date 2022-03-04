<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reparacion</title>
    </head>
    <body>
        <style>
body{
    height: 2650px;
    margin: 0%;
    background-color: #ccaf9b;
}
p{
    font-family: 'Century Gothic';
    color: black;
}
.block1{
    background-image: url(img/back.png);
    display: flex;
    background-size: 100% 100%;
    height: 26%;
    width: 100%;
    flex-wrap: wrap;
    align-items: baseline;   
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

.block2{
    display: flex;
    height: 19%;
    width: 100%;
    justify-content:space-around;
    align-items: center;
}
.foto1{
    height: 80%;
    width: 33%;
}
.border{
    height: 40%;
    width: 35%;
    background-image: url(img/border.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 21px;
}
.block3{
    height: 49%;
    width: 100%;
    background-color: white;
    display: flex;
    flex-direction: column;
}
.textb3{
    width: 100%;
}
.rep{
    margin-left: 13%;
    font-size: 40px;
}
.good{
    margin-left: 13%;
    font-size: 30px;
}
.row{
    height: inherit;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content:space-around;
}
.border2{
    display: flex;
    height: 42%;
    width: 35%;
    background-image: url(img/borderdark.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 21px; 
    justify-content: center;   
}
.bottom{
    display: flex;
    background-color: #312921;
    width: 100%;
    height: 7%;
    justify-content:space-around;
}
.bb1{
    height: 100%;
    width: 45%;
    display: flex;
    justify-content: flex-start;
    align-items: flex-end;
    margin-left: 2%;
}
.bb2{
    height: 100%;
    width: 55%;
    display: flex;
    justify-content: flex-start;
    align-items: flex-end;
}
.bot{
    text-align: center;
    color: white;
}
.bot2{
    color: white; 
}

@media only screen and (max-width: 1500px) {

.foto1{
height: 60%;
width: 33%;
}

}

@media only screen and (max-width: 1280px) {
    body{
    height: 2100px;
    margin: 0%;
    background-color: #ccaf9b;
}
    .foto1{
    height: 63%;
    width: 31%;
    }
    .border{
    height: 39%;
    width: 35%;
    background-image: url(img/border.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 17px;
}
.rep{
    margin-left: 13%;
    font-size: 30px;
}
.good{
    margin-left: 13%;
    font-size: 20px;
}
.border2{
    display: flex;
    height: 37%;
    width: 35%;
    background-image: url(img/borderdark.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 17px; 
    justify-content: center;   
}
.bot{
    font-size: 13px; 
    text-align: center;
    color: white;
}
.bot2{
    font-size: 13px; 
    color: white; 
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
    body{
    height: 1800px;
    margin: 0%;
    background-color: #ccaf9b;
}
    .foto1{
    height: 63%;
    width: 31%;
    }
    .border{
    height: 39%;
    width: 35%;
    background-image: url(img/border.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 14px;
}
.rep{
    margin-left: 13%;
    font-size: 27px;
}
.good{
    margin-left: 13%;
    font-size: 17px;
}
.border2{
    display: flex;
    height: 37%;
    width: 35%;
    background-image: url(img/borderdark.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 14px; 
    justify-content: center;   
}
.bot{
    font-size: 10px; 
    text-align: center;
    color: white;
}
.bot2{
    font-size: 10px; 
    color: white; 
}
    
  }
  @media only screen and (max-width: 800px) {
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
    margin-right: 26%;
   
}
    body{
    height: 1400px;
    margin: 0%;
    background-color: #ccaf9b;
}
    .foto1{
    height: 63%;
    width: 31%;
    }
    .border{
    height: 39%;
    width: 35%;
    background-image: url(img/border.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 11px;
}
.rep{
    margin-left: 13%;
    font-size: 24px;
}
.good{
    margin-left: 13%;
    font-size: 14px;
}
.border2{
    display: flex;
    height: 37%;
    width: 35%;
    background-image: url(img/borderdark.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 11px; 
    justify-content: center;   
}
.bot{
    font-size: 8px; 
    text-align: center;
    color: white;
}
.bot2{
    font-size: 8px; 
    color: white; 
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
    body{
    height: 1000px;
    margin: 0%;
    background-color: #ccaf9b;
}
    .foto1{
    height: 60%;
    width: 34%;
    }
    .border{
    height: 44%;
    width: 42%;
    background-image: url(img/border.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 8.5px;
}
.rep{
    margin-left: 13%;
    font-size: 20px;
}
.good{
    margin-left: 13%;
    font-size: 10px;
}
.border2{
    display: flex;
    height: 44%;
    width: 42%;
    background-image: url(img/borderdark.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 8.5px; 
    justify-content: center;   
}
.bot{
    font-size: 6px; 
    text-align: center;
    color: white;
}
.bot2{
    font-size: 6px; 
    color: white; 
}
    
  }

  @media only screen and (max-width: 380px) {
    .block1{
    background-image: url(img/back.png);
    display: flex;
    background-size: 100% 100%;
    height: 13%;
    width: 100%;
    flex-wrap: wrap;
    align-items: baseline;   
}
    .p1{
    text-decoration: none;
    margin-right: 3%;
    font-size: 10px;
}
.p2{
    text-decoration: none;
    font-size: 10px;
}
    .logo{
    height: 10%;
    width: 9%;
    display:none;
}
    body{
    height: 1400px;
    margin: 0%;
    background-color: #ccaf9b;
}
.block2{
    display: flex;
    height: 12%;
    width: 100%;
    justify-content:space-around;
    align-items: center;
}
    .foto1{
    height: 60%;
    width: 37%;
    }
    .border{
    height: 44%;
    width: 42%;
    background-image: url(img/border.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 6.7px;
}
.block3{
    height: 60%;
    width: 100%;
    background-color: white;
    display: flex;
    flex-direction: column;
}
.rep{
    margin-left: 13%;
    font-size: 17px;
}
.good{
    margin-left: 16%;
    font-size: 10px;
}
.border2{
    display: flex;
    height: 50%;
    width: 56%;
    background-image: url(img/borderdark.png);
    background-size: 100% 100%;
    font-family: 'Century Gothic';
    text-align: center;
    font-size: 8.5px; 
    justify-content: center;
    margin-top: 5%;
    margin-bottom: 10%;   
}
.bot{
    font-size: 5px; 
    text-align: center;
    color: white;
}
.bot2{
    font-size: 5px; 
    color: white; 
}
.row{
    height: inherit;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content:space-around;
    flex-direction: column;
}
.bottom{
display: flex;
background-color: #312921;
width: 100%;
height: 3%;
justify-content:space-around;
}
  }
    </style>
    <div class="block1">
    @include('components.header')
    </div>
    <div class="block2">
        <div class="border">
            <p>Ремонт квартир под ключ - это<br>возможность изменить всё. Вы поручаете<br>отремонтировать жилье команде<br>профессионалов, которые выполнят<br>необходимые работы, вынесут<br>строительный мусор и вручат вам ключи.</p>
        </div>
        <img src="{{asset('img/foto1.png')}}" alt="goga" class="foto1">
    </div>

    <div class="block3">
        <div class="textb3">
                <p class="rep">Reparacion</p>
                <p class="good">Это лучший выбор на рынке</p>
        </div>
        <div class="row">
            <div class="border2">
                <p class="o">Наши дизайнеры, подготовят несколько<br>видов дизайна вашей квартиры, а после<br>без лишней информации представят вам<br>несколько проектов.</p>
            </div>
            <div class="border2">
                <p class="o">Наш ремон делается только из самых<br>качественных материалов, в связи с чем<br>ремон будет долгосрочным.</p>
            </div>
        </div>
        <div class="row">
        <div class="border2">
                <p class="o">В нашем штате 15 рабочих бригад,<br>готовые работать ради вас и вашей<br>квартиры.</p>
            </div>
            <div class="border2">
                <p class="o">Каждый наш работник имеет за плечами<br>множество качественных проектов, в том<br>чесле, проекты в Европе.</p>
            </div>
        </div>
        <div class="row">
            <div class="border2">
                <p class="o">Для многодетных семей у нас<br>предусмотренны скидки, так же для<br>семей с одним родителем.</p>
            </div>
            <div class="border2">
                    <p class="o">Мы работаем с поставщиками<br>экологически чистых строительных<br>материалов по всей стране</p>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="bb1">
            <p class="bot2">+7 912 462 7887,<br>hello@reparacion.com<br>Россия, г. Ижевск, ул. Металлургов, д. 11</p>
        </div>
        <div class="bb2">
            <p class="bot">© Reparacion.<br>All rights reserved 2022.</p>  
        </div>
    </div>
    </body>
</html>

<?php header("Content-type: text/css");?>
#principal {
    
    text-align: center;
    color: #000;
    margin: auto;
}

.img-principal img {
    width: 100%;
    display: none;
}

#principal::after {
    content: "";
    display: block;
    clear: both;
}

h1 {
    background: #e89dca;
    color: #3d0aa3;
}

h2 {
    color: #aaa;
    text-align: center;
    
}

p {
    padding: 10px;
}

.contenido-1 {
    position: relative;
    padding-bottom: 30px;
}

.contenido-1 h2 {
    padding: 20px;
}

#mision img{
    border-radius: 25px;
    width: 100%;
    margin-bottom: 5%;
}

.contenido-2::after {
    content: "";
    display: block;
    clear: both;
}

.contenido-1::after {
    content: "";
    display: block;
    clear: both;
}

.texto-contenido {
    text-align: left;
    font-size: 1.5em;
}

em {
    color: #3d0aa3;
}

.ordinario {
    text-align: center;
    height: 100%;
    background-attachment:fixed;
    background-repeat:no-repeat;
    background-image:url(../img/ord1.jpg);
    background-size: 100% 100%;
    
}

.ordinario img {
   width: 50%;
   opacity: 0.7;
   filter: alpha(opacity=0); /* For IE8 and earlier */
}

.ordinario::after {
    content: "";
    display: block;
    clear: both;
}

.extraordinario {
    height: 100%;
    text-align: center;
    background-attachment:fixed;
    background-repeat:no-repeat;
    background-image:url(../img/ext1.jpg);
    background-size: 100% 100%;
}

.extraordinario img {
   width: 70%;
   opacity: 0.8;
   filter: alpha(opacity=1); /* For IE8 and earlier */
   
}

.extraordinario::after {
    content: "";
    display: block;
    clear: both;
}

.ordinario h1{
    background: #aaa;
    color: #fff;
}

.catalogo h1{
    background: #3d0aa3;
    color: #fff;
    margin-bottom: 0;
}

.owl-theme .owl-dots .owl-dot.active span{
    width:20px;
    height:20px;
    background-color:#102fc5;
    border:2px solid #fff;}
.owl-theme .owl-dots .owl-dot span{
    width:20px;height:20px;border:2px solid #fff;}

.item{
    height: 550px;
    width:80%;
    margin:0 auto;
}

.item img {
    height: 90%;
    padding: 2%;
    border-radius:25px;
}

.owl-carousel .owl-stage {
  display: flex;
  align-items: center;
}

.catalogo h2{
    margin: 2%;
    background-color:rgba(0, 0, 0, 0.1);
    border-radius:25px;
    color: #102fc5;
}

.catalogo p{
    font-size: 1.5em;
}

#map{
    
    width:100%;
    height:400px;
    background-color: gray;
}

.tit-lagels {
    margin-left: -122px;
    padding: 2%;
    width: 170px;
}

.tit-lagels:hover {
    margin-left: 0px;
    -webkit-transition: 1s; /* Safari */
    transition: 1s;
    
}

.tit-lagels:not( :hover ){
    margin-left: -122px;
    -webkit-transition: 1s; /* Safari */
    transition: 1s;
}

.titulo-principal {
   
}

.titulo-principal h1{
    margin-bottom: 0;
    
}

.clear-header {
    height: 52px;
}

#mision h1{
    background: #3d0aa3;
    color: #fff;
}

#catalogo > div {
    border-bottom: 5px solid #ccc;
}

#bebes, #damas {
    background: #e89dca;
    color: #fff;
}

.bebes h2, .damas h2{
    color: #fff;
}

.ninos h2{
    color: #e8c97b;
}

body {
    font-family: 'Capriola';
}

.ubicacion {
    padding-bottom: 1%;
    color: #fff;
    background: #555;
}

.ubicacion h1 {
    background: #aaa;
    color: #fff;
}

.vertical-center {
  min-height: 80%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 80vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
}

.no-padding {
  padding: 0;
}

.navbar-nav li a {
  font-size: 1.5em;
}

.video {
   margin-top: 1%;
}

.bienvenido {
    height: 100%;
    text-align: center;
    background-attachment:fixed;
    background-image:url(../img/fondo-principal.jpg);
}
/* Custom, iPhone Retina */ 
@media only screen and (max-width : 480px) {
    .item{
        height: 300px;
    }
    
    .item img {
        height: 70%;
        padding: 1%;
    }
    
    
    
}

@media only screen and (min-width : 992px) {
    
    .img-principal img {
        display: block;
    }
    
}

@media only screen and (max-width : 992px) {
    .catalogo .vertical-center {
        display: block;
        min-height: auto;
    }
}
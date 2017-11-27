<?php header("Content-type: text/css");?>
body {
    font-family: 'Capriola';
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


em {
    color: #3d0aa3;
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

.login-form h1 {
    color: #ccc;
    text-align: center;
    font-family: 'Capriola', cursive;
    font-size: 50px;
}

.login-form {
    background: #eee;
    width: 50%;
    margin: auto;

}

.form-group {
    position: relative;
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    height: 50px;
    border: none;
    padding: 5px 7px 5px 25px;
    background: #fff;
    color: #666;
    border: 2px solid #ddd;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
.form-control:focus, .form-control:focus + .fa {
    border-color: #10CE88;
    color: #10CE88;
}

.form-group .fa {
    position: absolute;
    left: 10px;
    top: 17px;
    color: #999;
}

.log-status.wrong-entry {
    -moz-animation: wrong-log 0.3s;
    -webkit-animation: wrong-log 0.3s;
    animation: wrong-log 0.3s;
}

.log-status.wrong-entry .form-control, .wrong-entry .form-control + .fa {
    border-color: #ed1c24;
    color: #ed1c24;
}

.log-btn {
    cursor: pointer;
    background: #e89dca;
    dispaly: inline-block;
    width: 100%;
    font-size: 16px;
    height: 50px;
    color: #fff;
    text-decoration: none;
    border: none;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

.link {
    text-decoration: none;
    color: #C6C6C6;
    float: right;
    font-size: 12px;
    margin-bottom: 15px;
}
.link:hover {
    text-decoration: underline;
    color: #8C918F;
}

.alert {
    display: none;
    font-size: 12px;
    color: #f00;
    float: left;
}

.form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}

.btn-primary {
    background-color: #639eb6;
    border-color: #639eb6;
}

.btn-primary:hover {

    color: #fff;
    background-color: #2891ba;
    border-color: #2891ba;

}

.header-title{
    text-align: left;
}
.header-logout{
    text-align: right;
    padding: 0;
}

.footer-privacidad {
    padding: 0;
    text-align: right;
}
.footer-copyright {
    text-align: left;
}

#demo {
    width: 100%;
    font-size: 0.9em;
    height: auto;
}
.demo i { position: absolute; bottom: 10px; right: 24px; top: auto; cursor: pointer; font-size: 0.9em;}

.demo h4 {
    font-size: 0.9em;
}

section {
    margin: 10px;
}

#post {
    /*border: solid 2px #000;*/
    padding-top: 5%;
    padding-bottom: 5%;

    
background: rgba(255,255,255,1);
background: -moz-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(255,255,255,1)), color-stop(47%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
background: -webkit-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -o-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: -ms-radial-gradient(center, ellipse cover, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
background: radial-gradient(ellipse at center, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );




}

#post h2 {
    padding-bottom: 1%;
    border-bottom: 2px solid #e89dca;
    margin-bottom: 5%;
    /*color: #336699;*/
    color: #000;
    font-size: 1.3em;
}

#errores {
    padding-top: 5%;
}

footer {
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: auto;
}

.clear-header {
    height: 52px;
}




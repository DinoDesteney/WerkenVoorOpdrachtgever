<?php
/* Smarty version 3.1.31, created on 2017-03-21 13:10:51
  from "E:\xampp\htdocs\leerjaar2\WerkVoorOpdrachtGever\smarty-3.1.31\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d1184b5e33b5_71946181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15b376741ca5da63527f7acefea43c20f9a49bb7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\templates\\index.tpl',
      1 => 1490096938,
      2 => 'file',
    ),
    '44eb7b3273b37fd9c329e4b974bec66e3c9ce5c5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\css\\style.css',
      1 => 1490098224,
      2 => 'file',
    ),
    'd6b0417e9e23c9b4a2cc16547dc1f3fa16bf93a4' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\templates\\head.tpl',
      1 => 1490096129,
      2 => 'file',
    ),
    '2ec2cad32a6d83386850671176828c33cc6748d7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\templates\\header.tpl',
      1 => 1490095951,
      2 => 'file',
    ),
    '7dc2e0825b5baba7af990708bf69d71ae8388d22' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\templates\\body.tpl',
      1 => 1490097711,
      2 => 'file',
    ),
    '3cbf1caade40a0ae0da52166c4e9c2d869ecbed5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\templates\\footer.tpl',
      1 => 1481752645,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_58d1184b5e33b5_71946181 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>

.container {
    position: relative;
    width: 100.25%;
    height: 450px;
    margin-left: -2px;
    overflow: hidden;
}

#ArrowDown {
    width: 100px;
    margin-left: 45.5%;
}
/*Contact*/
#Contact{
    text-align: center;
    margin:60px;
}
#contactleft{
    width: 55%;
    margin-left: 20px;
    float: left;
    overflow: hidden;
}
#contactleft p{
    width: 50%;
    margin-left: 20px;
    overflow: hidden;
    margin-left: 22%;
    font-size: 20px;
    margin-top: 0px;
}
.Contactdivs{
    margin: 10px;
}
#contactright{
    width: 45%;
    margin-left: 20px;
    overflow: hidden;
    display: inline;
}
#form1{
    width: 340px;
    height: 35px;
    font-size: 22px;
    margin-bottom:20px;
}
#form2{
    width: 340px;
    height: 35px;
    margin-bottom:20px;
    font-size: 22px;
}
#form3{
    width: 300px;
}
#ButtonContact{
    background-color: gray; /* Green */
    margin-left: 56.5%;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-width: 9px;
    border-color: black;
}

.Titles{
    font-size: 20px;
}
@media only screen and (max-width: 1036px) {
    #Contact{
        text-align: center;
        margin-top:40px;
    }
}
/*About*/

#aboutH1 {
    width: 100%;
    text-align: center;

    margin-bottom: 50px;
}

#About {
    margin-top: 40px;
}

#aboutMain {
    margin: 0px;
}

#aboutLeft {
    float: left;
    width: 50%;
    overflow: hidden;
}

#aboutLeft img {
    width: 50%;
    height: auto;
    margin-left: 25%;
}

#aboutRight {
    float: left;
    width: 40%;
    overflow: hidden;

}

@media only screen and (max-width:1134px) {
    #aboutLeft {
        width: 100%;
    }
    #aboutLeft img {
        height: auto;
        width: 50%;
    }
    #aboutRight {
        width: 50%;
    }
    #ArrowDown {
        width: 100px;
        margin-left: 42%;
    }
}

/*NAVIGATION*/

html,
header,
footer,
body,
nav,
div,
img,
a,
ul,
li,
h1,
h2 {
    margin: 0;
    padding: 0;
    text-decoration: none;
    list-style-type: none;
}

* {
    box-sizing: border-box;
}

html {
    font-size: 14px;
}

body {
    width: 100%;
    margin: 0 auto;
    color: #444;
    font-family: helvetica;
}

a:link,
a:visited {
    color: #555;
    font-weight: 700;
    transition: .2s color ease-in-out;
}

a:hover,
a:active {
    color: #888;
}
/*styling content*/

main {
    padding: 1.5rem;
    line-height: 2.6rem;
}

section>p {
    text-indent: 2.6rem;
}

footer {
    background: #00b4de;
    color: #fbfbfb;
    text-align: center;
    padding: 2em 0;
}
/*styling the header part*/

.toggle-menu {
    display: none;
}

header {
    margin: 2rem 0;
}

.site-title img {
    max-width: 100px;
    display: inline-block;
    vertical-align: middle;
    -webkit-filter: grayscale(90%);
    -moz-filter: grayscale(90%);
    filter: grayscale(90%);
}

.nav-list {
    display: flex;
    flex-flow: row;
    justify-content: space-between;
    align-items: center;
    white-space: nowrap;
}

.nav-list > li {
    position: relative;
}

.nav-list>li:not(.has-logo)>a {
    text-transform: uppercase;
    display: block;
    padding: 1rem;
}

.nav-list ul {
    position: absolute;
    z-index: 1010;
    background-color: #fff;
    line-height: 2rem;
    left: -9999px;
}

.nav-list ul a {
    font-weight: normal;
    display: block;
    padding: .5rem 1rem;
}

.nav-list > li:hover a + ul {
    left: 0;
    top: 100%;
}

.mobile-display {
    display: none;
}

@media only screen and (max-width: 70.75rem) {
    html {
        font-size: 13px;
    }
    body {
        width: 100%;
    }
    .has-logo {
        display: none;
    }
    .mobile-display {
        display: block;
        margin: 2rem auto;
        text-align: center
    }
    #aboutRight {
        width: 50%;
        margin-left: 25.5%;
        margin-top: 20px;

    }
}
/*Scroll button*/
</style>
<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../script/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow76.js"></script>
    <noscript>Not seeing a <a href="http://www.scrolltotop.com/">Scroll to Top Button</a>? Go to our FAQ page for more info.</noscript>
    <script src="SlickNav/jquery.slicknav.min.js"></script>
</head>
<header>
    <nav>
        <a href="#" class="toggle-menu">&#9776;</a>
        <ul class="nav-list nav-open" id="nav">
            <li><a href="#">About</a></li>
            <li class="has-submenu"><a href="#">News</a>
            </li>
            <li class="has-logo"><a href="#">
                    <h2 class="site-title">
                        <h1>TON LEENARTS</h1>
                    </h2>
                </a></li>
            <li class="has-submenu"><a href="#">Work</a>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>
<body>
<div id="imgGallary" class="container">
    <img src="../images/image1.jpg" alt="" width="100%" height="450" />
    <img src="../images/image2.jpg" alt="" width="100%" height="450" />
    <img src="../images/image3.jpg" alt="" width="100%" height="450" />
    <img src="../images/image4.jpg" alt="" width="100%" height="450" />
</div>
<img src="../images/arrow-down-icon-png-9.png" id="ArrowDown">

<div id="About" class="About">
    <div id="aboutH1">

        <h1>About</h1>

    </div>
    <div id="aboutMain">
        <div id="aboutLeft">
            <img src="../images/ton.jpg" alt="Ton">
        </div>
        <div id="aboutRight">
            <h1>Ton Leenarts</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
        </div>
    </div>
</div>
<br style="clear: both;">
<div id="Contact">
    <h1>Contact</h1>
</div>
<div id="contactleft">
    <div class="Contactdivs">
        <p>Phonenumber</p>
        <p>+31 (20)6734137</p>
    </div>
    <br>
    <div class="Contactdivs">
        <p>Cellphonenumber</p>
        <p>+31 (0)626138526</p>
    </div>
    <br>
    <div class="Contactdivs">
        <p>E-mail</p>
        <p>tonleenarts@gmail.com</p>
    </div>
</div>
<div id="contactright">
    <form>

        <input type="text" name="Name" value="Name" id="form1">


        <input type="text" name="Email" value="Email" id="form2">


        <textarea name="email" id="email" rows="20" cols="43" id="form3">Send Message</textarea>
        <br>
        <br>
        <input type="submit" value="Send Message" id="ButtonContact">
    </form>
</div>
<script>
    (function(){
        var imgLen = document.getElementById('imgGallary');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;

        if(counter <= images.length){
            setInterval(function(){
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;

                if(counter === images.length){
                    counter = 1;
                }
            },2000);
        }
    })();
</script>
<script>
    $(function(){
        $('#menu').slicknav();
    });
</script>
</BODY>
</HTML>
<?php }
}

<?php
/* Smarty version 3.1.31, created on 2017-03-21 13:11:07
  from "E:\xampp\htdocs\leerjaar2\WerkVoorOpdrachtGever\smarty-3.1.31\css\style.css" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d1185bd5d6c8_06792347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44eb7b3273b37fd9c329e4b974bec66e3c9ce5c5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\css\\style.css',
      1 => 1490098224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d1185bd5d6c8_06792347 (Smarty_Internal_Template $_smarty_tpl) {
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
</style><?php }
}

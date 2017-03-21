<?php
/* Smarty version 3.1.31, created on 2017-03-21 14:21:40
  from "E:\xampp\htdocs\leerjaar2\WerkVoorOpdrachtGever\smarty-3.1.31\templates\body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58d128e4a0d1d5_14099223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dc2e0825b5baba7af990708bf69d71ae8388d22' => 
    array (
      0 => 'E:\\xampp\\htdocs\\leerjaar2\\WerkVoorOpdrachtGever\\smarty-3.1.31\\templates\\body.tpl',
      1 => 1490102490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d128e4a0d1d5_14099223 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <p class="flipvla">T: +31 (20)6734137</p>
            <p class="flipvla">M: +31 (0)626138526</p>
            <p class="flipvla">E: tonleenarts@gmail.com</p>
            <p class="flipvla">F: <a>www.facebook.com/tonleenarts</a></p>
        </div>
        <div class="col-md-5">
            <form>
                <input class="name" type="text" name="fullname" placeholder="Full name">
                <br>
                <input class="name" type="email" name="email" autocomplete="off" placeholder="E-mail adress">
                <br>
                <textarea class="jantje" name="message" rows="10" cols="30" placeholder="type your E-mail here"></textarea>
            </form>
            <br>
            <a class="contact" href="">Send message</a>
        </div>
        <div class="col-md-1"></div>
    </div>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function(){
        $('#menu').slicknav();
    });
<?php echo '</script'; ?>
><?php }
}

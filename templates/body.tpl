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
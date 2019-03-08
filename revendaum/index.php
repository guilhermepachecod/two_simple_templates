<!DOCTYPE html>
<html>
<title>CarAuto TEMPLATE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 24px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 12px;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button5 {background-color: #555555;
    color: white;
}
.button:hover {
    background-color: #000; /* Green */
    color: white;
}
.button:after {
    content: "";
    background: #f1f1f1;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}
.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
select {
	margin-right: 3px;
    padding: 5px 5px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
input {
    padding: 5px 5px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
.buscar_check{
    padding-left:5px;
    padding-right:5px;
    border-radius:4px;
	margin-right: 3px;
  margin-bottom: -3px;

    -webkit-appearance:button;

    border: double 2px #000;

    background-color:#000;
    color:#FFF;
    white-space: nowrap;
    overflow:hidden;

    width:17px;
    height:17px;
}
.buscar_check:checked{
    background-color:#FFF;
    border-left-color:#000;
    border-right-color:#000;
}
.buscar_check:hover{
	box-shadow:0px 0px 10px #1300ff;
}
.w3-animate-fading{
-webkit-animation:fading 1.5s;
animation:fading 1.5s;
position: relative; 
z-index: 9999;}
@-webkit-keyframes fading{0%{opacity:0.8}100%{opacity:1}}
@keyframes fading{0%{opacity:0.8}100%{opacity:1}}

.citypar{
background-repeat: no-repeat;
	background-image: url("images/citypar.jpg");
background-size: cover;
	background-position: center;
		min-height: 100%;
/* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;

}
.empresapar{
background-repeat: no-repeat;
	background-image: url("images/empresapar.jpg");
background-size: cover;
	background-position: center;
		min-height: 100%;
/* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;

}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#home" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#empresa" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EMPRESA</a>
    <a href="#vecicles" class="w3-bar-item w3-button w3-padding-large w3-hide-small">VEÍCULOS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTATO</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#home" class="w3-bar-item w3-button w3-padding-large">HOME</a>
  <a href="#empresa" class="w3-bar-item w3-button w3-padding-large">EMPRESA</a>
  <a href="#vecicles" class="w3-bar-item w3-button w3-padding-large">VEÍCULOS</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTATO</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px" id="home">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center w3-animate-fading">
    <img src="images/slide1.jpg" style="width:100%">
    <div class="w3-display-left w3-text-white" style="padding:125px 25px;margin-left:85px;">
  	
  	<span class="w3-xxxlarge w3-center liqui  w3-hide-small princ w3-animate-left" >CarAuto</span><br>
    <span class="w3-xlarge princ w3-animate-right">Os melhores negócios da região</span><br>
    <span class="w3-xlarge w3-hide-small princ w3-animate-left">Torne seus sonhos realidade.</span><br>
<span class="liqui sec w3-animate-right">          
 *Seg à Sab das 8 ás 21hrs, Dom das 8 ás 14hrs</span><br>
<span class="w3-xxxlarge w3-hide-small w3-hide-large w3-center liqui princ " nowrap><a href="https://api.whatsapp.com/send?phone=5551985895650"><i class="fa fa-whatsapp w3-hover-opacity"></i>51 999 99 9999 </a></span>
<span class="WM-xxlarge w3-hide-medium w3-hide-large w3-center liqui princ " nowrap><a href="https://api.whatsapp.com/send?phone=5551985895650"><i class="fa fa-whatsapp w3-hover-opacity"></i>51 999 99 9999 </a></span><br>
    <span class="w3-xxlarge w3-center w3-hide-small liqui sec w3-animate-left">          <i class="fa fa-phone w3-hover-opacity w3-hide-small"></i> 0800 555 5555 </span><span class="w3-xxlarge w3-center liqui w3-hide-small sec"><br> </span>
    	<span class="w3-xxlarge w3-center w3-hide-small liqui sec w3-animate-right"> <i class="fa fa-phone w3-hover-opacity w3-hide-small" ></i> 51 5555 5555</span><br>
    
    <p style="width=100%"><a href="#about" class=" w3-button w3-white w3-margin-top w3-opacity w3-hover-opacity-off" >Conheça mais e seja um cliente</a>
	</p>

  </div> 
  </div>
  <div class="mySlides w3-display-container w3-center w3-animate-fading">
    <img src="images/slide2.jpg" style="width:100%">
    <div class="w3-display-right w3-text-white " style="padding:125px 25px;margin-right:85px;">
  	
  	<span class="w3-xxxlarge w3-center liqui  w3-hide-small princ w3-animate-left" >Os melhores<br> semi-novos.</span><br>
    <span class="w3-xlarge princ w3-animate-right">Veiculos revisados.</span><br>
    <span class="w3-xlarge w3-hide-small princ w3-animate-left">Melhor avaliação do seu usado.</span><br>
<span class="liqui sec w3-animate-right">          
 Pagamento em dinheiro em até 24horas</span><br>
<span class="w3-xxxlarge w3-hide-small w3-hide-large w3-center liqui princ " nowrap><a href="https://api.whatsapp.com/send?phone=5551985895650"><i class="fa fa-whatsapp w3-hover-opacity"></i>51 999 99 9999 </a></span>
<span class="WM-xxlarge w3-hide-medium w3-hide-large w3-center liqui princ " nowrap><a href="https://api.whatsapp.com/send?phone=5551985895650"><i class="fa fa-whatsapp w3-hover-opacity"></i>51 999 99 9999 </a></span><br>
    <span class="w3-xxlarge w3-center w3-hide-small liqui sec w3-animate-right"></i> Ligue agora </span><span class="w3-xxlarge w3-center liqui w3-hide-small sec"><br> </span>
    	<span class="w3-xxlarge w3-center w3-hide-small liqui sec w3-animate-left"> <i class="fa fa-phone w3-hover-opacity w3-hide-small" ></i> 51 5555 5555</span><br>
    
    <p style="width=100%"><a href="#about" class=" w3-button w3-white w3-margin-top w3-opacity w3-hover-opacity-off w3-animate-right" >Conheça mais e seja um cliente</a>
	</p>

  </div> 
  </div>
  <div class="mySlides w3-display-container w3-center w3-animate-fading">
    <img src="images/slide3.jpg" style="width:100%">
    <div class="w3-display-left w3-text-white" style="padding:125px 25px;margin-left:15px;">
  	
  	<span class="w3-xxxlarge w3-center liqui  w3-hide-small princ w3-animate-left" >Financiamentos<br> imperdíveis.</span><br>
    <span class="w3-xlarge princ w3-animate-right">Parcele em até 48x</span><br>
    <span class="w3-xlarge w3-hide-small princ w3-animate-left">Torne seus sonhos realidada.</span><br>
<span class="w3-xxxlarge w3-hide-small w3-hide-large w3-center liqui princ " nowrap><a href="https://api.whatsapp.com/send?phone=5551985895650"><i class="fa fa-whatsapp w3-hover-opacity"></i>51 999 99 9999 </a></span>
<span class="WM-xxlarge w3-hide-medium w3-hide-large w3-center liqui princ " nowrap><a href="https://api.whatsapp.com/send?phone=5551985895650"><i class="fa fa-whatsapp w3-hover-opacity"></i>51 999 99 9999 </a></span><br>
    <span class="w3-xxlarge w3-center w3-hide-small liqui sec w3-animate-left"></i> Consulte </span><span class="w3-xxlarge w3-center liqui w3-hide-small sec"><br> </span>
    	<span class="w3-xxlarge w3-center w3-hide-small liqui sec w3-animate-right"> <i class="fa fa-phone w3-hover-opacity w3-hide-small" ></i> 0800 555 5555</span><br>
    
    <p style="width=100%"><a href="#about" class=" w3-button w3-white w3-margin-top w3-opacity w3-hover-opacity-off w3-animate-right" >Conheça mais e seja um cliente</a>
	</p>

  </div> 
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="vecicles">

    <p class="w3-opacity"><i>Busque seu veiculo.</i></p>
<div class="form_buscar" style="padding:2px">
<select>
<option value="volvo">Todas as Marcas</option>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select><select>
<option value="volvo">Todos os Modelos</option>
</select>
<input class="buscar_check" type="checkbox" checked/>Novo 
<input class="buscar_check" type="checkbox" checked/>Semi-Novo
R$<input type="number" min="0" max="500000" step="10000" value="0">
R$<input type="number" min="10000" max="1000000" step="10000" value="1000000">
<input type="button" class="button button5" value="Buscar"/>
</div>
    <div class="w3-row w3-padding-small">
	<h2>
	<span id="typewriter" ></span>
  	<span id="cursor">|</span>
	</h2>
	<p class="w3-opacity"><i>Veja as ultimas ofertas.</i></p>
      <div class="w3-quarter w3-left w3-margin-top">
        <img src="images/corsa.jpeg" class="w3-round" alt="Random Name" style="width:180px;height:120px;">
	<div align="left"><h4 ><b>Corsa</b></h4>
	<div style="color:red">33.955.00 R$</div>
	<div>2014</div>
	</div>
      </div>
      <div class="w3-quarter w3-left w3-margin-top">
        <img src="images/voyage.jpeg" class="w3-round" alt="Random Name" style="width:180px;height:120px;">
	<div align="left"><h4 ><b>Voyage</b></h4>
	<div style="color:red">45.955.00 R$</div>
	<div>2014</div>
	</div>
      </div>
	<div class="w3-quarter w3-left w3-margin-top">
        <img src="images/punto.jpeg" class="w3-round" alt="Random Name" style="width:180px;height:120px;">
	<div align="left"><h4 ><b>Punto</b></h4>
	<div style="color:red">28.500.00 R$</div>
	<div>2013</div>
	</div>
      </div>
	<div class="w3-quarter w3-left w3-margin-top">
        <img src="images/cb300.jpeg" class="w3-round" alt="Random Name" style="width:180px;height:120px;">
	<div align="left"><h4 ><b>CB300</b></h4>
	<div style="color:red">9.450.00 R$</div>
	<div>2016</div>
	</div>
      </div>
<div class="w3-quarter w3-left w3-margin-top">
        <img src="images/ranger.jpg" class="w3-round" alt="Random Name" style="width:180px;height:120px;">
	<div align="left"><h4 ><b>Ranger XLX</b></h4>
	<div style="color:red">45.755.00 R$</div>
	<div>2015</div>
	</div>
      </div>
<div class="w3-quarter w3-left w3-margin-top">
        <img src="images/civic.jpg" class="w3-round" alt="Random Name" style="width:180px;height:120px;">
	<div align="left"><h4 ><b>Civic</b></h4>
	<div style="color:red">18.400.00 R$</div>
	<div>2008</div>
	</div>
      </div>
<div class="w3-quarter w3-left w3-margin-top">
        <img src="images/hb20.jpeg" class="w3-round" alt="Random Name" style="width:180px;height:120px;">
	<div align="left"><h4 ><b>HB20</b></h4>
	<div style="color:red">55.885.00 R$</div>
	<div>2018</div>
	</div>
      </div>
<div class="w3-quarter w3-left w3-margin-top">
        <img src="images/bmw.jpeg" class="w3-round" alt="Random Name" style="width:180px;height:120px;">
	<div align="left"><h4 ><b>320i </b></h4>
	<div style="color:red">92.990.00 R$</div>
	<div>2013</div>
	</div>
      </div>

    </div>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black empresapar" id="empresa">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">Sobre a CarAuto</h2>
      <p class="w3-opacity w3-center"><i>Conheça mais sobre nossa empresa!</i></p><br>
<div class="w3-row">
<div class="w3-container w3-half">
  <h2>Finibus Bonorum et Malorum</h2>
  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
</div>

<div class="w3-content w3-half" style="max-width:1200px">

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="images/empresa1.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="images/empresa2.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-opacity w3-hover-opacity-off" src="images/empresa3.jpeg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
    </div>
  </div>
  <img class="mySlideshow" src="images/empresa1.jpeg" style="width:100%;display:none">
  <img class="mySlideshow" src="images/empresa2.jpeg" style="width:100%">
  <img class="mySlideshow" src="images/empresa3.jpeg" style="width:100%;display:none">

</div>

    </div>
  </div>
</div>
 
  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">Contato</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Chicago, US<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
<div id="googleMap" style="height:400px;" class="w3-grayscale-max">
<img style="height:400px;" src="images/maps.png"></div>
</div>
   <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-black citypar">
<br>
    <div class="w3-container w3-content w3-row w3-padding-small">
	<h2 class="w3-wide w3-center">Comentários dos clientes.</h2>
    <p class="w3-opacity w3-center"><i>Et harum quidem rerum facilis est et expedita distinctio. !</i></p>
	<div class="w3-row">
<div class="w3-third w3-left w3-margin-top "  align="center">
        <img src="images/team1.jpg" class="w3-round" alt="Random Name" style="width:100px;height:100px;border-radius: 50%;">
	<div align="center"><h4 ><b>Renata Gonsalves</b></h4>
	"Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore <br>et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation <br>ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit <br>in voluptate velit esse cillum <br>mollit anim id est laborum."
	</div>
</div>
<div class="w3-third w3-left w3-margin-top "  align="center">
        <img src="images/team3.jpg" class="w3-round" alt="Random Name" style="width:100px;height:100px;border-radius: 50%;">
	<div align="center"><h4 ><b>Paulo Roberto</b></h4>
	"Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore <br>et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation <br>ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit <br>in voluptate velit esse cillum <br>mollit anim id est laborum."
	</div>
</div>
<div class="w3-third w3-left w3-margin-top "  align="center">
        <img src="images/team2.jpg" class="w3-round" alt="Random Name" style="width:100px;height:100px;border-radius: 50%;">
	<div align="center"><h4 ><b>João Silva</b></h4>
	"Lorem ipsum dolor sit amet, <br>consectetur adipisicing elit, <br>sed do eiusmod tempor incididunt ut labore <br>et dolore magna aliqua. <br>Ut enim ad minim veniam, quis nostrud exercitation <br>ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit <br>in voluptate velit esse cillum <br>mollit anim id est laborum."
	</div>
</div>
      </div>
</div>
<br><br>
  </div>

<!-- End Page Content -->
</div>
<!-- Add Google Maps -->


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="http://www.itwm.info" target="_blank">itwm.info</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlideshow");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}


var i = 0;
var txt = 'Bem vindo a CarAuto!!!';
var speed = 250;
var op = 1;
setTimeout(typeWriter, speed);
setTimeout(cursor, 20);
function typeWriter() {
speed = 250;
  if (i < txt.length-1) {
    document.getElementById("typewriter").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }else{
    speed = 1000;
    setTimeout(eraseWriter, speed);
  }
}
function eraseWriter() {
	speed = 250;
  if (i > 9) {
    var c = i - txt.length;
    document.getElementById("typewriter").innerHTML = txt.slice(0, c);
    i--;
    setTimeout(eraseWriter, speed);
  }else{
speed = 500;
    setTimeout(typeWriter, speed);
  }
}
function cursor() {
	switch( op ){
		case 1:
			document.getElementById("cursor").style.opacity = 1;
			op = 2;
		break;
		case 2:
			document.getElementById("cursor").style.opacity = 0.5;
			op = 3;
		break;
		case 3:
			document.getElementById("cursor").style.opacity = 0;
			op = 4;
		break;
		case 4:
			document.getElementById("cursor").style.opacity = 0.5;
			op = 1;
		break;
	
	
	}
setTimeout(cursor, 150);
}

</script>

</body>
</html>


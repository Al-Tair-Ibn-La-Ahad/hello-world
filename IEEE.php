<?php
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
		<title>Home page</title>
        <link rel="stylesheet" type="text/css" href="page.css"/>
        
</head>
<body>
<div class="head">
        <img src="clubs/ruet.png">
</div> 
<ul>
<li><a  href="home.php">  Home </a></li>  
<li><a>  Ruetian Clubs</a> 
<ul>
    <li><a href="rapl.php">RAPL</a></li>
    <li><a href="IEEE.php">IEEE Ruet</a></li>
    <li><a href="RCF.php">Ruet Career Forum</a></li>
    <li><a  href="RDC.php">Ruet Debating Club</a></li>
    <li><a href="RSC.php">Robotic Society of Ruet</a></li>
    <li><a href="psr.php">Photographic Society of Ruet</a></li>
    <li><a href="onu.php">অনুরণন</a></li>
    <li><a>সমানুপাতিক</a></li>
</ul>
</li>
<li><a>Events</a>
    <ul>
        <li><a>August</a></li>
        <li><a>September</a></li>
        <li><a>October</a></li>
    </ul>
</li>
<li><a href="blogcomment.php">Blog</a></li>
<li><a href="contact.php">  Contact us</a></li>  
</ul></br></br>

    <h1>IEEE RUET</h1>

    <div class="img" style="max-width:800px">
    <img class="mySlides" src="clubs/IEEE.jpg" style="width:100%">
    <img class="mySlides" src="clubs/IEEE2.jpg" style="width:100%">
    <img class="mySlides" src="clubs/IEEE3.jpg" style="width:100%">
    </div>
  
    <div class="button" >
      <div class="button2">
        <button class="greyButton" id="grey1" onclick="plusDivs(-1)">❮ Prev</button>
        <button class="greyButton" id="grey2" onclick="plusDivs(1)">Next ❯</button>
      </div>
      <button class="demoButton" id="red1" onclick="currentDiv(1)">1</button> 
      <button class="demoButton" id="red2" onclick="currentDiv(2)">2</button> 
      <button class="demoButton" id="red3" onclick="currentDiv(3)">3</button>
    </div>
  
  <script>
  var slideIndex = 1;
  showDivs(slideIndex);
  
  function plusDivs(n) {
    showDivs(slideIndex += n);
  }
  
  function currentDiv(n) {
    showDivs(slideIndex = n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-red", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-red";
  }
  </script>
  
    </br></br>
    <div class="cont"><h3>History of IEEE</h3>
    <p> IEEE, an association dedicated to advancing innovation and technological excellence for the benefit of humanity, is the world’s largest technical professional society. It is designed to serve professionals involved in all aspects of the electrical, electronic, and computing fields and related areas of science and technology that underlie modern civilization. IEEE’s roots go back to 1884 when electricity began to become a major influence in society. There was one major established electrical industry, the telegraph, which since the 1840s had come to connect the world with a data communications system faster than the speed of transportation. The telephone and electric power and light industries had just gotten underway.  </p>
    
    <h3>Mission statement</h3>
    <p> IEEE's core purpose is to foster technological innovation and excellence for the benefit of humanity.</p>
    
    <h3>Vision statement</h3>
    <p>EEE will be essential to the global technical community and to technical professionals everywhere, and be universally recognized for the contributions of technology and of technical professionals in improving global conditions. view the IEEE Strategic plan IEEE RUET Student Branch presents seminar on “Fellowships & Scholarships in Australia via Endeavour” on 06 May, 2017 at ETE seminar room, ECE Building, RUET. Many engineering students look forward to receive higher education in aboard at a renowned university. Australian universities are ranked highly in international outlook. Australian international education is a world leading brand. It manages the Australian Government’s engagement with other countries across the world on matters related to education. The Endeavour Scholarships and Fellowships is a project to develop on going educational, research and provide opportunities. IEEE is the world’s largest technical professional organization. It is like a shadow above the engineers by spreading a lot of benefits. Joining IEEE as a student is one of the best financial decisions you will make during your university education. IEEE RUET Student Branch is one of the most promising and vibrant student branch of IEEE Bangladesh Section. Many of you eagerly wait to join IEEE throughout the year. We are very happy to announce that the process of joining IEEE has started once again. To be a part of IEEE and a half yearly member of IEEE RUET Student Branch, you will just have to pay BDT 1250 only. Join IEEE to be a part of the great journey of it, as well as for the development of yourself for the betterment of future On 16 September 2009 IEEE RUET Student Branch was established by enthusiastic and energetic teachers and students. This student branch is continuously organizing seminars, workshops, courses on topics related to electrical and electronics.[4] This IEEE RUET Student Branch helps students by bringing professionalism to them.
    &nbsp;</br></br><strong>RUET won the IEEE Photonics GSF Award, USA in October 2009.</strong></p></div>
    
    
</body>
</html>
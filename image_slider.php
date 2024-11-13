<!DOCTYPE html> <!-- html 5 version  -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  
  <style media="screen">
  *{
margin:0px;
padding:0;
box-sizing:border-box;
}
@keyframes fade{
from{
  opacity:0.4;
}
to{
  opacity:1;
}
}



#slider{
margin:0 auto;
width:100%;
height: 500px;
overflow:hidden;
padding: 0px;
background: white;
}

.slides{
overflow:hidden;
animation-name:fade;
animation-duration:1s;
display:none;
}

.slides img{
width:100%;
height: 500px;
}

#dot{
margin:0 auto;
text-align:center;
}
.dot{
display:inline-block;
border-radius:50%;
background:#d3d3d3;
padding:8px;

}

.active{
background:black;
}

@media (max-width:567px){
#slider{
  width:100%;

}
}

#heading{
display:block;
text-align:center;
font-size:2em;
margin:10px 0px;

}
  </style>
</head>
<body>

 
  <div id="slider">
  <div class="slides">
    <img src="image/fontpage.jpg" width="100%" />
   </div>

    <div class="slides">
    <img src="image/img2.jpg" width="100%" />
  </div>

    <div class="slides">
    <img src="image/img3.jpg" width="100%" />
  </div>

     <div class="slides">
    <img src="image/img4.jpg" width="100%" />
  </div>

  <div class="slides">
    <img src="image/img5.jpg" width="100%" />
  </div>

 <div class="slides">
    <img src="image/img6.jpg" width="100%" />
  </div>

 <div class="slides">
    <img src="image/img7.jpg" width="100%" />
  </div>

    <div id="dot">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
   </div>





<script type="text/javascript">
var index = 0;
var slides = document.querySelectorAll(".slides");
var dot = document.querySelectorAll(".dot");

function changeSlide(){

  if(index<0){
    index = slides.length-1;
  }

  if(index>slides.length-1){
    index = 0;
  }

  for(let i=0;i<slides.length;i++){
    slides[i].style.display = "none";
    dot[i].classList.remove("active");
  }

  slides[index].style.display= "block";
  dot[index].classList.add("active");

  index++;

  setTimeout(changeSlide,5000);

}

changeSlide();
</script>
</body>
</html>

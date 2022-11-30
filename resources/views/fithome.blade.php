<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FitHome</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    
</head>
 <style>
html {
    scroll-behavior: smooth;
    font-family: Helvetica, sans-serif, Arial;
}

body {
    margin: 0 auto;
    background-image: url('/images/thin.gif');
    background-size: cover;
    background-repeat: no-repeat;
    
    /* background-color: #222; */
}
 .topnav {
    background-color: #F5D5AE;
    overflow: hidden;
  }
  
  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #FD841F;
    color: white;
  }
  .card {
  width: 12rem;
  cursor: pointer;
}

/*ABOUT*/
.flip-card1 {
  background-color: transparent;
  width: 190px;
  height: 254px;
  perspective: 1000px;
  font-family: sans-serif;
  left: 35px;
  position: relative;
  bottom: -120px;
  
}

.title {
  font-size: 1.5em;
  font-weight: 900;
  text-align: center;
  margin: 0;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card1:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border: 1px solid coral;
  border-radius: 1rem;
}

.flip-card-front {
  background: linear-gradient(120deg, bisque 60%, rgb(255, 231, 222) 88%,
     rgb(255, 211, 195) 40%, rgba(255, 127, 80, 0.603) 48%);
  color: coral;
}

.flip-card-back {
  background: linear-gradient(120deg, rgb(255, 174, 145) 30%, coral 88%,
     bisque 40%, rgb(255, 185, 160) 78%);
  color: white;
  transform: rotateY(180deg);
}

/*devs*/
.flip-card2 {
  background-color: transparent;
  width: 190px;
  height: 254px;
  perspective: 1000px;
  font-family: sans-serif;
  left: 20%;
  position: relative;
  bottom: 134px;
}

.title {
  font-size: 1.5em;
  font-weight: 900;
  text-align: center;
  margin: 0;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card2:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border: 1px solid coral;
  border-radius: 1rem;
}

.flip-card-front {
  background: linear-gradient(120deg, bisque 60%, rgb(255, 231, 222) 88%,
     rgb(255, 211, 195) 40%, rgba(255, 127, 80, 0.603) 48%);
  color: coral;
}

.flip-card-back {
  background: linear-gradient(120deg, rgb(255, 174, 145) 30%, coral 88%,
     bisque 40%, rgb(255, 185, 160) 78%);
  color: white;
  transform: rotateY(180deg);
}

/*contacts*/
.flip-card3 {
  background-color: transparent;
  width: 190px;
  height: 254px;
  perspective: 1000px;
  font-family: sans-serif;
  left: 38%;
  position: relative;
  bottom: 387px;
}

.title {
  font-size: 1.5em;
  font-weight: 900;
  text-align: center;
  margin: 0;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card3:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border: 1px solid coral;
  border-radius: 1rem;
}

.flip-card-front {
  background: linear-gradient(120deg, bisque 60%, rgb(255, 231, 222) 88%,
     rgb(255, 211, 195) 40%, rgba(255, 127, 80, 0.603) 48%);
  color: coral;
}

.flip-card-back {
  background: linear-gradient(120deg, rgb(255, 174, 145) 30%, coral 88%,
     bisque 40%, rgb(255, 185, 160) 78%);
  color: white;
  transform: rotateY(180deg);
}

/* WELCOME TEXT */
.text{
    font-family: Helvetica;
    font-weight: 900;
    font-size: 100px;
    position: relative;
    left: 150%;
    bottom: 250px;
}
 </style>

 <body>

<div class="topnav">
  <a class="active" href="fithome">FitHome</a>
  <a href="welcome">Talk to FitChat</a>
 
</div>

<!-- about -->
<div class="flip-card1">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">ABOUT FITCHAT</p>
            
        </div>
        <div class="flip-card-back">
            <p class="title">BACK PAGE</p>
            <p>FitChat, your personal health and lifestlye bot. You can ask anything about health and lifestyle, from effective workout plan to healthy dietary stratagem.</p>
        </div>
    </div>
</div>

<!-- devs -->
<div class="flip-card2">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">FITDEVS</p>
          
        </div>
        <div class="flip-card-back">
            <p class="title">BACK PAGE</p>
            <p>1.John Rey Tolosa <br>2.John Matthew Lirio<br> 3.JM Fuentes</p>
        </div>
    </div>
</div>

<!-- contacts -->
<div class="flip-card3">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">CONTACTS</p>
          
        </div>
        <div class="flip-card-back">
            <p class="title">BACK PAGE</p>
            <p>1.XXX <br>2.XXX<br> 3.XXX</p>
        </div>
    </div>

    <div class="text">
        <p style="color: white;">WELCOME TO<span style="color: #E14D2A;">FITCHAT</span></p>
    </div>
</div>
</body>
</html>
<?php
header('Content-type: text/css; charset:UTF-8');
?>
body{
    background-image: url("background.jpg");
    -webkit-background-size:cover;
    background-size: cover;
    background-position: center center;
  }
  @font-face {
    font-family: unbounded;
    src: url(Unbounded-VariableFont_wght.ttf);
  }
  @font-face {
    font-family: labelleaurore;
    src: url(LaBelleAurore-Regular.ttf);
  }
  header a{
      color: white;
      font-weight: 140px;
      font-family: unbounded;
      text-shadow: 3px 3px black;
      font-size: 60px;
      margin-top: 15px;
      margin-left: 10px;
      text-decoration: none;
  }
  .navbar {
    overflow: hidden;
    margin-left: 540px;
    margin-top: -50px;
  }
  .navbar a {
    float: left;
    color: white;
    font-size:18px;
    font-weight: 70px;
    font-family:"Montserrat";
    text-shadow: 2px 2px black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }
  .dropdown .dropbtn {
    font-size: 18px;
    font-weight: 70px;
    text-shadow: 2px 2px black; 
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  .navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #997300;
    border-radius:10px;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #171c24;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    color: white;
  }
  
  .dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #997300;
    border-radius:0px;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }

  .slider-container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    overflow-y: hidden;
  }
  
  .slider {
    width: 100%;
    max-width: 500px;
    height: 100%;
    margin: 40px;
    margin-left: -700px;
    text-align: center;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
  }
  
  .slides {
    display: flex;
    overflow-x: hidden;
    overflow-y:hidden;
    position: relative;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
  }
  
  .slide:nth-of-type(even) {
    background-color: rgb(250, 246, 212);
  }
  
  .slide {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
    width: 100%;
    height: 400px;
    scroll-snap-align: center;
    margin-right: 0px;
    box-sizing: border-box;
    background: white;
    transform-origin: center center;
    transform: scale(1);
  }
  
  .slide__text {
    font-size: 40px;
    font-weight: bold;
    font-family: sans-serif;
  }
  
  .slide a {
    background: none;
    border: none;
  }
  
  a.slide__prev,
  .slider::before {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    left: 5%;
  }
  
  a.slide__next,
  .slider::after {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    right: 5%;
  }
  
  .slider::before,
  .slider::after,
  .slide__prev,
  .slide__next {
    position: absolute;
    top: 48%;
    width: 35px;
    height: 35px;
    border: solid black;
    border-width: 0 4px 4px 0;
    padding: 3px;
    box-sizing: border-box;
  }
  
  .slider::before,
  .slider::after {
    content: "";
    z-index: 1;
    background: none;
    pointer-events: none;
  }
  
  .slider__nav {
    box-sizing: border-box;
    position: absolute;
    bottom: 5%;
    left: 50%;
    width: 200px;
    margin-left: -100px;
    text-align: center;
  }
  
  .slider__navlink {
    display: inline-block;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    background-color: black;
    margin: 0 10px 0 10px;
  }
  .read-article{
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 999;
    color: #000;
    background: white;
    padding: 10px 20px;
    border-radius: 10px;
    font-family: arial;
    text-decoration: none;
    box-shadow: rgb(50 50 93 / 25%) 0 0 100px -20px, rgb(0 0 0 / 30%) 0 0 60px -15px;
  }
  .read-article:hover{
    background: #d5d5d5;
    box-shadow: rgb(50 50 93 / 25%) 0 0 100px -20px, rgb(0 0 0 / 30%) 0 0 60px 0px;
}
iframe[sandbox] .read-article{
  display: none;
}
.text-container .museum-header{
    font-size:25px;
    margin-left:800px;
    margin-top: -300px;
  }
  .text-container .museum-paragraph{
    font-size:15px;
    margin-left:800px;
    margin-top: -10px;
  }
  .pages .first-line{
    margin-top:250px;
    margin-left:20px;
    border-top: 3px solid white;
    height: 500px;
    width: 500px;
  }

  .pages .second-line{
    margin-left:725px;
    margin-top:-45px;
    border-top: 3px solid white;
    width: 500px;
  }
  .pages #page-main-title{
    margin-left:530px;
    margin-top:-535px;
    font-size:28px;
    color:white;
    font-family:unbounded;
    text-shadow: 2px 2px black;
  }
  .articles li {
    background-color: #b5a77d;
    width:260px;
    height:400px;
    margin-left:10px;
    margin-top:px;
    margin-right: 20px;
    display: inline-block;
    box-shadow: 3px 3px white;
  }
  .articles li h1{
    text-align: center;
    font-size: 20px;
    font-family:labelleaurore;
    text-shadow: 1px 2px white;
  }
  .articles li p {
    margin-top:5px;
    margin-left:20px;
  }
  .articles li a{
    margin-top:200px;
    margin-left:180px;
  }
  .articles li img{
    width:230px;
    height:200px;
    margin-left:15px;
    margin-top: -8px;
    border:2px solid black;
  }
  footer{
    background:#171c24;
    margin-top: 60px;
    margin-left: -10px;
    margin-right: -10px;
    margin-bottom: -10px;

  }
  footer img{
    border-radius: 100%;
    width:30px;
    height:30px;
    margin-left:10px;
    display: inline-block;

    
  }
  .text-container{
    background-color: black;
    opacity: 0.7;
    width:500px;
    height:150px;
    margin-left:670px;
    
  }
  .text-container .museum-header{
    color:white;
    margin-left:180px;
  }
  .text-container .museum-paragraph {
    color:white;
    margin-left:40px;
    margin-top:20px;
  }
  .slider .slides img{
    width:540px;
    height: 420px;
    border-radius:50%;
  }
  .articles a {
    color: black;
    font-family: unbounded;
    font-size: 12px;
  }
  .articles a:hover {
    text-decoration: none;
    color:black;
    background-color: white;
    font-size: 12px;
    width:100px;
    font-family: unbounded;
  }
  .articles p {
    font-family: 'Times New Roman', Times, serif;
  }
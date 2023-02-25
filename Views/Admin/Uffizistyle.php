<?php
header('Content-type: text/css; charset:UTF-8');
?>
body{
    background-color: #171c24;
    background-image: url("Uffiziback.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    height: 1050px;
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
      margin-left: 520px;
      margin-top: -50px;
    }
    .navbar a {
      float: left;
      color: white;
      font-size:23px;
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
      font-size: 23px;
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

    .live-video{
        margin-top:-280px;
      }
    
      .live-video h1{
        color: white;
        font-family: unbounded;
        margin-left:60px;
        margin-top: -370px;
        text-shadow: 1px 1px rgb(78, 74, 74);
      }
      .live-video p{
        color: rgb(247, 43, 43);
        font-family: unbounded;
        font-size: 180px;
        margin-top:-205px;
    
      }
      .content{
        background-color: black;
        margin-top: 80px;
        opacity: 0.7;
        height:300px;
        width:660px;
        margin-left:590px;
        border-radius: 50%;
      }
      .content h1{
        margin-left:280px;
        font-family: labelleaurore;
        color: white;
        text-shadow: 2px 2px grey;
      }
    
      .content p{
        font-family : "Courier New";
        font-weight: 1px;
        font-size:15px;
        color:white;
        text-align:left;
        text-shadow: 0.8px 0.8px grey;
        margin-left:64px;
        margin-top:-20px;
      }
    
      .artwork{
        margin-top:500px;
      }
      .artwork h1{
        color:white;
        text-align: center;
        font-size: 50px;
        font-family: labelleaurore;
        margin-top:-180px;
        text-shadow: 4px 4px black;
      }
      .artwork hr.first-line{
        border: 3px solid white;
        width:490px;
        margin-left:20px;
        margin-top:-90px;
      }
    
      .artwork hr.second-line{
        border: 3px solid white;
        width:490px;
        margin-left:730px;
        margin-top:-8px;
      }
    
      #first-work{
        background-color:black;
        opacity: 0.7;
        width:300px;
        height:350px;
        margin-left:50px;
      }
    #first-work img{
        background-color:black;
        width:250px;
        opacity: 1;
        height:310px;
        margin-left:24px;
        margin-top:20px;
      }
      #second-work{
        background-color:black;
        opacity: 0.7;
        width:300px;
        height:350px;
        margin-left:470px;
        margin-top:-240px;
      }
      #second-work img{
        background-color:black;
        width:250px;
        height:310px;
        margin-left:22px;
        margin-top:20px;
      }
      #third-work{
        background-color:black;
        opacity: 0.7;
        width:300px;
        height:350px;
        margin-left:890px;
        margin-top: -455px;
      }
      #third-work img{
        background-color:black;
        width:250px;
        height:300px;
        margin-left:22px;
        margin-top: 20px;
      }

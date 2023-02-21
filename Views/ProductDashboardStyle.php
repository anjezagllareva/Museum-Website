<?php
header('Content-type: text/css; charset:UTF-8');
?>
body{
    background-color: #171c24;
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
      margin-left: 590px;
      margin-top: -50px;
    }
    .navbar a {
      float: left;
      color: white;
      font-size:20px;
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
      font-size: 20px;
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

    .header
    {
      color:white;
      text-align:center;
      
    }

    table tr th
    {
      color: black;
      text-shadow: 1px 1px white;
      font-size:22px;
      
    }

    td
    {
      color: black;
      font-size:18px;
      
    }

    td a 
    {
      text-decoration:none;
      color:red;
      
    }
    table{
      background:#997300;
      margin-left:150px;
      border:2px solid white;
    }
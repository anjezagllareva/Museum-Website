<?php
header('Content-type: text/css; charset:UTF-8');
?>
@font-face {
    font-family: unbounded;
    src: url(Unbounded-VariableFont_wght.ttf);
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
body{
background-color: #171c24;
font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  margin-left:140px;
}
.about-section{
  font-family:'Times New Roman', Times, serif;
  border:1px solid white;
}
.about-section p{
  font-family:'Times New Roman', Times, serif;
  font-size:18px;
}
h2{
  font-family:'Times New Roman', Times, serif;
  color:#997300;
  font-size:28px;
  text-shadow: 1px 2px  #C8C8C8;
  
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  border:2px solid #997300;
}
.card img{
  border:1px solid #997300;
  margin-left:90px;
  margin-top:10px;
}
.card p{
  color:white;
  font-family: 'Times New Roman', Times, serif;
}
.card h2{
  color:white;
  font-family: 'Times New Roman', Times, serif;
  text-shadow: 1px 3px #997300;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #997300;
  color: white;
  text-shadow: 1px 2px black;
}
.about-section h1
{
  text-shadow: 1px 3px black;
}
.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #997300;
  text-align: center;
  cursor: pointer;
  width: 100%;
  text-shadow: 1px 3px black;
  font-size:18px;
  font-family: 'Times New Roman', Times, serif;
  
}

.button:hover {
  background-color: #000;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
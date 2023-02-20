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

}
  .container{
      width: 100%;
      height: fit-content;
      padding-bottom: 70px;
      background-color: #14181f;
 }
  .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      color: white;
      transform: translate(-50%, -50%);
      font-size: 5vw;
      z-index: 1;
}
.container2{
  margin-top: -10px;
  width: 100%;
  background-color:#14181f;
  font-family: 'Open Sans', sans-serif;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  

}
.inner-container{
width: 400px;
height: 380px;
border: 2px solid black;
background-color: #2d3849;
color: white;
margin-top:-130px;
}
.form-group {
margin-bottom: 10px;
padding-bottom: 20px;
position: relative;
}
.form-group label {
display:inline-block;
margin-top: 20px;
margin-bottom: 10px;
font-size: 18px;
font-family: unbounded;
margin-left:10px;
}

.form-group-email input{
border: 2px solid #f0f0f0;
border-radius: 4px;
display: block;
font-family: inherit;
font-size: 14px;
margin-top:0px;
padding: 10px;
margin-left:10px;
width: 90%;
}

.form-group-password input{
border: 2px solid #f0f0f0;
border-radius: 4px;
display: block;
font-family: inherit;
font-size: 14px;
margin-top:0px;
padding: 10px;
margin-left: 10px;
width: 90%;
}
#login-card {
width: 400px;
border-radius: 30px;
margin: 150px auto;
height: 350px;

}

#email {
color: white;
display: block;
font-family: inherit;
font-size: 18px;
padding: 10px;
margin-top: -120px;
margin-left: 10px;
width: 300px;
font-family: unbounded;
}

#password {
color: white;
display: block;
font-family: unbounded;
font-size: 18px;
padding: 10px;
margin-top: 10px;
margin-left: 10px;
width: 300px;
}
#button{
background-color: #997300;
border: 2px solid #997300;
border-radius: 4px;
color: #fff;
display: block;
font-family: inherit;
font-size: 16px;
padding: 10px;
margin-top: 90px;
margin-left: 30px;
width: 320px;
cursor: pointer;
}
.inner-container a{
  color: white;
  font-family: unbounded;
  font-size: 13px;
  margin-left: 250px;
  
}
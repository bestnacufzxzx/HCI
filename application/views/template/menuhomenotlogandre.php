<style>
  * {box-sizing: border-box;}
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.header {
  overflow: hidden;
  background-color: #ba55d3;
  padding: 10px 10px;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 35px;
  border-radius: 4px;
}
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}


.header a:hover {
  background-color: #c71585;
  color: black;
}
.header a.active {
  background-color: #c71585;
  color: white;
}

.header-right {
  float: right;
}
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}





</style>

<body>

  <div class="header">
    <!-- <a href="home" class="logo">FakPay</a> -->
    <!-- <img src="smiley.gif" alt="Smiley face" width="50" height="42"> -->
    <a href="home"><img src="public/logo/linkedin_banner_image_1.png" width="80" height="150"  class="img-fluid rounded"> </a>
    <div class="header-right">
      <a class="active" href="home">Home</a>
    </div>
  </div>
</body>
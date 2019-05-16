<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> -->
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('public/img/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>
						<div class="wrap-input100  mb-3">
							<span class="label-input100">ชื่อผู้ใช้</span>
							<input  class="input100" type="text" id="username" name="username"  placeholder="ชื่อผู้ใช้">
						</div>
						<div class="wrap-input100  mb-2">
							<span class="label-input100">รหัสผ่าน</span>
							<input  class="input100" type="password" id="password" name="password"  placeholder="รหัสผ่าน">
						</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button onclick="checklogin()" class="login100-form-btn">
							<a href="home">Login
							</button>
						</div>
						<div class="flex-col-c p-t-155">
						<a href="register" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<!-- <div id="dropDownSelect1"></div> -->
	

	

</body>
</html>

<script>

    function checklogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if(username == "group3" && password == "1234"){
		alert("ล็อกอินสำเร็จ  "+username)
        window.location.href = 'home';

    }
    else{
        alert("ล็อกอินไม่สำเร็จ")
    }
 
}
</script>
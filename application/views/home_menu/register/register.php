<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<body class= "bg">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('public/img/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <span class="login100-form-title p-b-49">Register</span>
                    <form id="insert">

                        <div class="wrap-input100  mb-3"><i class="fas fa-user"></i>
							<label class="label-input100">Username :*</label>
							<input  class="input100" type="text" id="name" name="name"  placeholder="FakPay">
                        </div>
                        
                        <div class="wrap-input100  mb-3"><i class="fas fa-user"></i>
							<label class="label-input100">Email :*</label>
							<input  class="input100" type="email" id="email" name="email"  placeholder="FakPay@gmail.com">
                        </div>
                        
                        <div class="wrap-input100  mb-3"><i class="fas fa-user"></i>
							<label class="label-input100">Password :*</label>
							<input  class="input100" type="password" id="password" name="password"  placeholder="12345abcd">
                        </div>
                        
                        <div class="wrap-input100  mb-3"><i class="fas fa-user"></i>
							<label class="label-input100">Confirm Password :*</label>
							<input  class="input100" type="password" id="repassword" name="repassword"  placeholder="12345abcd">
                        </div>

                        <div class="wrap-input100  mb-3"><i class="fas fa-user"></i>
							<label class="label-input100">Telephone Number :*</label>
							<input  class="input100" type="tel" id="telephone" name="telephone"  placeholder="0812345678">
                        </div>

						<div class="container-login100-form-btn-s">
						<div class="wrap-login100-form-btn-s">
							<div class="login100-form-bgbtn-s"></div>
							<button onclick="checklogin()" type="insert" class="login100-form-btn-s"> Register </button>
                        </div>
                        </div>
                        <br>
                        <div class="container-login100-form-btn-canceled">
                        <div class="wrap-login100-form-btn-canceled">
							<div class="login100-form-bgbtn-canceled"></div>
							<button href="login" type="insert" class="login100-form-btn-canceled">Canceled </button>
                        </div>
                        </div>
                        
                            <!-- <button type="insert"  class="btn btn-primary"  style="float:left">ลงทะเบียน</button>
                            <a href="home"  class="btn btn-danger" role="button" style="float:right">ยกเลิก</a> -->
                    </form>
            </div>
        </div>
    </div>
</body>
</html>

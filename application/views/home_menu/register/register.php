<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('public/img/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
                    ลงทะเบียน
					</span>
					<div class="card-body">
						<form id="insert">
							<div class="form-group">
								<label >ชื่อผู้ใช้</label>
								<input  type="text" class="form-control"   placeholder="ชื่อผู้ใช้" id="name" name="name">
                            </div>
                            <div class="form-group">
								<label>อีเมล</label>
								<input type="email" class="form-control"  placeholder="อีเมล" id="email" name="email">
							</div>
							<div class="form-group">
								<label>รหัสผ่าน</label>
								<input type="password" class="form-control"  placeholder="รหัสผ่าน" id="password" name="password">
							</div>
							<div class="form-group">
								<label>ยืนยันรหัสผ่าน</label>
								<input type="password" class="form-control"  placeholder="ยืนยันรหัสผ่าน" id="repassword" name="repassword">
							</div>
							<div class="form-group">
								<label>เบอร์โทรศัพท์</label>
								<input type="text" class="form-control"  placeholder="เบอร์โทรศัพท์" id="Telephone" name="Telephone">
							</div>
								<button type="insert"  class="btn btn-primary"  style="float:left">ลงทะเบียน</button>
								<a href="home"  class="btn btn-danger" role="button" style="float:right">ยกเลิก</a>
						</form>
					</div>
				</div>
		</div>
	</section>
</body>
</html>

<script>
$("#insert").validate({
        rules: {
            name: {
                required: true
            },
            Telephone: {
                required: true,
          },
          email: {
                required: true,
          },
          password: {
                required: true,
          },
          repassword: {
                required: true,
          }
        },
        messages: {
            name: {
                required: "Please Enter Name"
            },
            Telephone: {
                required: "Please Enter Telphone",
            },
            email: {
                required: "Please Enter Email",
            },
            password: {
                    required: "Please Enter Password",
            },
            repassword: {
                    required: "Please Enter Re Password",
            }
        },
    });
    $("#insert").submit(function(){
        login();
        
        
    })
    
    function login(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        var data = {
                "repassword": $("#repassword").val()
            }
            var data2 = {
                "password": $("#password").val()
            }
            var name = {
                "name": $("#name").val()
            }
            var email = {
                "email": $("#email").val()
            }
           
            if(isValid){
                if(data.repassword !="" && data2.password != "" && name.name !="" &&email.email !=""){
                    if(data.repassword == data2.password){
                        alert("ลงทะเบียนสำเร็จ  "+name.name)
                        window.location.href = 'home';
                    }else{
                        alert("ข้อมูลไม่ถูกต้อง!!")
                    }
                }
                    
            }
    }
</script>

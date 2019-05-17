<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<body class= "bg">
	<div class="limiter">
		<div class="container-login100" style="background-image: url('public/img/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <span class="login100-form-title p-b-49">ลงทะเบียน</span>
                    <form id="insert">
                        <div class="form-group">
                            <label >ชื่อผู้ใช้</label> <i class="fas fa-user"></i>
                            <input  type="text" class="form-control"   placeholder="ชื่อผู้ใช้" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label>อีเมล</label> <i class="fas fa-envelope"></i>
                            <input  type="email" class="form-control"   placeholder="อีเมล" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label>รหัสผ่าน</label> <i class="fas fa-lock"></i>
                            <input type="password" class="form-control"  placeholder="รหัสผ่าน" id="password" name="password">
                        </div>
                        <div class="form-group">
                            <label>ยืนยันรหัสผ่าน</label> <i class="fas fa-lock"></i>
                            <input type="password" class="form-control"  placeholder="ยืนยันรหัสผ่าน" id="repassword" name="repassword">
                        </div>
                        <div class="form-group">
                            <label>เบอร์โทรศัพท์</label> <i class="fas fa-phone-square"></i>
                            <input type="text" class="form-control"  placeholder="เบอร์โทรศัพท์" id="telephone" name="telephone">
                        </div>
                            <button type="insert"  class="btn btn-primary"  style="float:left">ลงทะเบียน</button>
                            <a href="home"  class="btn btn-danger" role="button" style="float:right">ยกเลิก</a>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>

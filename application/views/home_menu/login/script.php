
<script>
	$("#insert").validate({
        rules: {
        username: {
                required: true
            },
        password: {
                required: true,
          }
        },
        messages: {
            username: {
                required: "กรุณากรอกชื่อ"
            },
            password: {
                required: "กรุณากรอกรหัสผ่าน",
            }
        },
    });
    $("#insert").submit(function(){
        login();
	})
	
    function checklogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if(username == "group3" && password == "1234"){
		alert("ล็อกอินสำเร็จ  ยินดีต้อนรับคุณ "+username)
        window.location.replace( href="home");

    }
    else{
        alert("กรุณากรอกให้ถูกต้อง")
    }
 
}
</script>
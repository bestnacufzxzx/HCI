<script>

    
$("#insert").validate({
        rules: {
            name: {
                required: true
            },
            telephone: {
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
                required: "กรุณากรอกชื่อ"
            },
            telephone: {
                required: "กรุณากรอกเบอร์โทร",
            },
            email: {
                required: "กรุณากรอกอีเมล์",
            },
            password: {
                    required: "กรุณากรอกรหัสผ่าน",
            },
            repassword: {
                    required: "กรุณากรอกรหัสผ่านอีกครั้ง",
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
                        window.location.replace( href="home");
                    }else{
                        alert("ข้อมูลไม่ถูกต้อง!!")
                    }
                }
                    
            }
    }
    </script>
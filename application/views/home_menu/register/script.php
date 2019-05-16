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
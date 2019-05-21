<style>
p.{
    color: "white"; 
    font-size:"16px";
    font-family: "Poppins-Medium";
}
</style>
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
                required: "Please enter the name."
            },
            telephone: {
                required: "Please enter the telephone.",
            },
            email: {
                required: "Please enter the email.",
            },
            password: {
                    required: "Please enter the password.",
            },
            repassword: {
                    required: "Please enter the repassword.",
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
                        alert("Successful Register  Welcome "+name.name)
                        window.location.replace( href="home");
                    }else{
                        alert("Please fill in the correct information.")
                    }
                }  
            }

    </script>



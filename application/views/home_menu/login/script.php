
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
                required: "Please enter the name."
            },
            password: {
                required: "Please enter the password.",
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
		alert("Successful login  Welcome "+username)
        window.location.replace( href="home");

    }
    else{
        alert("Please fill in the correct information.")
    }
 
}
</script>

<script>
	$("#insert").validate({
        rules: {
        password: {
                required: true,
          }
        },
        messages: {
            password: {
                required: "Please enter the password.",
            }
        },
    });
    $("#insert").submit(function(){
        login();
	})
	
    function checklogin() {
    var password = document.getElementById("password").value;
    if(password == "1234"){
		alert("Show card ")
        // window.location.replace( href="home");

    }
    else{
        alert("Please fill in the correct information.")
    }
 
}
</script>
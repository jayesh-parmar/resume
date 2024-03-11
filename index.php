<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<style>
    .box {
        width: 100%;
        max-width: 600px;
        background-color: #f9f9f9;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 16px;
        margin: 0 auto;
    }

    .msg {
        color: red;
        font-weight: 700;
    }
</style>

<body>
    <div class="container">
        <div class="table-responsive">
            <h3 align="center">Registration Form</h3><br />
            <div class="box">
                <div class="form-group">
                    <label for="name">Enter Your Name</label>
                    <input type="text" name="user_name" id="user_name" placeholder="Enter Name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">Enter Your Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="password">Enter Your Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" required class="form-control" />
                </div>
                <!-- <div class="form-group">
                    <label for="gender">Gender</label><br>
                    <input type="radio" name="gender" id="gender" value="Male" required> Male
                    <input type="radio" name="gender" id="gender" value="Female" required> Female
                </div> -->
                <div class="form-group">
                    <input type="submit" id="register" name="register" value="Submit" class="btn btn-success" />
                    <a href="login.php">Login</a>
                </div>
                <p class="msg"></p>
            </div>
        </div>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#register").on("click", function() {
            var user_name = $("#user_name").val();
            console.log(user_name);
            var email = $("#email").val();
            var password = $("#password").val();
            // var gender = $('input[type="radio"]:checked').val();
            if (user_name == '' || email == '' || password == '') {
                $(".msg").html("All fields are required!");
            }
            //  else if ($("#gender:checked").length == 0) {
            //     $(".msg").html("Gender is required!");
            // }
            else {
                $.ajax({
                    url: 'register-data.php',
                    method: 'post',
                    data: {
                        user_name: user_name,
                        email: email,
                        password: password,
                        // gender: gender
                    },
                    success: function(data) {
                        data = JSON.parse(data); // Parse the JSON response
                        if (data.status === 200) {
                            $(".msg").html(data.msg);
                            console.log("Redirecting to login.php...");
                            setTimeout(function() {
                                window.location.href = "login.php";
                            }, 500);
                        } else {
                            $(".msg").html("Error: " + data.msg);
                        }
                    }
                });
            }
        });
    });
</script>
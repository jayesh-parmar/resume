<html>

<head>
    <title>Login Form</title>
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
            <h3 align="center">Login Form</h3>
            <div class="box">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" id="login" name="login" value="Login" class="btn btn-success" />
                    <a href="index.php">Register</a>
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
        $("#login").on("click", function() {
            var email = $("#email").val();
            var password = $("#password").val();
            if (email == '' || password == '') {
                $(".msg").html("Both fields are required!");
            } else {
                $.ajax({
                    url: 'fetch-data.php',
                    method: 'post',
                    data: {
                        email: email,
                        password: password
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data['status'] == 1) {
                            $(".msg").html(data['msg']);
                            setTimeout(function() {
                                window.location.href = "dashboard.php";
                            }, 500);
                        } else {
                            $(".msg").html(data['msg']);
                        }

                    }
                });
            }
        });
    });
</script>
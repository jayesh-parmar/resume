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
            <h3 align="center">Password Change</h3><br />
            <div class="box">
                <form id="profileForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">New Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Name" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Conform Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter Name" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <input type="button" id="register" name="register" value="Submit" class="btn btn-success" />
                    </div>
                    <p class="msg"></p>
                </form>
            </div>
        </div>
    </div>
</body>


</html>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#register").on("click", function() {
            var password = $("#password").val();
            var confirm_password = $("#confirm_password").val();

            if (password == '' || confirm_password == '') {
                $(".msg").html("Both fields are required!");
            } else {
                $.ajax({
                    url: 'password.php',
                    method: 'post',
                    data: {
                        password: password,
                        confirm_password: confirm_password,
                    },
                    success: function(data) {
                        $(".msg").html(data);
                    }
                });
            }
        });
    });
</script>
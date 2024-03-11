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
            <h3 align="center">User Update</h3><br />
            <div class="box">
                <form id="profileForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" name="user_name" id="user_name" placeholder="Enter Name" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Name" required class="form-control" />
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
        // Fetch user information when the page loads
        $.ajax({
            url: 'getuser.php',
            method: 'GET',
            success: function(data) {
                var userData = JSON.parse(data);
                $("#user_name").val(userData.user_name);
                $("#email").val(userData.email);
            }
        });

        $("#register").on("click", function() {
            var user_name = $("#user_name").val();
            var email = $("#email").val();

            if (user_name == '' || email == '') {
                $(".msg").html("Both fields are required!");
            } else {
                $.ajax({
                    url: 'updateuser.php',
                    method: 'post',
                    data: {
                        user_name: user_name,
                        email: email,
                    },
                    success: function(data) {
                        $(".msg").html(data);
                    }
                });
            }
        });
    });
</script>
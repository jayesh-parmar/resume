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
            <h3 align="center">Profile Form</h3><br />
            <div class="box">
                <form id="profileForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Enter Your Profile</label>
                        <input type="text" name="profile" id="profile" placeholder="Enter Name" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Profile image</label>
                        <input type="file" name="image_path" id="image_path" placeholder="Enter Name" required class="form-control" />
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
            var profile = $("#profile").val();
            var formData = new FormData();
            formData.append("profile", profile);
            formData.append("image_path", $("#image_path")[0].files[0]);

            if (profile == '') {
                $(".msg").html(" fields are required!");
            } else {
                $.ajax({
                    url: 'profile.php',
                    method: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $(".msg").html(data);
                        // alert("data is Save");
                    }
                });
            }
        });
    });
</script>
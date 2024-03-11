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
            <h3 align="center">Project Form</h3><br />
            <div class="box">
                <div class="form-group">
                    <label for="name">Enter Your project_title</label>
                    <input type="text" name="project_title" id="project_title" placeholder="Enter Name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="role">Enter Your role</label>
                    <input type="text" name="role" id="role" placeholder="Enter role" required class="form-control" />
                </div>

                <div class="form-group">
                    <label for="project_description">Enter Your project_description</label>
                    <input type="text" name="project_description" id="project_description" placeholder="Enter role" required class="form-control" />
                </div>

                <!-- <div class="form-group">
                    <label for="gender">Gender</label><br>
                    <input type="radio" name="gender" id="gender" value="Male" required> Male
                    <input type="radio" name="gender" id="gender" value="Female" required> Female
                </div> -->
                <div class="form-group">
                    <input type="submit" id="register" name="register" value="Submit" class="btn btn-success" />
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
            var project_title = $("#project_title").val();
            console.log(project_title);
            var role = $("#role").val();
            var project_description = $("#project_description").val();
            // var gender = $('input[type="radio"]:checked').val();
            if (project_title == '' || role == '' || project_description == '') {
                $(".msg").html("All fields are required!");
            }
            //  else if ($("#gender:checked").length == 0) {
            //     $(".msg").html("Gender is required!");
            // }
            else {
                $.ajax({
                    url: 'project.php',
                    method: 'post',
                    data: {
                        project_title: project_title,
                        role: role,
                        project_description: project_description,
                        // gender: gender
                    },
                    success: function(data) {
                        $(".msg").html(data);
                        // alert("data is Save");
                    }
                });
            }
        });
    });
</script>
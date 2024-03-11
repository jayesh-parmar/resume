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
            <h3 align="center">Skill Form</h3><br />
            <div class="box">
                    <div class="form-group">
                        <label for="name">Enter Your skills</label>
                        <input type="text" name="skills" id="skills" placeholder="Enter Name" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="sub_skills">Enter Your sub_skills</label>
                        <input type="text" name="sub_skills" id="sub_skills" placeholder="Enter sub_skills" required class="form-control" />
                    </div>

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
            var skills = $("#skills").val();
            console.log(skills);
            var sub_skills = $("#sub_skills").val();
            if (skills == '' || sub_skills == '') {
                $(".msg").html("All fields are required!");
            } else {
                $.ajax({
                    url: 'skill.php',
                    method: 'post',
                    data: {
                        skills: skills,
                        sub_skills: sub_skills,
                    },
                    success: function(data) {
                        $(".msg").html(data);

                    }
                });
            }
        });
    });
</script>
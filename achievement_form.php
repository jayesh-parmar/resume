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
            <h3 align="center">Achievement</h3><br />
            <div class="box">
                <div class="form-group">
                    <label for="name">Enter Your achievement_title</label>
                    <input type="text" name="achievement_title" id="achievement_title" placeholder="Enter Name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="organization">Enter Your organization</label>
                    <input type="text" name="organization" id="organization" placeholder="Enter organization" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="achievement_description">Enter Your achievement_description</label>
                    <input type="text" name="achievement_description" id="achievement_description" placeholder="Enter organization" required class="form-control" />
                </div>
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
            var achievement_title = $("#achievement_title").val();
            console.log(achievement_title);
            var organization = $("#organization").val();
            var achievement_description = $("#achievement_description").val();
            
            if (achievement_title == '' || organization == '' || achievement_description == '') {
                $(".msg").html("All fields are required!");
            }
            else {
                $.ajax({
                    url: 'achievement.php',
                    method: 'post',
                    data: {
                        achievement_title: achievement_title,
                        organization: organization,
                        achievement_description: achievement_description,
                    },
                    success: function(data) {
                        $(".msg").html(data);
                    }
                });
            }
        });
    });
</script>
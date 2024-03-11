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
            <h3 align="center">Education Form</h3><br />
            <div class="box">
                <div class="form-group">
                    <label for="name"> Degree</label>
                    <input type="text" name="degree" id="degree" placeholder="Enter Name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="school">Enter Your school</label>
                    <input type="text" name="school" id="school" placeholder="Enter school" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="start_date">Enter Your start_date</label>
                    <input type="date" name="start_date" id="start_date" placeholder="Enter school" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="education_description">Education description</label>
                    <input type="text" name="education_description" id="education_description" placeholder="Enter school" required class="form-control" />
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
            var degree = $("#degree").val();
            console.log(degree);
            var school = $("#school").val();
            var start_date = $("#start_date").val();
            var education_description = $("#education_description").val();
            // var gender = $('input[type="radio"]:checked').val();
            if (degree == '' || school == '' || start_date == '' || education_description == '') {
                $(".msg").html("All fields are required!");
            }
            //  else if ($("#gender:checked").length == 0) {
            //     $(".msg").html("Gender is required!");
            // }
            else {
                $.ajax({
                    url: 'education.php',
                    method: 'post',
                    data: {
                        degree: degree,
                        school: school,
                        start_date: start_date,
                        education_description: education_description,
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
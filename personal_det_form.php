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
            <h3 align="center">Porsonal Detail Form</h3><br />
            <div class="box">
                <div class="form-group">
                    <label for="name">Enter birth_date</label>
                    <input type="date" name="birth_date" id="birth_date" placeholder="Enter Name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="gender">Enter Your gender</label>
                    <input type="text" name="gender" id="gender" placeholder="Enter gender" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="nationality">Enter Your nationality</label>
                    <input type="text" name="nationality" id="nationality" placeholder="Enter gender" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="hobbies">Enter Your hobbies</label>
                    <input type="text" name="hobbies" id="hobbies" placeholder="Enter gender" required class="form-control" />
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
            var birth_date = $("#birth_date").val();
            console.log(birth_date);
            var gender = $("#gender").val();
            var nationality = $("#nationality").val();
            var hobbies = $("#hobbies").val();
            // var gender = $('input[type="radio"]:checked').val();
            if (birth_date == '' || gender == '' || nationality == '' || nationality == '') {
                $(".msg").html("All fields are required!");
            }
            //  else if ($("#gender:checked").length == 0) {
            //     $(".msg").html("Gender is required!");
            // }
            else {
                $.ajax({
                    url: 'personal_det.php',
                    method: 'post',
                    data: {
                        birth_date: birth_date,
                        gender: gender,
                        nationality: nationality,
                        hobbies: hobbies,
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
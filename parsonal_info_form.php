<html>

<head>
    <title>Porsanl Information Form</title>
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
            <h3 align="center">Parsonal Information</h3><br />
            <div class="box">
                <div class="form-group">
                    <label for="name">Enter Your Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">Enter Your Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email" required class="form-control" />
                </div>

                <div class="form-group">
                    <label for="name">Enter City</label>
                    <input type="text" name="city" id="city" placeholder="Enter Name" required class="form-control" />
                </div>

                <div class="form-group">
                    <label for="name">Enter Lindn Link</label>
                    <input type="text" name="linkdn" id="linkdn" placeholder="Enter Name" required class="form-control" />
                </div>

                <div class="form-group">
                    <label for="name">Enter Github Link</label>
                    <input type="text" name="github" id="github" placeholder="Enter Name" required class="form-control" />
                </div>

                <div class="form-group">
                    <label for="name">Enter Your Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter Name" required class="form-control" />
                </div>

                <div class="form-group">
                    <label for="name">Enter Your Mobile No</label>
                    <input type="text" name="mobile" id="mobile" placeholder="Enter Name" required class="form-control" />
                </div>

                <div class="form-group">
                    <label for="name">Enter Your Country</label>
                    <input type="text" name="country" id="country" placeholder="Enter Name" required class="form-control" />
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
            var name = $("#name").val();
            var email = $("#email").val();
            var city = $("#city").val();
            var linkdn = $("#linkdn").val();
            var address = $("#address").val();
            var mobile = $("#mobile").val();
            var country = $("#country").val();
            var github = $("#github").val();

            // var gender = $('input[type="radio"]:checked').val();
            if (name == '' || email == '' || city == '' || linkdn == '' || address == '' || mobile == '' || country == '') {
                $(".msg").html("All fields are required!");
            }
            //  else if ($("#gender:checked").length == 0) {
            //     $(".msg").html("Gender is required!");
            // }
            else {
                $.ajax({
                    url: 'register_parsonal_info.php',
                    method: 'post',
                    data: {
                        name: name,
                        email: email,
                        address: address,
                        city: city,
                        linkdn: linkdn,
                        mobile: mobile,
                        country: country,
                        github: github,

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
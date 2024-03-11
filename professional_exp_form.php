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
            <h3 align="center">Profational experience Form</h3><br />
            <div class="box">
                <div class="form-group">
                    <label for="name">Enter Your Name</label>
                    <input type="text" name="job_title" id="job_title" placeholder="Enter Name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="comapany_name">Enter Your comapany_name</label>
                    <input type="text" name="comapany_name" id="comapany_name" placeholder="Enter comapany_name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="start_date">Enter Your start_date</label>
                    <input type="date" name="start_date" id="start_date" placeholder="Enter comapany_name" required class="form-control" />
                </div>
                <div class="form-group">
                    <label for="job_description">Enter Your job_description</label>
                    <input type="text" name="job_description" id="job_description" placeholder="Enter comapany_name" required class="form-control" />
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
            var job_title = $("#job_title").val();
            console.log(job_title);
            var comapany_name = $("#comapany_name").val();
            var start_date = $("#start_date").val();
            var job_description = $("#job_description").val();
            // var gender = $('input[type="radio"]:checked').val();
            if (job_title == '' || comapany_name == '' || start_date == '' || start_date == '') {
                $(".msg").html("All fields are required!");
            }
            //  else if ($("#gender:checked").length == 0) {
            //     $(".msg").html("Gender is required!");
            // }
            else {
                $.ajax({
                    url: 'professional_exp.php',
                    method: 'post',
                    data: {
                        job_title: job_title,
                        comapany_name: comapany_name,
                        start_date: start_date,
                        job_description: job_description,
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
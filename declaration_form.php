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
            <h3 align="center">Declartion Form</h3><br />
            <div class="box">
                <div class="form-group">
                    <label for="name">Enter Your Description</label>
                    <input type="text" name="declaration_text" id="declaration_text" placeholder="Enter Name" required class="form-control" />
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
            var declaration_text = $("#declaration_text").val();
            console.log(declaration_text);

            if (declaration_text == '') {
                $(".msg").html(" fields are required!");
            } else {
                $.ajax({
                    url: 'declaration.php',
                    method: 'post',
                    data: {
                        declaration_text: declaration_text,
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

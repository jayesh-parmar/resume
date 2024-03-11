<!-- <!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<!-- Bootstrap CSS v5.2.1 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody id="datas">




                </tbody>
            </table>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>


<!-- Parsonal_info -->
<!-- -------------------- -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'list.php',
            method: 'GET',
            dataType: "json",
            success: function(result) {
                // var data = result.data;
                console.log(result.data);
                $.each(result.data, function(key, value) {
                    var data = `
                            <tr class="">
                            <td scope="row">${value.user_id}</td>
                            <td>${value.user_name}</td>
                            <td>${value.email}</td>
                            <td><button type="button" class="btn btn-primary deleteBtn" data-delete="${value.user_id}">Delete</button></td>
                        </tr>
                                `;
                    $('#datas').append(data);
                });

            },

            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $(document).on("click", ".deleteBtn", function() {
        var id = $(this).data('delete');
        console.log(id);
        $.ajax({
            type: 'GET',
            data: {
                id: id,
            },
            url: "delete.php",
            success: function(response) {
                if (response.status === 200) {
                    alert(response.message);
                    location.reload();
                } else {
                    alert('Error deleting record');
                }
            }
        });
    });
</script>
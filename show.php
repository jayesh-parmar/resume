<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>API Data Table</h1>
        <table id="apiTable" class="table table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Skill ID</th>
                    <th>Skills</th>
                    <th>Sub Skills</th>
                    <th>Project ID</th>
                    <th>Project Title</th>
                    <th>Role</th>
                    <th>Project Description</th>
                    <th>Profile ID</th>
                    <th>Profile</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'showapi.php', // Assuming your API endpoint is in api.php
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var tableBody = $('#apiTable tbody');
                    $.each(data, function(index, row) {
                        var rowData = '<tr>' +
                            '<td>' + row.user_id + '</td>' +
                            '<td>' + row.user_name + '</td>' +
                            '<td>' + row.email + '</td>' +
                            '<td>' + row.password + '</td>' +
                            '<td>' + row.skill_id + '</td>' +
                            '<td>' + row.skills + '</td>' +
                            '<td>' + row.sub_skills + '</td>' +
                            '<td>' + row.project_id + '</td>' +
                            '<td>' + row.project_title + '</td>' +
                            '<td>' + row.role + '</td>' +
                            '<td>' + row.project_description + '</td>' +
                            '<td>' + row.profile_id + '</td>' +
                            '<td>' + row.profile + '</td>' +
                            '</tr>';
                        tableBody.append(rowData);
                    });
                },
                error: function() {
                    console.log('Error fetching API data.');
                }
            });
        });
    </script>
</body>

</html>
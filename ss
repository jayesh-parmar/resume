<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="form.php">Resume</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="parsonal_info_form.php">parsonal_inf</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="professional_exp_form.php">professional_exp</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile_form.php">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="education_form.php">Education</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="project_form.php">Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="skill_form.php">Skill</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="achievement_form.php">Achievement</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="personal_det_form.php">Personal detail</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="language_form.php">Language</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="declaration_form.php">Declaration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="logout.php">logout</a>
        </li>
    </ul>
</body>

</html>


<!-- 
ALTER TABLE tbl_declaration
ADD COLUMN user_id INT(10) UNSIGNED NOT NULL,
ADD INDEX fk_user_id_index (user_id);

ALTER TABLE tbl_declaration
ADD CONSTRAINT fk_user_id_tbl_declaration
FOREIGN KEY (user_id)
REFERENCES tbl_user(user_id)
ON DELETE CASCADE
ON UPDATE CASCADE; -->
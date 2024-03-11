<?php
require_once('connection.php');

$sql = "SELECT u.user_id, u.user_name, u.email, u.password,
               s.skill_id, s.skills, s.sub_skills,
               p.project_id, p.project_title, p.role, p.project_description,
               pr.profile_id, pr.profile,
               l.language_id, l.language,
               e.education_id, e.degree, e.school, e.start_date AS education_start_date, e.education_description
        FROM tbl_user u
        JOIN tbl_skill s ON u.user_id = s.user_id
        JOIN tbl_project p ON u.user_id = p.user_id
        JOIN tbl_profile pr ON u.user_id = pr.user_id
        JOIN tbl_language l ON u.user_id = l.user_id
        JOIN tbl_professional_exp px ON u.user_id = px.user_id
        JOIN tbl_education e ON u.user_id = e.user_id";



$result = $conn->query($sql);
print_r($result);
if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode(['message' => 'No results']);
}

$conn->close();
?>

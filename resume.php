<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="logo.png">
    <title>Resume</title>
</head>

<body>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font-family: 'Poppins', sans-serif;
            font-size: 12pt;
            background: rgb(249, 249, 249);
            background: radial-gradient(circle, rgba(249, 249, 249, 1) 0%, rgba(240, 232, 127, 1) 49%, rgba(246, 243, 132, 1) 100%);
            /* background-image: url(./tiles/tile23.jpg); */
            background-attachment: fixed;
        }

        * {
            margin: 0px;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {

            width: 21cm;
            min-height: 29.7cm;
            padding: 0.5cm;
            margin: 0.5cm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {


            /* height: 256mm; */


        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        * {
            transition: all .2s;
        }

        table {
            border-collapse: collapse;
        }

        .pr {
            padding-right: 30px;
        }

        .pd-table td {
            padding-right: 10px;
            padding-bottom: 3px;
            padding-top: 3px;
        }
    </style>

    <body>
        <div>
            <button class="btn btn-primary mt-3" onclick="downloadpdf()">Download PDF</button>
        </div>
        <div id="pdf">
            <div class="page">
                <div id="html-content" class="subpage">
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-center fw-bold fs-4">Resume</td>
                            </tr>
                            <tr>
                                <td class="mt-1">
                                    <!-- <img src="image.webp" alt="" height="250" width="250"> -->
                                </td>
                                <td class="personal-info zsection"></td>
                            </tr>

                            <tr class="objective-section zsection">
                                <td class="fw-bold align-top text-nowrap pr title">Career Objective</td>
                                <td class="pb-3 objective">
                                </td>
                            </tr>

                            <tr class="experience-section zsection">
                                <td class="fw-bold align-top text-nowrap pr title"> Professional Experience</td>
                                <td class="pb-3 experiences">
                                </td>
                            </tr>

                            <tr class="education-section zsection">
                                <td class="fw-bold align-top text-nowrap pr title">Education</td>
                                <td class="pb-3 education">
                                </td>
                            </tr>

                            <tr class="project-section zsection">
                                <td class="fw-bold align-top text-nowrap pr title">Projects</td>
                                <td class="pb-3 project">
                                </td>
                            </tr>

                            <tr class="skill-section zsection">
                                <td class="fw-bold align-top text-nowrap pr title">Skills</td>
                                <td class="pb-3 skill">
                                </td>
                            </tr>

                            <tr class="achievement-section zsection">
                                <td class="fw-bold align-top text-nowrap pr title">Achievement</td>
                                <td class="pb-3 achievement ">
                                </td>
                            </tr>

                            <tr class="personal-info-section zsection">
                                <td class="fw-bold align-top text-nowrap pr title">Personal Details</td>
                                <td class="pb-3">
                                    <table class="pd-table">
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td>: <span class="date-of-birth"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>: <span class="gender"></span></td>
                                        </tr>
                                        <td>Nationality</td>
                                        <td>: <span class="nationality"></span></td>
                            </tr>
                            <tr>
                                <td>Hobbies</td>
                                <td>: <span class="hobbies"></span></td>
                            </tr>
                    </table>
                    </td>
                    </tr>

                    <tr class="languages-known-section zsection">
                        <td class="fw-bold align-top text-nowrap pr title">Languages Known</td>
                        <td class="pb-3 languages">&nbsp;</td>
                    </tr>

                    <tr class="declaration-section zsection">
                        <td class="fw-bold align-top text-nowrap pr title">Declaration</td>
                        <td class="pb-5 declaration">&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="px-3"></td>
                        <td class="px-3 name text-end">prachi gohel</td>
                    </tr>
                    <hr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>    

</html>




<!-- Parsonal_info -->
<!-- -------------------- -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_parsonal_info.php',
            method: 'GET',
            success: function(result) {
                // var data = result.data;
                console.log(result.data[0].name);

                var data = `
                            <div class="fw-bold name">${result.data[0].name} </div>
                            <div>Email : <span class="email">${result.data[0].email}</span></div>
                            <div>Mobile : <span class="mobile">${result.data[0].mobile}</span></div>
                            <div>City : <span class="city">${result.data[0].city}</span></div>
                            <div>Country : <span class="country">${result.data[0].country}</span></div>
                            <div>LinkedIn : <span class="linkedIn">${result.data[0].linkdn}</span></div>
                            <div>Github : <span class="github">${result.data[0].github}</span></div>
                            <div>Address : <span class="address">${result.data[0].address}</span></div>
                            <hr>
                            `;
                $('.personal-info.zsection').append(data);
            },

            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Career Objective -->
<!-- -------------------- -->

<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_profile.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);
                var data = `
                        <span class="pb-3 objective">${result.data[0].profile}</span>
                        <hr>
                    `;
                $('.objective-section.zsection .objective').append(data);

                var image = `
                         <img src="${result.data[0].image_path}" alt="" height="250" width="250">
                        <hr>
                    `;
                $('.mt-1').append(image);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Professional Exp -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_professional_exp.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);
                var data = `
                        <div class="experience mb-2">
                            <div class="fw-bold"><span class="job_title">${result.data[0].job_title}</span></div>
                            <div class="company_name">${result.data[0].comapany_name}</div>
                            <div><span class="start_date">${result.data[0].start_date}</span> To  <span class="end_date">${result.data[0].end_date}</span></div>
                            <div class="job_description">${result.data[0].job_description}</div>
                        </div>
                        <hr>
                    `;
                $('.experience-section.zsection .experiences').append(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Education -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_education.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);
                var data = `
                        <div class="education mb-2">
                            <div class="fw-bold"><span class="degree">${result.data[0].degree}</span></div>
                            <div class="school">${result.data[0].school}</div>
                            <div><span class="s_date">${result.data[0].start_date}</span> To  <span class="e_date">${result.data[0].end_date}</span></div>
                            <div class="edu_description">${result.data[0].education_description}</div>
                        </div>
                        <hr>
                    `;
                $('.education-section.zsection .education').append(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>


<!-- Project -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_project.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);
                var data = `
                        <div class="project mb-2">
                            <div class="fw-bold"><span class="project_title">${result.data[0].project_title}</span></div>
                            <div class="role">${result.data[0].role}</div>
                            <div class="project_description">${result.data[0].project_description}</div>
                        </div>
                        <hr>
                    `;
                $('.project-section.zsection .project').append(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Skill -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_skill.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);
                var data = `
                        <div class="skill mb-2">
                            <div class="fw-bold"><span class="skill_title">${result.data[0].skills}</span></div>
                            <div class="sub_skill">${result.data[0].sub_skills}</div>
                        </div>
                        <hr>
                    `;
                $('.skill-section.zsection .skill').append(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Achievement -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_achievement.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);
                var data = `
                        <div class="achievement mb-2">
                            <div class="fw-bold"><span class="achievement_title">${result.data[0].achievement_title}</span></div>
                            <div class="organization">${result.data[0].organization}</div>
                            <div class="achievement_description">${result.data[0].achievement_description}</div>
                        </div>
                        <hr>
                    `;
                $('.achievement-section.zsection .achievement').append(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Personal_Det -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_personal_det.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);

                // Append data after each detail's corresponding td
                $('.personal-info-section.zsection .pd-table .date-of-birth').text(result.data[0].birth_date);
                $('.personal-info-section.zsection .pd-table .gender').text(result.data[0].gender);
                $('.personal-info-section.zsection .pd-table .nationality').text(result.data[0].nationality);
                $('.personal-info-section.zsection .pd-table .hobbies').text(result.data[0].hobbies);

                // Optional: Hide the empty rows
                $('.personal-info-section.zsection .pd-table tr').each(function() {
                    if ($(this).find('span').text().trim() === '') {
                        $(this).hide();
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Language -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_language.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);
                var data = `
                        <div class="pb-3 languages">${result.data[0].language}</div>
                        <hr>
                    `;
                $('.languages-known-section.zsection .languages').html(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Declaration -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_declaration.php',
            method: 'GET',
            success: function(result) {
                console.log(result.data[0]);
                var data = `
                        <div class="pb-5 declaration">${result.data[0].declaration_text}</div>
                        <hr>
                    `;
                $('.declaration-section.zsection .declaration').html(data);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>

<!-- Dowonload Pdf -->
<!-- -------------------- -->
<script>
    $(document).ready(function() {

    });
    var data = "dounload";

    function downloadpdf() {
        const invoice = this.document.getElementById("pdf");
        var opt = {
            margin: 0.2,
            filename: data + '.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        };
        html2pdf().from(invoice).set(opt).save();
    }
</script>
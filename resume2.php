<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.png">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <!-- google font ends here -->
    <!-- font awesome 6.4.2 -->
    <script src="https://kit.fontawesome.com/367f8e95b8.js" crossorigin="anonymous"></script>
    <!-- font awesome ends here -->

    <title>Your Name - Resume/CV</title>
</head>
<style>
    *,
    *::after,
    *::before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        padding: 0;
        margin: 0;
        background-color: #193549;
        font-family: "Lato", sans-serif;
        font-weight: 400;
        font-size: 16px;
    }

    img {
        max-width: 100%;
    }

    .resume-container {
        background-color: #FFFFFF;
        max-width: 900px;
        margin: 0 auto;
        display: block;
    }

    @media (min-width: 768px) {
        .resume-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
    }

    .resume-container .left-sidebar {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        background-color: #F4F4F4;
        color: #444441;
        padding: 60px 45px;
    }

    @media (min-width: 768px) {
        .resume-container .left-sidebar {
            margin-right: 45px;
        }
    }

    .resume-container .left-sidebar img {
        max-width: 200px;
        margin: 0 auto 60px;
        display: block;
        border-radius: 50%;
    }

    .resume-container .left-sidebar .heading {
        text-transform: uppercase;
        font-weight: 900;
        font-size: 1.4em;
        padding: 10px 5px;
        border-radius: 25px;
        color: #FFFFFF;
        background-color: #444440;
        text-align: center;
        margin: 40px 0 20px;
    }

    .resume-container .left-sidebar .contact {
        font-style: normal;
        font-size: 1em;
        line-height: 1.7;
        margin: 0 0 15px;
    }

    .resume-container .left-sidebar .contact i {
        color: #444441;
    }

    .resume-container .left-sidebar .course {
        font-size: 1.2em;
        font-weight: 900;
        margin-bottom: 5px;
    }

    .resume-container .left-sidebar .timeline {
        margin: 0 0 30px;
    }

    .resume-container .left-sidebar ul.skills {
        padding: 0;
    }

    .resume-container .left-sidebar ul.skills li {
        line-height: 3;
    }

    .resume-container .main-body {
        padding: 60px 30px;
        -webkit-box-flex: 2;
        -ms-flex: 2;
        flex: 2;
        color: #4C4D4F;
        background-color: #FFFFFF;
    }

    .resume-container .main-body h1 {
        font-size: 3.5em;
        font-weight: 400;
        color: #333132;
        margin: 30px 0 0;
    }

    .resume-container .main-body h1 .w900 {
        font-weight: 900;
    }

    .resume-container .main-body .designation {
        margin: 0 0 80px;
        font-size: 1.5em;
        letter-spacing: 2px;
    }

    .resume-container .main-body h2.secondary {
        text-transform: uppercase;
        color: #322D2E;
        font-size: 1.5em;
        font-weight: 900;
    }

    .resume-container .main-body h2.secondary i {
        color: #EA4335;
        font-size: 1.7em;
    }

    .resume-container .main-body .job-info {
        margin-top: 45px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #E9EBEC;
        padding: 4px 7px;
        border: 1px solid #d2d3d4;
        border-radius: 4px;
    }

    .resume-container .main-body .job-info p {
        font-size: 1.1em;
        color: #4C4D4F;
        margin: 0;
    }

    .resume-container .main-body h3 {
        color: #3D3D3E;
        font-weight: 900;
    }

    .resume-container .main-body p.job-detail {
        line-height: 1.7;
        font-size: 1em;
    }

    .resume-container .main-body .ref {
        background-color: #EA4335;
        display: block;
    }

    @media (min-width: 768px) {
        .resume-container .main-body .ref {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
    }

    .resume-container .main-body .ref .col {
        background-color: #DEE1E6;
        padding: 20px;
        border: 1px solid #ebf0f7;
    }

    .resume-container .main-body .ref .col p {
        font-size: 0.9em;
    }

    /*# sourceMappingURL=style.css.map */
</style>

<body>
    <section class="resume-container">
        <div class="left-sidebar">
            <img src="./img/headshot.jpg" alt="headshot">
            <h3 class="heading">Contact me</h3>
            <address class="contact" id="mobilen"><i class="fa-solid fa-square-phone"> </i> </address>
            <address class="contact" id="emails"><i class="fa-solid fa-square-envelope"></i> </address>
            <p class="contact" id="linkdin"><i class="fa-solid fa-square-arrow-up-right"></i> </p>
            <address class="contact" id="adds"><i class="fa-solid fa-map"></i> </address>
            <h3 class="heading">Education</h3>
            <p class="course">Course Studied University/College Details</p>
            <p class="timeline">2008 - 2010</p>
            <p class="course">Course Studied University/College Details</p>
            <p class="timeline">2011 - 2014</p>
            <p class="course">Course Studied University/College Details</p>
            <p class="timeline">2015 - 2016</p>
            <h3 class="heading">Skills</h3>
            <ul class="skills">
                <li>UI/UX Design</li>
                <li>JavaScript</li>
                <li>NodeJS</li>
                <li>Wireframes</li>
                <li>SEO</li>
                <li>Web Design</li>
                <li>WordPress</li>
            </ul>
        </div><!-- left-sidebar -->
        <main class="main-body">
            <div>
                <h1 id="names"><span class="w900"></span><br></h1>
                <p class="designation">Software Engineer</p>
                <h2 class="secondary"><i class="fa-solid fa-poo-storm"></i> Work experience</h2>
                <div class="job-info">
                    <p>Job position here</p>
                    <time>2019 - 2023</time>
                </div>
            </div>
            <h3>Company Name | Location</h3>
            <p class="job-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus natus a incidunt est dolore eum, obcaecati voluptas tenetur qui similique blanditiis sit, nobis culpa perspiciatis vero, autem accusantium ab consectetur nihil! Repudiandae consequuntur aspernatur deserunt quaerat perspiciatis blanditiis eius debitis a officiis. Enim velit minima porro! Consequuntur ut itaque magni.</p>
            <div class="job-info">
                <p>Job position here</p>
                <time>2019 - 2023</time>
            </div>
            <h3>Company Name | Location</h3>
            <p class="job-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus natus a incidunt est dolore eum, obcaecati voluptas tenetur qui similique blanditiis sit, nobis culpa perspiciatis vero, autem accusantium ab consectetur nihil! Repudiandae consequuntur aspernatur deserunt quaerat perspiciatis blanditiis eius debitis a officiis. Enim velit minima porro! Consequuntur ut itaque magni.</p>
            <div class="job-info">
                <p>Job position here</p>
                <time>2019 - 2023</time>
            </div>
            <h3>Company Name | Location</h3>
            <p class="job-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus natus a incidunt est dolore eum, obcaecati voluptas tenetur qui similique blanditiis sit, nobis culpa perspiciatis vero, autem accusantium ab consectetur nihil! Repudiandae consequuntur aspernatur deserunt quaerat perspiciatis blanditiis eius debitis a officiis. Enim velit minima porro! Consequuntur ut itaque magni.</p>
            <div class="job-info">
                <p>Job position here</p>
                <time>2019 - 2023</time>
            </div>
            <h3>Company Name | Location</h3>
            <p class="job-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus natus a incidunt est dolore eum, obcaecati voluptas tenetur qui similique blanditiis sit, nobis culpa perspiciatis vero, autem accusantium ab consectetur nihil! Repudiandae consequuntur aspernatur deserunt quaerat perspiciatis blanditiis eius debitis a officiis. Enim velit minima porro! Consequuntur ut itaque magni.</p>

            <h2 class="secondary"><i class="fa-solid fa-person-shelter"></i> References</h2>
            <div class="ref">
                <div class="col">
                    <h3>Jane Smith</h3>
                    <p>Duckduco Inc. / CEO</p>
                    <p>Phone: +123-456-7890</p>
                    <p>Email: jane@duckduco.com</p>
                </div>
                <div class="col">
                    <h3>Barak Obama</h3>
                    <p>Duckduco Inc. / CEO</p>
                    <p>Phone: +123-456-7890</p>
                    <p>Email: barak@duckduco.com</p>
                </div>
            </div>
        </main><!-- main-body -->
    </section>
</body>

</html>

<!-- Parsonal_info -->
<!-- -------------------- -->

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: 'show_parsonal_info.php',
            method: 'GET',
            success: function(result) {
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
                $('.designation').append(result.data[0].github);
                $('.w900').append(result.data[0].name);
                $('#mobilen').append(result.data[0].mobile);
                $('#emails').append(result.data[0].email);
                $('#linkdin').append(result.data[0].linkdn);
                $('#adds').append(result.data[0].address);
            },

            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
</script>
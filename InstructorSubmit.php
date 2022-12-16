<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>CvSU Syllabus</title>
    <link rel="stylesheet" href="styling/InstructorPage.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
            <img class="logo" src="img/logo.png" alt="logo" style="width: 100px;">
            <span class="logo_name">CvSU <br> Syllabus</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="InstructorPage.php">
            <i class="fa fa-home"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="InstructorAccount.php">
            <i class="fa fa-info-circle"></i>
            <span class="links_name">Account</span>
          </a>
        </li>
        <li>
          <a href="InstructorPDF.php">
            <i class="fa fa-file"></i>
            <span class="links_name">Generate PDF</span>
          </a>
        </li>
        <li>
          <a href="InstructorSubmit.php">
            <i class="fa fa-paper-plane"></i>
            <span class="links_name">Submit Syllabus</span>
          </a>
        </li>

        <li class="log_out">
          <a href="#">
            <i class="fa fa-sign-out"></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Hello, Instructor!</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search Here..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <img src="img/profile.jpg" alt="">
          <span class="admin_name">Ricky Tepora</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content">
      <section class="main">
        <div class="users">
            <div class="card">
            <div class="container">
        <div class="text-center mb-4">
            <br>
            <h3>Submit Syllabus</h3>
            <h5>In this form, you may submit your file document. Once the file has been signed, there will be automatically email sent to you.</h5>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 70vw; min-width: 300px;">
                <div class="row">

                    <div class="col">
                        <label class="form-label"> Email </label>
                        <input type ="text" class="form-control" name="email" placeholder="Jewells Hije">
                    </div>

                </div>
                <br>
                <div class="row">

                    <div class="col">
                        <label for="formFileSm" class="form-label">Upload your Syllabus Here</label>
                        <input class="form-control form-control-Sm" id="formFileLg" type="file">
                    </div>

                </div>
                <br>
                
                <div>
                    <a href="#" class="btn btn-success">Submit</a>
                </div>

            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    

       

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };

      let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
    </script>
  </body>
</html>

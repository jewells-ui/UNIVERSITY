<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>CvSU Syllabus</title>
    <link rel="stylesheet" href="styling/InstructorPage.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

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
            <br></br>
            <h2>Core Values</h2>
            <br></br>
                <p>Students are expected to live by and stand for the following University tenets: <br><b> TRUTH </b> is demonstrated by the student’s objectivity and honesty during examinations, class activities and in the development of projects.</br>  <br><b>EXCELLENCE</b> is  exhibited  by  the  students’  self-confidence,  punctuality,  diligence  and  commitment  in  the  assigned  tasks,  class performance and other course requirements. </br>  <br><b>SERVICE</b> is  manifested  by  the  students’  respect,  rapport,  fairness  and  cooperation  in  dealing  with  their  peers  and  members  of  the community. In addition, they should exhibit love and respect for nature and support for the cause of humanity.</br></p>
            <br></br>

        </div>
      </div>
        <br></br>
          <div class="slideshow-container">

                <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/CVS.png" style="width:100%">
                <div class="text">Caption Text</div>
                </div>
                
                <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/CVS.png" style="width:100%">
                <div class="text">Caption Two</div>
                </div>
                
                <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/CVS.png" style="width:100%">
                <div class="text">Caption Three</div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
            
            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            

      </section>
    </section>  
      </div>
       
    </section>

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

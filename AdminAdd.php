<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page </title>

    <link rel="stylesheet" href="styling/AdminPage.css">

    <!-- icons -->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



</head>
<body>
    
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #25963A">
    <img src="img/logo.png" alt="logo">
        CvSU Syllabus | User Login Panel
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Register User</h3>
            <h5>Kindly input the necessary information below</h5>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width: 70vw; min-width: 300px;">
                <div class="row">

                    <div class="col">
                        <label class="form-label"> Name: </label>
                        <input type ="text" class="form-control" name="name" placeholder="type your name">
                    </div>

                </div>
                <br>

                <div class="row">
                    <div class="col">
                        <label class="form-label"> Email: </label>
                        <input type ="text" class="form-control" name="email" placeholder="type your name">
                    </div>

                    <div class="col">
                        <label class="form-label"> Password: </label>
                        <input type ="text" class="form-control" name="pass" placeholder="type your password">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <br>
                    <label> Role: </label> &nbsp;&nbsp;
                    <input type="radio" class"form-check-input" name="role" id="instructor" value="Instructor">
                    <label for="instructor" class="form-input-label">Instructor</label>
                    <input type="radio" class"form-check-input" name="role" id="dean" value="Dean">
                    <label for="dean" class="form-input-label">Dean</label>
                    <input type="radio" class"form-check-input" name="role" id="chairperson" value="chairperson">
                    <label for="chairperson" class="form-input-label">Chairperson</label>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-success" name="submit"> Save </button>
                    <a href="AdminPage.php" class="btn btn-danger">Cancel</a>
                </div>

            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>
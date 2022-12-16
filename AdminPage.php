<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Page </title>

    <link rel="stylesheet" href="styling/AdminPage.css">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #25963A">
    <img src="img/logo.png" alt="logo">
        CvSU Syllabus | User Login Panel
    </nav>

    <div class="container">

        <!-- <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"> User Added Successfully! </h4>
            <p> If you want to add more User, just click the button Register. </p>
            <hr>
            <p class="mb-0">It will took a long time, but patience is a virtue.</p>
        </div> -->
        
        <a href="AdminAdd.php" class="btn btn-success mb-3"> Register New User</a>

        <br>

        <table class="table table-hover text-center">
            <thead class="table-success mb-3">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>
                        <a href="AdminEdit.php" class="link-success"> <i class="fa fa-pencil fs-5 me-3"></i></a>
                        <a href="" class="link-success"> <i class="fa fa-trash fs-5 me-3"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/employer/employer.css">
    
</head>
<body>
    <div class="row">
        <div class="col-5 bg-color-blue d-flex flex-column align-items-center justify-content-between p-5">
            <h1 class="left-title">Welcome to our<br/>community</h1>
            <img src="../img/vnw_empower_growth_logo_white.png" alt="Jobhive Logo" class="img-fluid pb-5">
        </div>
        <div class="col-7 d-flex flex-column align-items-around  px-5">
            <div class="mt-5 ">
                <h1>Sign up!</h1>
                <p class="mt-3">Welcome to the candidate registration page – w   here you can start <br/>your career journey in just a few simple steps.</p>
            </div>
 
            
            <form action="" class="d-flex flex-column ">
                <div class="form-group">
                    <label for="fullName" class="mt-3 fw-bold">Full Name</label>
                    <input
                    type="text"
                    name="fullName"
                    class="form-control mt-3 p-3"
                    placeholder="Input Full Name"
                    
                    >
                </div>

                <div class="form-group">
                    <label for="fullName" class="mt-3 fw-bold">Email Address</label>
                    <input
                        type="text"
                        name="fullName"
                        class="form-control mt-3 p-3"
                        placeholder="Input Email Address"
                        >
                </div>

                <div class="form-group">
                    <label for="fullName" class="mt-3 fw-bold">Phone Number<</label>
                    <input type="text"
                    name="fullName"
                    class="form-control mt-3 p-3"
                    placeholder="Input Phone Number"
                    >
                </div>

                <div class="form-group">
                    <label for="fullName" class="mt-3 fw-bold">Password<</label>
                    <input 
                        type="text" 
                        name="fullName" 
                        class="form-control mt-3 p-3"
                        placeholder="Input Password"
                    >
                </div>


                <div class="mt-3 row gx-2">
               <div class="col">
                    <button class="btn btn-secondary w-100 p-3 fw-bold" type="button">Cancel</button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 p-3 fw-bold" type="submit">Next</button>
                </div>
                </div>
                <p class="mt-5 text-md-center">Already have an account? Sign in here</p>

            </form>
            
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
        background-color: #f0f0f0;
    }
    </style>
    <title>Registration Form</title>
</head>

<body>

    <section> 
        <div class="container py-5 h-100 d-flex justify-content-center align-items-center">
            <div class="card card-registration my-4 bg-primary-subtle">
                <div class="row g-0">
                    <div class="col-xl-12">
                        <form action="process.php" method="post">
                            <div class="card-body p-md-5 text-black formTextStyle">
                                <h3 class="mb-5 text-uppercase formTitleStyle text-center" style="font-family: Klavika; font-size: 50px">Registration Form</h3>
                                <div class="row">
                                    <!-- Textfield for First and Lastname -->
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">First name</label>
                                            <input type="text" name="firstName" class="form-control border border-0 border-black border-bottom rounded-0 bg-primary-subtle" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label">Last name</label>
                                            <input type="text" name="lastName" class="form-control border border-0 border-black border-bottom rounded-0 bg-primary-subtle" />
                                        </div>
                                    </div>
                                </div>

                                <!-- Textfield for Email, Username, Password, and Role -->
                                <div class="form-outline mb-4">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control border border-0 border-black border-bottom rounded-0 bg-primary-subtle" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="userName"class="form-control border border-0 border-black border-bottom rounded-0 bg-primary-subtle" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="text" name="userPassword" class="form-control border border-0 border-black border-bottom rounded-0 bg-primary-subtle" />
                                </div>
                                <div class="col-md-2 mb-4">
                                    <select class="form-control select formTextStyle bg-info border border-black" name="roles" data-style="btn-primary">
                                        <option value="0">Role</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>

                                <!-- Button to Submit -->  
                                <div class="d-flex justify-content-end pt-3">
                                    <input type="submit" name="userSignup" class="btn btn-warning btn-lg buttonTextStyle" style="width: 100%">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>

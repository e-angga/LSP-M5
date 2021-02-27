<!DOCTYPE html>

<html lang="en">

<head>

  <title>Login</title>

  <!-- Mengambil file css bootstrap dari web server-->

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->

    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">

          <div class="card-body p-0">

            <!-- Membuat Card Body Bootstrap -->

            <div class="row">

              <div class="col-lg-12">

                <div class="p-5">

                  <div class="text-center">

                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1> 

                  </div>

                  <form action="login.php" method="post"> <!-- Mengirim data yang diinput ke login.php -->

                    <div class="form-group">

                      <input type="username" name="username" class="form-control form-control-user" id="exampleInputUsername" aria-describedby="usernameHelp" placeholder="Username">

                    </div>

                    <div class="form-group">

                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">

                    </div><br>

                    <input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="Login" >

                  </form>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</body>

</html>
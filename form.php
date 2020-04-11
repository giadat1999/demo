<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <title>Form Validation</title>
</head>

<body>
<div class="container">
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Click here</button>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Create an account</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-md-5">Username</div>
                      <div class="col-md-7">
                          <input type="text" id="username">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-5">Password</div>
                      <div class="col-md-7">
                          <input type="password" id="password">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-5">Email</div>
                      <div class="col-md-7">
                          <input type="text" id="email">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-5">Fullname</div>
                      <div class="col-md-7">
                          <input type="text" id="fullname">
                      </div>
                  </div>
              </div>
              <div class="alert alert-danger d-none">

              </div>
              <div class="alert alert-success d-none">

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" id="register-btn">Sign up</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
    </div>
</div>
</body>
</html>
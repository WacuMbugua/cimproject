<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     
    </ul>
  </div>
</nav>
<nav aria-label="desktop-navigation">
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#">Private</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Cash Managament</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Asset Management</a>
  </li>
</ul>
</nav>

</header>
<hr>
<body>
    <div class="fluid">
        <div class="row">
        <div class="col-md-6">
        <form action=" " method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Client Code</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Start Date</label>
    <input type="date" class="form-control" id="inputStartdate">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Address</label>
      <input type="text" class="form-control" id="inputAddress">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Region</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Postal Code</label>
      <input type="text" class="form-control" id="inputPosstalcode">
    </div>
  </div>
  <div class="form-group">
  </div>
  <button type="submit" class="btn btn-success w-50 float-right">Create</button>
</form>
        </div>
        <div class="col-md-6">
        <table class="table" table-striped table-hover>
            <tr>
                <th >Name</th>
                <th >Email</th>
                <th >Client Code</th>
                <th >Start Date</th>
            </tr>
            <tr>
            
            </tr>
        </div>
        
        </div>
    </div>
</body>
</html>
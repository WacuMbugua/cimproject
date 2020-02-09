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
    <a class="navbar-brand" href="#">Cytonn Investments Manager</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Open Account <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign In</a>
      </li>
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
<body>

    <h1 class="text-centre display-4">What is my investment return?</h1>

    <div class="container">             
            
    <script type="text/javascript">
                
                var principal = 0;
            var interestRate = 0;
            var timesCompounded = 0;
            var termOfLoan = 0;
            var amount = 0;

            function simpleInterest() {
            event.preventDefault();
            var principal = parseFloat(document.getElementById("principalSimple").value);
            var interestRate = parseFloat(document.getElementById("interestSimple").value);
            interestRate = interestRate / 100;
            var termOfLoan = parseFloat(document.getElementById("termSimple").value);
            var simpleInt = principal * interestRate * termOfLoan;
            var amount = (principal + simpleInt).toFixed(2);
            document.getElementById("siOutput-01").innerHTML = "Interest: Kshs." + simpleInt.toFixed(2);
            document.getElementById("siOutput-02").innerHTML = "Total plus interest: Kshs." + amount;
}
    </script>
    <div class="jumbotron">
  <h1 class="text-center display-4">Investment Yield</h1>
  <div class="form-group col-md-4">
      <label for="inputproduct">Investment Product</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>     <!-- should list the cytonn products-->
        <option>...</option>
      </select>
    </div>
  <hr>
  <div class="container" id="simple-interest">
         <p> Enter your values to see your monthly payment, and grand total, and interest paid. </p>
    <hr>
    <form id="siForm">
      <div class="form-group">
        <label for="principalSimple">Principal</label>
        <input type="text" class="form-control" id="principalSimple" placeholder="Enter amount">
      </div>
      <div class="form-group">
        <label for="interestSimple">Interest Rate</label>
        <input type="text" class="form-control" id="interestSimple" placeholder="Example: 12%"> <!-- to be dependent on the investment product chosen-->
      </div>
      <div class="form-group">
        <label for="termSimple">Term of Loan</label>
        <input type="text" class="form-control" id="termSimple" placeholder="Example: 2 (must be in terms of years)">
      </div>
      <button type="submit" class="btn btn-primary" id="btnSimple" onclick="simpleInterest()">Submit</button>
    </form>
    <div>
      <p class="lead mt-3" id="siOutput-01"></p>
      <p class="lead mb-3" id="siOutput-02"></p>
    </div>
    <div class="text-center">
      <input class="btn btn-secondary btn-lg" type="button" value="Reset" onClick="document.getElementById('siForm').reset()">
    </div>
  </div>
    <footer>
    <div class="top-row" style="height: 50px; background-color=black"></div>
    </footer>
</body>
</html>

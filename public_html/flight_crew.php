<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Trip to Space</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css">
 

</head>

<body>

<?php include '../resources/navigation.php'; ?>

  <div class="container">

    <div class="jumbotron">

      <h1 class="display-4">Meet The Crew</h1> <img style="float: right;" alt="Star" src="img/star.png"/>
<div style="clear: right">
</div> 



      <p class="lead">Spaceship Designers</p>
       <table class="table">
      <thead class="thead-dark">
  
        <tr>
          <th>First name</th>
          <th>Last name</th> 
          <th>Age</th>
        </tr>
        </thead>
        <tr>
         
          <td>Ean</td>
          <td>Warrick</td> 
          <td>18</td>
        </tr>
        <tr>
        
          <td>Ahmed</td>
          <td>Musa</td>
          <td>20</td>
        </tr>
        <tr>
        
      
          <td>Oleg</td>
          <td>Nochvey</td>
          <td>21</td>
        </tr>
      </table>
      
      <br>
      <p class="lead"><em>Flight Crew</em></p>
          <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>First name</th>
          <th>Last name</th> 
          <th>Age</th>
        </tr>
        </thead>
        <tr>
          <td>John</td>
          <td>Doe</td>
          <td>24</td>
        </tr>
        <tr>
          <td>Jane</td>
          <td>Doe</td>
          <td>30</td>
        </tr>
        <tr>
          <td>Jimothy</td>
          <td>Williams</td>
          <td>35</td>
        </tr>
      </table>
    </div>

    <p>Want to be part of the NASE team? Sign 
    up for job applications! We'll send you 
    the jobs that are available!</p>
      <div class="form-row">
        <div class="form-group col-3">
          <label class="col-form-label" for="Firstname">First Name</label>
          <input type="text" class="form-control" placeholder="First Name" id="Firstname">
        </div>
        <div class="form-group col-3">
          <label class="col-form-label" for="Lastname">Last Name</label>
          <input type="text" class="form-control" placeholder="Last Name" id="Lastname">
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-6">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll probably never share your email with anyone else.</small>
      </div>
    </div>
    <button type="button" class="btn btn-outline-primary">Submit</button>

    <hr>
     <?php include '../resources/footer.php'; ?>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>

<html lang="en">

<head> 
    <meta charset="utf-8">
    <title>Trip to Space!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css">


    </style>
</head>

<body>
<?php include '../resources/navigation.php'; ?>


    <div class="container">
      <div class="form-row">
        <div class="col-6">
      <h1><em>Trip Information</em></h1>
            <p>Please Introduce yourself:</p>
          <div class="form-group col-8">
            <label class="col-form-label" for="inputDefault">First Name</label>
            <input type="text" class="form-control" placeholder="First Name" id="inputDefault">
          </div>
          <div class="form-group col-8">
            <label class="col-form-label" for="inputDefault">Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" id="inputDefault">
          </div>
        </div>
        <div class="col-6">
         <img src="img/nase.png" alt="NASE"> 
        </div>
      </div>
      
    	
          <p>Welcome to NASE! Our names are Oleg Nochvay, Ean Warrick, Ahmed Musa. 
          We are the creators and pilots of the upcoming Space ship "Web Developer Spaceship".</p>
    	
          <p>The "Web Developer Spaceship" is one of the spaceships of the prestigious space company called
          "National Association of Space Expedition" (NASE) that was founded in 1970.</p>
      
      <p>The "Web Developer Spaceship" expected take off date is September 1, 2020.</p>

      <div class="alert alert-primary alert-dismissible fade show" role="alert">
      <strong>Hey there!</strong> Did you leave the oven on? Also, this site uses cookies.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

      <hr>
     <?php include '../resources/footer.php'; ?>
    </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

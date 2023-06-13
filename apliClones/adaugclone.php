<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Adaug eveniment</title>
  </head>
  <body>
    <div class="container  mt-5" style="max-width:800px;">
      <h2>Adăugare eveniment nou</h2>
      
        <section id="formular" class="mt-3">
          <form action="formulare/adaugclone.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="imagine" class="col-sm-3 col-form-label">Selectați imaginea (600x400 px):</label>
                  <div class="col-sm-4 input-group mb-2">
                    <input type="file" name="imagine" id="imagine">
                  </div>
                </div>
        
                <div class="form-group row">
                  <label for="nume" class="col-sm-3 col-form-label">Nume:</label>
                  <div class="col-sm-9 input-group mb-2">
                    <input type="text" class="form-control" name="nume" id="nume">
                  </div>
                </div>
        
                <div class="form-group row">
                  <label for="numerotare" class="col-sm-3 col-form-label">Numerotare:</label>
                  <div class="col-sm-9 input-group mb-2">
                    <input type="text" class="form-control" name="numerotare" id="numerotare">
                  </div>
                </div>
        
                <div class="form-group row">
                  <label for="prezentare" class="col-sm-3 col-form-label">Prezentare:</label>
                  <div class="col-sm-9 input-group mb-2">
                    <textarea class="form-control" name="prezentare" id="prezentare" rows="3"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mx-auto d-block">Înregistrează!</button>
          </form>
        </section>
      
    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html> 
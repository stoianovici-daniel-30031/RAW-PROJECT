<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Delete Clone</title>
</head>
<body>
  <div class="container mt-5" style="max-width:800px;">
    <h2>Delete Clone</h2>

    <?php
      // Database connection
      $cnx = mysqli_connect("localhost", "root", "", "clone");
      if (!$cnx) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch clones from the database
      $selectQuery = "SELECT id, nume FROM clones";
      $result = mysqli_query($cnx, $selectQuery);

      if (!$result) {
        die("Error fetching clones: " . mysqli_error($cnx));
      }
    ?>

    <?php if (isset($cloneId) && isset($cloneName)): ?>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Confirm Deletion</h5>
          <p class="card-text">You are about to delete the following clone:</p>
          <p class="card-text"><strong>ID:</strong> <?php echo $cloneId; ?></p>
          <p class="card-text"><strong>Name:</strong> <?php echo $cloneName; ?></p>
          <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $cloneId; ?>">
            <button type="submit" name="confirm" class="btn btn-danger">Confirm Delete</button>
            <a href="formulare/adaugclone.php" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    <?php else: ?>
      <form action="formulare/deleteclone.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this clone?')">
        <div class="form-group">
          <label for="id">Select the Clone to Delete:</label>
          <select class="form-control" id="id" name="id" required>
            <option value="">Select Clone</option>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
              <option value="<?php echo $row['id']; ?>"><?php echo $row['id'] . ' - ' . $row['nume']; ?></option>
            <?php endwhile; ?>
          </select>
        </div>
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    <?php endif; ?>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KyZXEAg3QhqLMpG8r+8fFScvbGUY8bupyyL2fy51aG803pNEf/yD2jcqC5iSnDn6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
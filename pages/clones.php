<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clones</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body id="clones-page">
    <div class="container">

    <?php include '../conect.php'; 
        //  Creez multimea de selectie
        $interogare = "SELECT * from clones";
        $clns = mysqli_query($cnx, $interogare) or die("Eroare: " . mysqli_error($cnx));
        ?>
        <?php while($articol = mysqli_fetch_assoc($clns)): ?>

        <div class="box">
            <h2><?= $articol['numerotare'] ?> <br><?= $articol['nume'] ?></h2>
            <img src="../images/<?= $articol['imagine'] ?>" alt="Commander Appo">
            <p><?= $articol['prezentare'] ?></p>
          </div>
          <?php endwhile; ?>
          <?php while($articol = mysqli_fetch_assoc($clns)): ?>

    <div class="box">
        <h2><?= $articol['numerotare'] ?><br><?= $articol['nume'] ?></h2>
        <img src="../images/<?= $articol['imagine'] ?>" alt="Captain Rex">
        <p><?= $articol['prezentare'] ?></p>
      </div>
      <?php endwhile; ?>
      <?php while($articol = mysqli_fetch_assoc($clns)): ?>

      <div class="box">
        <h2><?= $articol['numerotare'] ?><br><?= $articol['nume'] ?></h2>
        <img src="../images/<?= $articol['imagine'] ?>" alt="Captain Vaughn">
        <p><?= $articol['prezentare'] ?></p>
      </div>
      <?php endwhile; ?>
      <?php while($articol = mysqli_fetch_assoc($clns)): ?>

      <div class="box">
        <h2><?= $articol['numerotare'] ?><br><?= $articol['nume'] ?></h2>
        <img src="../images/<?= $articol['imagine'] ?>" alt="Lieutenant Jesse">
        <p><?= $articol['prezentare'] ?></p>
      </div>
      <?php endwhile; ?>
      <?php while($articol = mysqli_fetch_assoc($clns)): ?>
        
      <div class="box">
        <h2><?= $articol['numerotare'] ?><br><?= $articol['nume'] ?></h2>
        <img src="../images/<?= $articol['imagine'] ?>" alt="Lieutenant Hawk">
        <p><?= $articol['prezentare'] ?></p>
      </div>
      <?php endwhile; ?>

      
    </div>
</body>
</html>
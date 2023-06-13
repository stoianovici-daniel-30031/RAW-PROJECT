<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clones</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body id="main-page">
    
    
 
  <div class="slide-container">
    <div class="slide">
      <!-- Content for the first slide option -->
      <img src="images/clone.png" alt="Clone trooper" class="enlarge-image" width="500" height="200">
      <a href="pages/clones.php"><h2>CLONES</h2></a>
      
    </div>
    <div class="slide">
      <!-- Content for the second slide option -->
      <a href="pages/bountyhunters.php"><h2>BOUNTY HUNTERS</h2></a>
      <img src="images/bountyhunters.png" alt="Bounty Hunters" class="enlarge-image" width="500" height="200">
    </div>
    
    <div class="slide">
      <!-- Content for the third slide option -->
      <a href="pages/fanclones.php"><h2>FAN-CLONES</h2></a>
      <img src="images/fanclones.png" alt="Fan clones" class="enlarge-image" width="500" height="200">
    </div>
  </div>

  <audio id="bg-music" loop>
    <source src="audio/VodenAn.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>

  <!-- Music control button -->
  <button id="toggle-music" alt="Republic Commando music" onclick="toggleMusic()">Toggle Music</button>
  <script src="js/script.js"></script>
  
</body>
</html>
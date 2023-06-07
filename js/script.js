// script.js
function toggleMusic() {
    var music = document.getElementById('bg-music');
    var button = document.getElementById('toggle-music');
  
    if (music.paused) {
      music.play();
      button.innerHTML = 'Turn Off Music';
    } else {
      music.pause();
      button.innerHTML = 'Turn On Music';
    }
  }
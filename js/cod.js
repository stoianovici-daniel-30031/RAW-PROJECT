function toggleAudio() {
    var audio = document.getElementById("myAudio");
    if (audio.paused) {
      audio.muted = false; // Unmute the audio
      audio.play();
    } else {
      audio.muted = true; // Mute the audio
      audio.pause();
    }
  }
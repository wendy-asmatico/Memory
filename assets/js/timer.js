// timer.js
document.addEventListener("DOMContentLoaded", () => {
window.start = Date.now();

  setInterval(() => {
    let elapsed = Date.now() - start;
    let minutes = Math.floor(elapsed / 60000);
    let seconds = Math.floor((elapsed % 60000) / 1000);

    document.getElementById("timer").textContent =
      String(minutes).padStart(2,'0') + ":" +
      String(seconds).padStart(2,'0');
  }, 1000);
});

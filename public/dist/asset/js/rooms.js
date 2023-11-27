// JavaScript to toggle room details
for (let i = 1; i <= 6; i++) {
    const roomBtn = document.getElementById(`showDetails${i}`);
    const roomDetails = document.getElementById(`roomdetailsshow${i}`);
    roomDetails.style.display = "none";

    roomBtn.addEventListener("click", function () {
      if (roomDetails.style.display === "none" || roomDetails.style.display === "") {
        roomDetails.style.display = "block";
      } else {
        roomDetails.style.display = "none";
      }
    });
  }
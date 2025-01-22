const attackBtn = document.querySelector("#attackBtn");
let heroImg = document.querySelector(".hero");
let goblinImg = document.querySelector(".goblin");

attackBtn.addEventListener("click", handleAttack);

function handleAttack(event) {
  heroImg.classList.add("hero-containerHit");
  goblinImg.classList.add("monster-containerHit");
  heroImg.classList.remove("hero");
  goblinImg.classList.remove("goblin");
  setTimeout(() => {
    heroImg.classList.add("hero");
    goblinImg.classList.add("goblin");
    heroImg.classList.remove("hero-containerHit");
    goblinImg.classList.remove("monster-containerHit");
  }, 100);

  $.ajax({
    url: "../process/fight-process.php",
    method: "POST",
    success: function (result) {
      // Assuming the result contains the updated health values
      const data = JSON.parse(result);
      document.querySelector(".heroPv").textContent = data.heroHealth + "PV";
      document.querySelector(
        ".monster-container h2:nth-of-type(2)"
      ).textContent = data.monsterHealth + "PV";
    },
    error: function (xhr, status, error) {
      console.error("AJAX Error: ", status, error);
    },
  });
}

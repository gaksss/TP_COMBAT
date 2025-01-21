const attackBtn = document.querySelector("#attackBtn");
let heroImg = document.querySelector(".hero");
let goblinImg = document.querySelector(".goblin");

attackBtn.addEventListener("click", handleAttack);

function handleAttack(event) {
  heroImg.classList.add("hero-containerHit");
  goblinImg.classList.add("monster-containerHit");
  heroImg.classList.remove("hero");
  goblinImg.classList.remove("goblin");

  fetch("../src/Mappers/HeroMapper.php")
    .then((response) => {
      if (!response.ok) {
        throw new Error("Erreur dans la requête");
      }
      return response.json();
    })
    .then((data) => {
      document.querySelector("#heroPv").innerHTML = `${data.health}`;

    })
    .catch((error) => {
      console.error("Erreur :", error);
    });
}

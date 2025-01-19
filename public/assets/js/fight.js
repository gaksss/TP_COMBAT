let heroHp = document.querySelector("#heroHp");
let monsterAd = document.querySelector("#monsterAd");
let monsterHp = document.querySelector("#monsterHp");
const attackButton = document.querySelector("#attackButton");

attackButton.addEventListener("click", handleAttack);

function handleAttack(event) {
  // Partie qui fait des dégats aléatoires au monstre
  let monsterHpStr = monsterHp.textContent;
  let first2MonsterHp = parseInt(monsterHpStr.slice(0, 2), 10);
  let randomHeroAd = Math.floor(Math.random() * 20);

  if (first2MonsterHp > 0) {
    first2MonsterHp = Math.max(first2MonsterHp - randomHeroAd, 0); // Ensure it doesn't go below 0
    monsterHp.textContent = first2MonsterHp + monsterHpStr.slice(2); // Update the text content
  }

  // Partie de la fonction qui récupère l'ad du monstre

  let monsterAdStr = monsterAd.textContent;
  let first2MonsterAdStr = parseInt(monsterAdStr.slice(0, 2), 10);

  // Partie de la fonction qui fait perdre des HP au hero quand il attaque

  let heroHpStr = heroHp.textContent;
  let first2HeroHp = parseInt(heroHpStr.slice(0, 2), 10);
  console.log(randomHeroAd);
  if (first2HeroHp > 0) {
    first2HeroHp = Math.max(first2HeroHp - first2MonsterAdStr, 0); // Ensure it doesn't go below 0
    heroHp.textContent = first2HeroHp + heroHpStr.slice(2); // Update the text content

    // Si les PV du monstre tombent a 0: stop combat

    if (first2MonsterHp <= 0) {
      console.log("Fini");
      attackButton.setAttribute("disabled", "disabled");
      setTimeout(() => {
        alert("Le HERO a gagné");
        let win = 1;
        JSON.parse(win);
      }, 2);
    } else if (first2HeroHp <= 0) {
      console.log("Fini");
      attackButton.setAttribute("disabled", "disabled");
      setTimeout(() => {
        alert("Le HERO a perdu");
      }, 2);
    }
  }
}

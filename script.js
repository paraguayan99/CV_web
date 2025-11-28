// Retour en haut de la page avec un effet smooth pour une meilleure fluidité

document.getElementById("btnBackToTop").addEventListener("click", defilementHaut);

function defilementHaut () {
    window.scroll({
        top: 0,
        left: 0,
        behavior: "smooth",
      });
    document.getElementById("backToTop").classList.add("hidden");
}

// Fait apparaitre l'icone Retour en haut de page au scroll et efface cette icone si l'utilisateur revient tout seul en haut de la page

document.addEventListener("scroll", btnVisible);

function btnVisible () {
    document.getElementById("backToTop").classList.remove("hidden");
    if(window.scrollY == 0) {
        document.getElementById("backToTop").classList.add("hidden");
    }
}

// Animations opacité au scroll

const threshold = .1
const options = {
  root: null,
  rootMargin: '0px',
  threshold
}

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > threshold) {
      entry.target.classList.remove('reveal')
      observer.unobserve(entry.target)
    }
  })
}

document.documentElement.classList.add('reveal-loaded')

window.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(handleIntersect, options)
  const targets = document.querySelectorAll('.reveal')
  targets.forEach(function (target) {
    observer.observe(target)
  })
})

// Vérification de la saisie du mail au moment de la soumission

function verifMail() {
    var regExp = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    var mail = document.getElementById("sendmail").value;
    if (regExp.test(mail)) {
        return true;
    } else {
        document.getElementById("errormail").classList.remove("hidden");
        return false;
    }
}

// Après traitement.php > Test de la présence des messages de succès ou erreur dans les div avec id=sendtrue/false et faire revenir l'utilisateur en bas de page

if (document.getElementById("sendtrue")){
  window.scrollTo({
  top: document.body.scrollHeight,
  behavior: 'auto'});
}

if (document.getElementById("sendfalse")){
  window.scrollTo({
  top: document.body.scrollHeight,
  behavior: 'auto'});
}

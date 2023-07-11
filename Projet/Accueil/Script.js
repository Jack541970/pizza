// ---------------------------Navbar

// menu on of

const nav = document.querySelector(".headeranim")
const Promos = document.querySelectorAll(".promojs")
const TPizz = document.querySelector(".nosPizza")
const btnChoix = document.querySelectorAll(".b")
const rechercher = document.querySelector('#Rechercher');
const recherchertxt = document.querySelector('#Recherchert');
const recherchertxtc = document.querySelector('.innav');


window.addEventListener('scroll', () => {
  console.log(window.scrollY);
  
  if (window.scrollY > 120) {
    nav.style.top = 0;
    nav.style.transition = "all 1s ease-in-out"
  }
  
  else{
    nav.style.top = "-124px";
    nav.style.transition = "all 1s ease-in-out"
  }
});


// ---------------------------PROMOTIONS------------------------------
//faire un foreach quand on a plusieur element il se comporte comme une liste
// ne pas faire ce qui est en comentaire en dessous
Promos.forEach((promojs) => {
  promojs.addEventListener('mouseover', (e) =>{
   e.target.style.transform = "scale(110%)";
  //  e.stopPropagation();
  })
});
// window.addEventListener('mouseover', () => {
// console.log(Promos)
// })

Promos.forEach((promojs) => {
  promojs.addEventListener('mouseout', (e) =>{
   e.target.style.transform = "scale(100%)";
  })
});

// ---------------------------NOS PIZZAS------------------------------

TPizz.addEventListener('mouseover', (e) => {
  if (window.scrollY > 1000) {
    TPizz.style.top = 0;
    TPizz.style.transition = "all 1s ease-in-out infinite"
  }
  
  else{
    
    TPizz.style.top = "-124px";
    TPizz.style.transition = "all 1s ease-in-out infinite" 

  }})

  // ---------------------------bouttons------------------------------
  btnChoix.forEach((b) => {
    b.addEventListener('mouseover', (e) =>{
     e.target.style.transform = "scale(120%)";
     e.target.style.background = "#C00A27"
     e.target.style.color = "#f1f1f1"
    })
  });

  btnChoix.forEach((b) => {
    b.addEventListener('mouseout', (e) =>{
     e.target.style.transform = "scale(100%)";
     e.target.style.background = "#f1f1f1"
     e.target.style.color = "rgb(75, 75, 75)"
    })
  });

// ---------------------------RECHERCHER------------------------------

rechercher.addEventListener('click', () => {
  rechercher.style.display = "none";
  recherchertxt.style.display = "flex";

});
// Ajouter un écouteur d'événement pour l'événement "input"
recherchertxt.addEventListener('input', searchArticle);

// Fonction de recherche
function searchArticle() {
  const searchValue  = recherchertxt.value.toLowerCase(); // Convertir en minuscules pour une correspondance insensible à la casse

  // Parcourir tous les articles
  const articles = document.getElementsByClassName('ChoixPizza');
  for (let i = 0; i < articles.length; i++) {
      const article = articles[i];
      // Récupérer le nom de l'article dans la classe 'Npizz'
      const articleName = article.getElementsByClassName('Npizz')[0].textContent.toLowerCase();

        // Vérifier si le nom de l'article correspond à la valeur de recherche
      if (articleName.includes(searchValue)) {
        article.style.display = ''; // A-fficher l'article s'il correspond à la recherche
      } else {
        article.style.display = 'none'; // Masquer l'article s'il ne correspond pas à la recherche
      }
  }
}

// --------------------------------------------------------------

window.addEventListener("load", load);

function load() {
  document.getElementById("container-loader").style.opacity = 0;
  document.getElementById("container-loader").style.visibility = "hidden";
}

[].forEach.call(document.getElementsByTagName("a"), function (el) {
  el.addEventListener("click", function (event) {
    if (event.target.getAttribute("target") != "_blank" && event.target.getAttribute("target") != null) {
      event.preventDefault();
      document.getElementById("container-loader").style.opacity = 1;
      document.getElementById("container-loader").style.visibility = "visible";
      // //detect which page has been selected
      let newPage = el.getAttribute("href");


      setTimeout(function () {
        window.location.href = newPage;
      }, 500);


    }
  });
});



/////////////
// SMOOTH SCROLL 
/////////////

const lenis = new Lenis({
  duration: 2, // Durée en secondes
})


function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

//////////
// REVEAL
//////////
const ratio = 0.2;
let options = {
  root: null,
  rootMargin: "0px",
  threshold: ratio,
};

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.remove("reveal");
      observer.unobserve(entry.target);
    }
  });
};

document.documentElement.classList.add("reveal-loaded");
window.addEventListener("DOMContentLoaded", function () {
  let observer = new IntersectionObserver(handleIntersect, options);

  document.querySelectorAll(".reveal").forEach(function (r) {
    observer.observe(r);
  });
});

// REVEAL IMAGES
const sectionsParent = document.querySelectorAll('.reveal-parent');

const removeOverlay = (overlay) => {
  let tl = gsap.timeline();

  tl.from(overlay, {
    duration: 1.4,
    ease: "Power2.easeInOut",
    width: "calc(100% + 6px)",
  });

  return tl;
};

const scaleInImage = (image, outline) => {
  let tl = gsap.timeline();

  tl.from(image, {
    duration: 1.4,
    scale: 1.4,
    ease: "Power2.easeInOut",
  }).from(outline, {
    top: "0",
    left: "0",
    ease: "Power2.easeInOut",
  });

  return tl;
};
sectionsParent.forEach(sectionParent => {

  const images = sectionParent.querySelectorAll(".img-container");

  images.forEach((image) => {
    gsap.set(image, {
      visibility: "visible",

    });

    const overlay = image.querySelector(".img-overlay");
    const img = image.querySelector("img");
    const outline = image.querySelector(".img-outline");



    const masterTL = gsap.timeline({ paused: true });
    // if (innerWidth > 991) {
    masterTL.add(removeOverlay(overlay)).add(scaleInImage(img, outline), "-=1.4");
    // }

    let options = {
      threshold: 0,
    };

    const io = new IntersectionObserver((entries, options) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          masterTL.play();
        }
      });
    }, options);

    io.observe(sectionParent);
  });
});
///////////
// DISABLE TRANSITION WHEN REZIZE PAGE
///////////////

(function () {
  const classes = document.body.classList;
  let timer = 0;
  window.addEventListener("resize", function () {
    if (timer) {
      clearTimeout(timer);
      timer = null;
    } else classes.add("stop-transitions");

    timer = setTimeout(() => {
      classes.remove("stop-transitions");
      timer = null;
    }, 100);
  });
})();

/////////////
// NAVBAR
////////////

document.getElementById("mobile-menu").onclick = function () {
  toggleMenuMobile();
};

function toggleMenuMobile() {
  document
    .getElementById("menu-menu-principal")
    .classList.toggle("show-mobile-nav");
  document.getElementById("mobile-menu").classList.toggle("is-active");
  document.querySelector("body").classList.toggle("blocked");
}

window.addEventListener("resize", function (e) {
  if (
    window.innerWidth > 768 &&
    document.getElementById("mobile-menu").classList.contains("is-active")
  ) {
    toggleMenuMobile();
  }
});

window.addEventListener("scroll", function (e) {
  if (window.scrollY > 200)
    document.querySelector(".navbar").classList.add("nav-fixed");
  else document.querySelector(".navbar").classList.remove("nav-fixed");

  if (window.scrollY > 250)
    document.querySelector(".navbar").classList.add("transition-nav");
  else document.querySelector(".navbar").classList.remove("transition-nav");

  if (window.scrollY > 400)
    document.querySelector(".navbar").classList.add("show");
  else document.querySelector(".navbar").classList.remove("show");
});
document.querySelectorAll(".menu-menu-principal > .menu-item-has-children").forEach(function (el) {
  el.addEventListener("mouseover", function (event) {
    console.log("Événement mouseover déclenché sur ", el);
  });
});
// DROPDOWN MENU
document.addEventListener('DOMContentLoaded', (event) => {

  document.querySelectorAll("#menu-menu-principal > .menu-item-has-children").forEach(function (el) {

    el.addEventListener("mouseenter", function (event) {

      let subMenuHolder = document.getElementById("sub-menu-holder");
      let subMenu = el.querySelector(".sous-menu");
      let subSubMenu = el.querySelectorAll(".sous-sous-menu");


      let tallestElement = null;
      let maxHeight = 0;

      for (let key in subSubMenu) {
        if (subSubMenu.hasOwnProperty(key)) {
          let element = subSubMenu[key];
          let elementHeight = element.offsetHeight;

          if (elementHeight > maxHeight) {
            maxHeight = elementHeight;
            tallestElement = element;
          }
        }
      }

      for (let key in subSubMenu) {
        if (subSubMenu.hasOwnProperty(key)) {
          subSubMenu[key].style.height = tallestElement.offsetHeight + "px";
          console.log(subSubMenu);
        }
      }

      if (window.innerWidth > 991) {
        if (el.classList.contains("menu-item-84")) {
          subMenuHolder.style.width = `${subMenu.offsetWidth + tallestElement.offsetWidth}px`;
          subMenuHolder.style.height = `${tallestElement.offsetHeight}px`;
          subMenuHolder.style.left = `${el.offsetLeft + el.offsetWidth + tallestElement.offsetWidth / 5}px`;
          subMenuHolder.style.top = `${el.offsetTop + el.offsetHeight}px`;
        } else {
          subMenuHolder.style.width = `${subMenu.offsetWidth}px`;
          subMenuHolder.style.height = `${subMenu.offsetHeight}px`;
          subMenuHolder.style.left = `${el.offsetLeft + el.offsetWidth / 2}px`;
          subMenuHolder.style.top = `${el.offsetTop + el.offsetHeight}px`;
        }

      }

    });
  }
  );
});

document.querySelectorAll('#menu-item-84 .menu-item-has-children').forEach(function (parent) {
  parent.addEventListener('mouseenter', function () {
    // Masquer tous les enfants
    document.querySelectorAll('.sous-sous-menu').forEach(function (enfant) {
      enfant.style.opacity = '0';
      enfant.style.visibility = 'hidden';
    });

    document.querySelectorAll('#menu-item-84 .menu-item-has-children').forEach(function (elDisable) {
      elDisable.classList.remove("focused");
    });

    // Activer l'élément
    this.classList.add("focused");


    // Afficher l'enfant de ce parent
    this.querySelector('.sous-sous-menu').style.opacity = '1';
    this.querySelector('.sous-sous-menu').style.visibility = 'visible';

  });
});


document.addEventListener('DOMContentLoaded', function () {
  const isMobile = window.matchMedia('(max-width: 767px)').matches;

  if (isMobile) {
    const parentMenuItems = document.querySelectorAll('.menu-item-has-children > a'); // Sélectionne directement les liens qui sont des enfants directs des éléments `.menu-item-has-children`

    parentMenuItems.forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        console.log("Lien parent bloqué");
        event.currentTarget.parentElement.classList.add("visible-mobile");
      });
    });
  }
});


[].forEach.call(
  document.getElementsByClassName("back-icon"),
  function (el) {
    el.addEventListener("click", function (event) {
      let parentElement = el.parentElement;

      while (parentElement && !parentElement.classList.contains('menu-item-has-children')) {
        parentElement = parentElement.parentElement;
      }

      if (parentElement) {
        console.log("suppr");
        parentElement.classList.remove('visible-mobile');
      }
      event.stopPropagation();
    });
  }
);


// ICON CART

function showNbItemsCart() {
  let badgeNbItemsCart = document.getElementById("badge-nb-items-cart");
  badgeNbItemsCart.classList.add("visible");
}

function hideNbItemsCart() {
  let badgeNbItemsCart = document.getElementById("badge-nb-items-cart");
  badgeNbItemsCart.classList.remove("visible");
}

function updateNbItemsCart(nbItems) {
  let badgeNbItemsCart = document.getElementById("badge-nb-items-cart");
  badgeNbItemsCart.textContent = nbItems;
}



/////////////
// MAP
/////////////
let containerMap = document.getElementById("container-map");
if (containerMap) {
  var mymap = L.map("container-map", {
    scrollWheelZoom: false,
  }).setView([47.25099418694209, 6.038069347358452], 13); //Creation de la map, à injecter dans la div contenant l'id #map, nous lui ajoutons sa position de depart aisin que le zoom de depart

  L.tileLayer(
    "https://api.mapbox.com/styles/v1/dorianlarosa/ckc52xh061a7o1iqz7uzme99a/tiles/256/{z}/{x}/{y}?&access_token=pk.eyJ1IjoiZG9yaWFubGFyb3NhIiwiYSI6ImNqdzdpaTQ1eTA1NGw0OHFyaGU0ajBoYTgifQ.ZMdWM536gbUJIpztyYLvzA#10.0/42.362400/-71.020000/0}",
    {
      maxZoom: 18,
      id: "mapbox.streets",
      accessToken:
        "pk.eyJ1IjoiZG9yaWFubGFyb3NhIiwiYSI6ImNqdzdpaTQ1eTA1NGw0OHFyaGU0ajBoYTgifQ.ZMdWM536gbUJIpztyYLvzA",
    }
  ).addTo(mymap);

  // ICON MAP

  let templateUrl = object_name.templateUrl;

  var customIcon = L.icon({
    iconUrl: templateUrl + "/images/marker.png",

    iconSize: [37, 50], // size of the icon
    iconAnchor: [18.5, 50], // point of the icon which will correspond to marker's location
    popupAnchor: [-3, -76], // point from which the popup should open relative to the iconAnchor
  });

  var marker = L.marker([47.25099418694209, 6.038069347358452], {
    icon: customIcon,
  }).addTo(mymap);
}

///////
// ACCORDEON FAQ YOAST
//////

const items = document.querySelectorAll(
  ".wp-block-yoast-faq-block .schema-faq-section"
);

function toggleAccordion() {
  // Si 'aria-expanded' est null ou 'false', la condition sera vraie
  const itemToggle = this.getAttribute("aria-expanded") !== "true";

  // Fermez tous les éléments
  for (let i = 0; i < items.length; i++) {
    items[i].setAttribute("aria-expanded", "false");
  }

  // Ouvrez l'élément cliqué si nécessaire
  if (itemToggle) {
    this.setAttribute("aria-expanded", "true");
  }
}

items.forEach((item) => {
  // Définissez un état initial pour 'aria-expanded' si ce n'est pas déjà fait
  if (!item.hasAttribute("aria-expanded")) {
    item.setAttribute("aria-expanded", "false");
  }
  item.addEventListener("click", toggleAccordion);
});

///////
// A PROPOS DE MOI PAGE
//////

[].forEach.call(
  document.querySelectorAll(".qualification-item"),
  function (el) {
    let idQualification = el.dataset.id;
    console.log(el);
    el.addEventListener("mouseenter", function (e) {
      document
        .querySelector(
          '.image-certification[data-id="' + idQualification + '"]'
        )
        .classList.add("visible");
    });

    el.addEventListener("mouseleave", function (e) {
      document
        .querySelector(
          '.image-certification[data-id="' + idQualification + '"]'
        )
        .classList.remove("visible");
    });
  }
);

///////
// SLIDER REVIEW HOME PAGE 
//////
let sliderItem = document.getElementById("slider-reviews");
if (sliderItem) {
  var slider = tns({
    container: "#slider-reviews",
    items: 1,
    slideBy: "page",
    gutter: 10,
    controlsContainer: "#customize-controls",
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
  });
}

/////////////
// MAP HOMEPAGE
/////////////
let containerMapHome = document.getElementById("container-map-front-page");
if (containerMapHome) {

  var mymap = L.map("container-map-front-page", {
    scrollWheelZoom: false,
  }).setView([47.25099418694209, 6.038069347358452], 13); //Creation de la map, à injecter dans la div contenant l'id #map, nous lui ajoutons sa position de depart aisin que le zoom de depart

  L.tileLayer(
    "https://api.mapbox.com/styles/v1/dorianlarosa/ckc52xh061a7o1iqz7uzme99a/tiles/256/{z}/{x}/{y}?&access_token=pk.eyJ1IjoiZG9yaWFubGFyb3NhIiwiYSI6ImNqdzdpaTQ1eTA1NGw0OHFyaGU0ajBoYTgifQ.ZMdWM536gbUJIpztyYLvzA#10.0/42.362400/-71.020000/0}",
    {
      maxZoom: 18,
      id: "mapbox.streets",
      accessToken:
        "pk.eyJ1IjoiZG9yaWFubGFyb3NhIiwiYSI6ImNqdzdpaTQ1eTA1NGw0OHFyaGU0ajBoYTgifQ.ZMdWM536gbUJIpztyYLvzA",
    }
  ).addTo(mymap);

  // ICON MAP

  var templateUrl = object_name.templateUrl;

  var customIcon = L.icon({
    iconUrl: templateUrl + "/images/marker.png",

    iconSize: [37, 50], // size of the icon
    iconAnchor: [18.5, 50], // point of the icon which will correspond to marker's location
    popupAnchor: [-3, -76], // point from which the popup should open relative to the iconAnchor
  });

  var marker = L.marker([47.25099418694209, 6.038069347358452], {
    icon: customIcon,
  }).addTo(mymap);
}


/////////////
//SINGLE SERVICE 
/////////////
// Attendez que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function () {

  let selectElement = document.getElementById('select-reservation-single-service-page');
  if (selectElement) {
    // Sélectionnez l'élément select par son ID

    // Ajoutez un écouteur d'événements pour le changement de sélection
    selectElement.addEventListener('change', function () {
      // Obtenez l'option sélectionnée
      let selectedOption = this.options[this.selectedIndex];

      // Récupérez la valeur de l'attribut data-price
      let price = selectedOption.getAttribute('data-price');

      // Affichez le prix où vous en avez besoin - par exemple dans un élément avec l'ID 'price-display'
      document.getElementById('price-display').textContent = price + '€';
    });

    // Déclenchez l'événement change au chargement pour le premier élément sélectionné
    selectElement.dispatchEvent(new Event('change'));
  }
});

// KALENDES

window.kalendesLoaded = function () {
  console.log("Le Widget est chargé"); // Placez ici le paramétrage de l'affichage - Ex : kalendes.setPercentHeight(90); kalendes.setWidth(450);
  kalendes.retrieveArticleList()
  updateCountCart();

  function updateCountCart() {
    // GET COUNT ITEMS CART
    kalendes.getBasketDetails().then(function (result) {
      let cart = result.basket;
      console.log(cart);
      console.log("count");

      showNbItemsCart();
      updateNbItemsCart(cart.nbArticles);

    });

  }


  // EVENTS
  //////////////////////

  // GIFT CARD
  [].forEach.call(
    document.getElementsByClassName("btn-gift-card"),
    function (el) {
      el.addEventListener("click", function (event) {
        kalendes.goGiftCard();
        kalendes.show();
      });
    }
  );

  // FORM RESERVATION SINGLE SERVICE PAGE
  let formElement = document.getElementById('form-reservation-single-service-page');
  if (formElement) {
    document.getElementById('form-reservation-single-service-page').addEventListener('submit', function (e) {
      // Empêche la soumission par défaut du formulaire
      e.preventDefault();

      let selectElement = document.getElementById('select-reservation-single-service-page');
      let selectedValue = selectElement.value;

      kalendes.addArticle(selectedValue, 1);
      kalendes.openBasket();
      kalendes.show();

      setTimeout(function () {
        updateCountCart();
      }, 1000)

    });
  }
  // HOOK UPDATE COUNT CART
  const originalHide = kalendes.hide;

  kalendes.hide = function () {

    originalHide.apply(this, arguments);

    // Code après l'appel original
    updateCountCart();

  };


  // ICON MENU HEADER
  let cartButton = document.getElementById("cart-button");
  let accountButton = document.getElementById("account-button");

  cartButton.addEventListener("click", function (event) {
    kalendes.openBasket();
    kalendes.show();
  });

  accountButton.addEventListener("click", function (event) {
    kalendes.goAccount();
    kalendes.show();
  });

};

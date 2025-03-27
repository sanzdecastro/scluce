document.addEventListener("DOMContentLoaded", function () {
  Fancybox.bind("[data-fancybox]", {
    hideScrollbar: false,
    Carousel: {
      Navigation: false,
    },
    Toolbar: {
      display: {
        left: [],
        middle: ["prev", "infobar", "next"],
        right: ["close"],
      },
    },
    Thumbs: {
      type: "classic",
    },
  });

  gsap.registerPlugin(ScrollTrigger);

  // Lenis Smooth Scroll
  function initLenis(doc = document) {
    const easeOutBack = (t) => {
      const s = 1.40158;
      const t1 = t - 1;
      return 1 + t1 * t1 * ((s + 1) * t1 + s);
    };

    const lenis = new Lenis({
      duration: 1.2,
      easing: easeOutBack,
    });

    lenis.on("scroll", ScrollTrigger.update);

    gsap.ticker.add((time) => {
      lenis.raf(time * 1000); // Convert time from seconds to milliseconds
    });

    // Scroll para anchor points
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", (e) => {
        e.preventDefault();
        const targetId = anchor.getAttribute("href");
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          ScrollTrigger.getAll().forEach((trigger) => {
            if (trigger.animation) {
              trigger.animation.progress(1);
            }
          });

          lenis.scrollTo(targetElement);
        }
      });
    });
  }

  initLenis();

  // ANIMACIONES SCROLLTRIGGER

  // First section - Envelope
  const firstSection = document.querySelector("section.first");

  const envelope = document.querySelector(".envelope");
  gsap.set(envelope, {
    rotate: 1.82,
  });

  // First section - Envelope / Movimiento scroll

  gsap.to(envelope, {
    rotate: -17,
    scrollTrigger: {
      trigger: envelope,
      start: "top top",
      // markers: true,
      scrub: true,
    },
  });

  // Potatos
  const sectionPotatos = document.querySelector(".potatos");
  const potato1 = document.querySelector(".potato1");
  const potato2 = document.querySelector(".potato2");

  gsap.set(sectionPotatos, {
    yPercent: -100,
  });

  gsap.set(potato1, {
    xPercent: 50,
    rotate: 8,
    transformOrigin: "center",
  });

  gsap.set(potato2, {
    xPercent: -50,
    rotate: -6,
    transformOrigin: "center",
  });

  // Potatos / Movimiento Scroll
  const tlAnimationPotatos = gsap.timeline({
    scrollTrigger: {
      trigger: firstSection,
      start: "top top",
      // markers: true,
      scrub: true,
    },
  });

  tlAnimationPotatos
    .to(sectionPotatos, {
      yPercent: -50,
      xPercent: 0,
    })
    .to(sectionPotatos, {
      yPercent: 0,
      xPercent: 0,
    });

  gsap.to(potato1, {
    rotate: 8,
    xPercent: 20,
    scrollTrigger: {
      trigger: firstSection,
      start: "top -50%",
      // markers: true,
      scrub: true,
    },
  });

  gsap.to(potato2, {
    rotate: -17,
    yPercent: 30,
    xPercent: -10,
    scrollTrigger: {
      trigger: firstSection,
      start: "top -50%",
      // markers: true,
      scrub: true,
    },
  });

  // Diptics
  const sectionDiptics = document.querySelector(".diptics");
  const dipticClosed = document.querySelector(".diptic-closed");
  const dipticOpened = document.querySelector(".diptic-opened");

  // Diptics
  gsap.set(sectionDiptics, {
    yPercent: -300,
    xPercent: -50,
  });

  gsap.set(dipticClosed, {
    rotate: 220,
    xPercent: 100,
    transformOrigin: "center",
  });

  gsap.set(dipticOpened, {
    rotate: 15,
    xPercent: -50,
    yPercent: -10,
    transformOrigin: "center",
  });

  const tlAnimationDiptics = gsap.timeline({
    scrollTrigger: {
      trigger: firstSection,
      start: "top top",
      // markers: true,
      scrub: true,
    },
  });

  tlAnimationDiptics
    .to(sectionDiptics, {
      yPercent: -100,
      xPercent: 20,
    })
    .to(sectionDiptics, {
      yPercent: -50,
      xPercent: 0,
    })
    .to(sectionDiptics, {
      yPercent: 0,
      xPercent: 0,
    });

  gsap.to(dipticClosed, {
    rotate: -151,
    xPercent: -500,
    yPercent: 20,
    scrollTrigger: {
      // trigger: sectionDiptics,
      start: "top top",
      // end: "center center",
      // markers: true,
      scrub: true,
    },
  });

  gsap.to(dipticOpened, {
    rotate: -6,
    xPercent: 20,
    yPercent: 40,
    scrollTrigger: {
      // trigger: sectionDiptics,
      start: "top top",
      // end: "center center",
      // markers: true,
      scrub: true,
    },
  });

  // Bookmarks
  const sectionBookmarks = document.querySelector(".bookmarks");
  const bookmarkFront = document.querySelector(".bookmark-front");
  const bookmarkBack = document.querySelector(".bookmark-back");

  gsap.set(sectionBookmarks, {
    yPercent: -500,
    xPercent: 0,
  });

  gsap.set(bookmarkFront, {
    rotate: 90,
    xPercent: -20,
    yPercent: 70,
    transformOrigin: "center",
  });

  gsap.set(bookmarkBack, {
    rotate: -95,
    xPercent: -40,
    yPercent: -90,
    transformOrigin: "center",
  });

  const tlAnimationBookmarks = gsap.timeline({
    scrollTrigger: {
      trigger: firstSection,
      start: "top top",
      // markers: true,
      scrub: true,
    },
  });

  tlAnimationBookmarks
    .to(sectionBookmarks, {
      yPercent: -350,
      xPercent: 0,
    })
    .to(sectionBookmarks, {
      yPercent: -200,
      xPercent: 0,
    })
    .to(sectionBookmarks, {
      yPercent: 0,
      xPercent: 0,
    });

  gsap.to(bookmarkFront, {
    rotate: 345,
    xPercent: 70,
    yPercent: -200,
    scrollTrigger: {
      start: "top top",
      scrub: true,
    },
  });

  gsap.to(bookmarkBack, {
    rotate: 230,
    xPercent: 60,
    yPercent: 200,
    scrollTrigger: {
      start: "top top",
      // markers: true,
      scrub: true,
      transformOrigin: "center",
    },
  });

  // Prephoto
  const sectionPrePhoto = document.querySelector(".pre-photos");
  const PrePhoto = document.querySelector(".pre-photo");

  gsap.set(sectionPrePhoto, {
    yPercent: -400,
    autoAlpha: 0,
  });

  gsap.set(PrePhoto, {
    rotate: 20,
    xPercent: 10,
  });

  const tlAnimationPrePhoto = gsap.timeline({
    scrollTrigger: {
      trigger: firstSection,
      start: "top top",
      // markers: true,
      scrub: true,
    },
  });

  tlAnimationPrePhoto
    .to(sectionPrePhoto, {
      autoAlpha: 1,
      yPercent: -395,
    })
    .to(sectionPrePhoto, {
      yPercent: -300,
      xPercent: 10,
    })
    .to(sectionPrePhoto, {
      yPercent: -250,
      xPercent: 5,
    })
    .to(sectionPrePhoto, {
      yPercent: 0,
      xPercent: 0,
    });

  gsap.to(PrePhoto, {
    rotate: -20,
    xPercent: 0,
    scrollTrigger: {
      start: "top top",
      // markers: true,
      scrub: true,
    },
  });

  // Main Photo

  const mainPhoto = document.querySelector(".main-photo");

  gsap.set(mainPhoto, {
    rotate: 2.61,
  });

  gsap.to(mainPhoto, {
    rotate: -2.61,
    scrollTrigger: {
      trigger: mainPhoto,
      start: "top bottom",
      scrub: true,
    },
  });

  // Change Bakcground Color

  const body = document.querySelector("body");
  const introduction = document.querySelector(".introduction");
  const text = document.querySelectorAll(
    ".introduction .title, .introduction .text"
  );

  ScrollTrigger.create({
    trigger: introduction,
    start: "center bottom",
    onUpdate: (self) => body.classList.add("bg-white"),
    onEnter() {
      body.classList.add("bg-white");
      text.forEach((el) => el.classList.add("text-blue-euroluce"));
    },
    onLeave() {
      //body.classList.remove("bg-white");
      //text.forEach((el) => el.classList.remove("text-blue-euroluce"));
    },
    onEnterBack() {
      body.classList.add("bg-white");
      text.forEach((el) => el.classList.add("text-blue-euroluce"));
    },
    onLeaveBack() {
      body.classList.remove("bg-white");
      text.forEach((el) => el.classList.remove("text-blue-euroluce"));
    },
  });

  // Calcular alturas del flex-column
//   window.addEventListener("load", () => {
//     const productsGallery = document.querySelector(".products-gallery");
//     const heightProductsGallery = productsGallery.offsetHeight;
//     const newHeightGallery = heightProductsGallery / 2.15;

//     console.log( "height bloque" , heightProductsGallery);
//     console.log("nuevo height" , newHeightGallery);
//     productsGallery.style.height =
//       ((newHeightGallery) / 1440 ) * 100 + "vw";
//   });
});

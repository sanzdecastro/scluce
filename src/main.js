document.addEventListener("DOMContentLoaded", function () {
  const windowWidth = window.innerWidth;


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
      type: "modern",
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

  // Aplicar Smooth Scroll Lenis a partir de Tablet
  if (windowWidth > 768) {
    initLenis();
  }

  // ANIMACIONES SCROLLTRIGGER

  // First section - Envelope
  const firstSection = document.querySelector("section.first");

  const envelope = document.querySelectorAll(".envelope");
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
  const potato1 = document.querySelectorAll(".potato1");
  const potato2 = document.querySelector(".potato2");

  if (windowWidth < 768) {
    gsap.set(sectionPotatos, {
      yPercent: -110,
    });
  } else {
    gsap.set(sectionPotatos, {
      yPercent: -100,
    });
  }

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
  const dipticClosed = document.querySelectorAll(".diptic-closed");
  const dipticOpened = document.querySelectorAll(".diptic-opened");

  // Diptics
  gsap.set(sectionDiptics, {
    yPercent: -300,
    xPercent: -50,
  });

  gsap.set(dipticClosed, {
    rotate: 220,
    xPercent: 100,
    transformOrigin: "50% 50%",
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

  if (windowWidth < 768) {
    gsap.to(dipticClosed, {
      rotate: -251,
      xPercent: -800,
      transformOrigin: "center center",
      yPercent: 0,
      scrollTrigger: {
        transformOrigin: "center center",
        start: "top top",
        scrub: true,
      },
    });
  } else {
    gsap.to(dipticClosed, {
      rotate: -51,
      xPercent: -400,
      transformOrigin: "center center",
      yPercent: 0,
      scrollTrigger: {
        transformOrigin: "center center",
        start: "top top",
        scrub: true,
      },
    });
  }

  gsap.to(dipticOpened, {
    rotate: -6,
    xPercent: 20,
    yPercent: 40,
    scrollTrigger: {
      start: "top top",
      scrub: true,
    },
  });

  // Bookmarks
  const sectionBookmarks = document.querySelector(".bookmarks");
  const bookmarkFront = document.querySelector(".bookmark-front");
  const bookmarkBack = document.querySelectorAll(".bookmark-back");

  if (windowWidth < 768) {
    gsap.set(sectionBookmarks, {
      yPercent: 0,
      xPercent: 0,
    });
  } else {
    gsap.set(sectionBookmarks, {
      yPercent: -500,
      xPercent: 0,
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
  }

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

  if (windowWidth < 768) {
    gsap.to(bookmarkFront, {
      rotate: -580,
      xPercent: 100,
      yPercent: -500,
      scrollTrigger: {
        start: "top top",
        scrub: true,
      },
    });

    gsap.to(bookmarkBack, {
      rotate: 560,
      xPercent: 250,
      yPercent: 500,
      scrollTrigger: {
        start: "top top",
        // markers: true,
        scrub: true,
        transformOrigin: "center",
      },
    });
  } else {
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
      rotate: 280,
      xPercent: 60,
      yPercent: 300,
      scrollTrigger: {
        start: "top top",
        // markers: true,
        scrub: true,
        transformOrigin: "center",
      },
    });
  }

  // Prephoto
  const sectionPrePhoto = document.querySelector(".pre-photos");
  const PrePhoto = document.querySelector(".pre-photo");

  gsap.set(PrePhoto, {
    rotate: 20,
  });

  if (windowWidth > 768) {
   
    gsap.to(PrePhoto, {
      rotate: -20,
      xPercent: 0,
      scrollTrigger: {
        start: "top top",
        // markers: true,
        scrub: true,
      },
    });
  } else {
    gsap.to(PrePhoto, {
      rotate: -100,
      scrollTrigger: {
        start: "top top",
        // markers: true,
        scrub: true,
      },
    });
  }

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

  const body = document.querySelector(".page-template-landing-euroluce25");
  const introduction = document.querySelector(".introduction");
  const text = document.querySelectorAll(
    ".introduction .title, .introduction .text"
  );
  const ulSlides = document.querySelector("ul.slides");
  const nav = document.querySelector("nav");

  ScrollTrigger.create({
    trigger: introduction,
    start: "center bottom",
    onUpdate: (self) => body.classList.add("bg-white"),
    onEnter() {
      // Cuando entra a la sección
      body.classList.add("bg-white");
      ulSlides.classList.add("hidden");
      nav.classList.add("mix-blend-initial")
      text.forEach((el) => el.classList.add("text-blue-euroluce"));
    },
    onEnterBack() {
      // Cuando entra a la sección de nuevo
      body.classList.add("bg-white");
      ulSlides.classList.add("hidden");
      nav.classList.add("mix-blend-initial")
      text.forEach((el) => el.classList.add("text-blue-euroluce"));
    },
    onLeaveBack() {
      // Cuando sale haciando scroll hacia arriba
      body.classList.remove("bg-white");
      ulSlides.classList.remove("hidden");
      nav.classList.remove("mix-blend-initial")
      text.forEach((el) => el.classList.remove("text-blue-euroluce"));
    },
  });

  // Animation Columns
  if (windowWidth > 768) {
    const itemsOdd = document.querySelectorAll(".products-gallery .product-card");

    itemsOdd.forEach((item) => {
      gsap.set(item, {
        yPercent: 20,
      });
  
      gsap.to(item, {
        yPercent: 0,
        scrollTrigger: {
          trigger: item,
          start: "top bottom",
          end: "bottom top",
          scrub: true,
        },
      });
    });
  }
});

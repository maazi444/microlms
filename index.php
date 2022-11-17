<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/reset.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/header-6.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <title>Microcomsols - Learn the leading Skills in Industry</title>
  </head>
  <body>
    <!-- Header Start -->
    <main>
      <header class="site-header">
        <div class="site-header__top">
          <div class="wrapper site-header__wrapper top">
            <nav class="nav">
              <button class="nav__toggle" aria-expanded="false" type="button">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="3"
                  stroke="currentColor"
                  class="menu-btn"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5"
                  />
                </svg>
              </button>
              <ul class="nav__wrapper">
                <li class="nav__item"><a href="#">Home</a></li>
                <li class="nav__item"><a href="#">Courses</a></li>
                <li class="nav__item"><a href="#">Blog</a></li>
                <li class="nav__item"><a href="#">FAQs</a></li>
                <li class="nav__item"><a href="#">Contact</a></li>
              </ul>
            </nav>
            <a href="#"><i class="fas fa-sign-in-alt"></i> Sign in</a>
          </div>
        </div>
        <div class="site-header__bottom">
          <div class="wrapper site-header__wrapper bottom">
            <a href="#" class="brand">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="2"
                stroke="currentColor"
                class="logo-svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"
                />
              </svg>

              <span>Microcomsols</span></a
            >
            <a href="#" class="button">Enroll a Course</a>
          </div>
        </div>
      </header>
      <!-- Header End -->

      <!-- Splide Slider Start -->
      <section
        class="splide"
        aria-label="See what Microcomsols has to offer"
        data-aos="zoom-in"
      >
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <img src="./img/carousel-img1.jpg" alt="Learning that gets you" />
            </li>
            <li class="splide__slide">
              <img
                src="./img/carousel-img2.jpg"
                alt="Unlock the power of people"
              />
            </li>
          </ul>
        </div>
      </section>
      <!-- Splide Slider End -->

      <!-- Home Courses Start -->

      <section class="site-introduction side-center">
        <div class="si-top">
          <h1 class="si-heading">Get Creative With Microcomsols</h1>
          <h2 class="si-text">
            Learn creative skills to achieve your personal and professional
            goals.
          </h2>
        </div>
        <div class="home-courses">
          <div class="tabs">
            <!-- Chips Start -->
            <div class="tabs-row">
              <button
                class="chip tablinks"
                id="cat-btn-1"
                onclick="openCourseTab(event, 'cat-content-1')"
              >
                Python
              </button>
              <button
                class="chip tablinks"
                id="cat-btn-2"
                onclick="openCourseTab(event, 'cat-content-2')"
              >
                Web Development
              </button>
              <button
                class="chip tablinks"
                id="cat-btn-3"
                onclick="openCourseTab(event, 'cat-content-3')"
              >
                Data Science
              </button>
              <button
                class="chip tablinks"
                id="cat-btn-4"
                onclick="openCourseTab(event, 'cat-content-4')"
              >
                AWS Certification
              </button>
            </div>
            <!-- Chips End -->
            <!-- Chips Content Start -->
            <div id="cat-content-1" class="tabcontent">
              <div class="courses-tab-row">
                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card1.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Learn Python: The Complete Python Programming Course
                      </h5>
                      <p class="c-card-authors">Avinash Jain, The Codex</p>
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card2.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Learning Python for Data Analysis and Visualization
                      </h5>
                      <p class="c-card-authors">Jose Portilla</p>
                      <span class="c-card-badge c-card-badge-green"
                        >Bestseller</span
                      >
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card3.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python for Beginners - Learn Programming from scratch
                      </h5>
                      <p class="c-card-authors">
                        Edwin Diaz, Coding Faculty Solutions
                      </p>
                      <span class="c-card-badge c-card-badge-green"
                        >Bestseller</span
                      >
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card4.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python Beyond the Basics - Object-Oriented Programming
                      </h5>
                      <p class="c-card-authors">Infinite Skills</p>
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card5.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python From Scratch & Selenium WebDriver QA Automation
                        2022
                      </h5>
                      <p class="c-card-authors">Admas Kinfu</p>
                      <span class="c-card-badge c-card-badge-red"
                        >Hot & New</span
                      >
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div id="cat-content-2" class="tabcontent">
              <div class="courses-tab-row">
                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card1.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Learn Web Development: The Complete Python Programming
                        Course
                      </h5>
                      <p class="c-card-authors">Avinash Jain, The Codex</p>
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card2.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Learning Python for Data Analysis and Visualization
                      </h5>
                      <p class="c-card-authors">Jose Portilla</p>
                      <span class="c-card-badge c-card-badge-green"
                        >Bestseller</span
                      >
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card3.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python for Beginners - Learn Programming from scratch
                      </h5>
                      <p class="c-card-authors">
                        Edwin Diaz, Coding Faculty Solutions
                      </p>
                      <span class="c-card-badge c-card-badge-green"
                        >Bestseller</span
                      >
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card4.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python Beyond the Basics - Object-Oriented Programming
                      </h5>
                      <p class="c-card-authors">Infinite Skills</p>
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card5.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python From Scratch & Selenium WebDriver QA Automation
                        2022
                      </h5>
                      <p class="c-card-authors">Admas Kinfu</p>
                      <span class="c-card-badge c-card-badge-red"
                        >Hot & New</span
                      >
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div id="cat-content-3" class="tabcontent">
              <div class="courses-tab-row">
                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card1.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Learn Data Science: The Complete Python Programming
                        Course
                      </h5>
                      <p class="c-card-authors">Avinash Jain, The Codex</p>
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card2.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Learning Python for Data Analysis and Visualization
                      </h5>
                      <p class="c-card-authors">Jose Portilla</p>
                      <span class="c-card-badge c-card-badge-green"
                        >Bestseller</span
                      >
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card3.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python for Beginners - Learn Programming from scratch
                      </h5>
                      <p class="c-card-authors">
                        Edwin Diaz, Coding Faculty Solutions
                      </p>
                      <span class="c-card-badge c-card-badge-green"
                        >Bestseller</span
                      >
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card4.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python Beyond the Basics - Object-Oriented Programming
                      </h5>
                      <p class="c-card-authors">Infinite Skills</p>
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card5.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python From Scratch & Selenium WebDriver QA Automation
                        2022
                      </h5>
                      <p class="c-card-authors">Admas Kinfu</p>
                      <span class="c-card-badge c-card-badge-red"
                        >Hot & New</span
                      >
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <div id="cat-content-4" class="tabcontent">
              <div class="courses-tab-row">
                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card1.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Learn AWS Certification: The Complete Python Programming
                        Course
                      </h5>
                      <p class="c-card-authors">Avinash Jain, The Codex</p>
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card2.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Learning Python for Data Analysis and Visualization
                      </h5>
                      <p class="c-card-authors">Jose Portilla</p>
                      <span class="c-card-badge c-card-badge-green"
                        >Bestseller</span
                      >
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card3.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python for Beginners - Learn Programming from scratch
                      </h5>
                      <p class="c-card-authors">
                        Edwin Diaz, Coding Faculty Solutions
                      </p>
                      <span class="c-card-badge c-card-badge-green"
                        >Bestseller</span
                      >
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card4.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python Beyond the Basics - Object-Oriented Programming
                      </h5>
                      <p class="c-card-authors">Infinite Skills</p>
                    </div>
                  </div>
                </a>

                <a href="#" class="home-course-card">
                  <div class="c-card-body">
                    <img src="./img/py-card5.jpg" class="c-card-img" />
                    <div class="c-card-text">
                      <h5 class="c-card-heading">
                        Python From Scratch & Selenium WebDriver QA Automation
                        2022
                      </h5>
                      <p class="c-card-authors">Admas Kinfu</p>
                      <span class="c-card-badge c-card-badge-red"
                        >Hot & New</span
                      >
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- Chips Content End -->
          </div>
        </div>
      </section>
      <!-- Home Courses End -->
      <section class="cta-section">
        <div class="call-action">
          <h1 class="cta-heading">Be your own boss in your field</h1>
          <a class="cta-button">Join Now</a>
        </div>
      </section>
    </main>

    <script src="js/header-6.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/splide-carousel.js"></script>
    <script>
      AOS.init();

      function openCourseTab(evt, courseName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(
            " chip-active",
            ""
          );
        }
        document.getElementById(courseName).style.display = "block";
        evt.currentTarget.className += " chip-active";
      }
    </script>
  </body>
</html>

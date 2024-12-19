<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multiple Blog Website</title>
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Iconscout CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <!--========== Nav Bar ==========-->
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">Rujal</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./assets/images/avatar1.jpg">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>

    <!--========== Feature Section ==========-->
    <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="./assets/images/blog1.jpg">
            </div>
            <div class="post__info">
                <a href="category-posts.html" class="category__button">Wild Life</a>
                <h2 class="post__title"><a href="post.html">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</a></h2>
                <p class="post__body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ipsa non tenetur quos hic, consequuntur quo culpa repellat alias cupiditate impedit tempore ea modi dolores facilis. Asperiores ea quos iure.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="./assets/images/avatar2.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By: Jame Doe</h5>
                        <small>June 10, 2024 - 07:23</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========== Posts Section  ==========-->
    <section class="posts">
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./assets/images/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, dolorum porro ut beatae sed est facilis quod. Qui perferendis quis molestias at totam?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./assets/images/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>December 18, 2024 - 12:35</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./assets/images/blog3.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, dolorum porro ut beatae sed est facilis quod. Qui perferendis quis molestias at totam?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./assets/images/avatar4.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>December 18, 2024 - 12:35</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./assets/images/blog4.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, dolorum porro ut beatae sed est facilis quod. Qui perferendis quis molestias at totam?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./assets/images/avatar5.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>December 18, 2024 - 12:35</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./assets/images/blog5.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, dolorum porro ut beatae sed est facilis quod. Qui perferendis quis molestias at totam?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./assets/images/avatar6.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>December 18, 2024 - 12:35</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./assets/images/blog6.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, dolorum porro ut beatae sed est facilis quod. Qui perferendis quis molestias at totam?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./assets/images/avatar7.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>December 18, 2024 - 12:35</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./assets/images/blog7.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, dolorum porro ut beatae sed est facilis quod. Qui perferendis quis molestias at totam?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./assets/images/avatar8.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>December 18, 2024 - 12:35</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./assets/images/blog8.jpg">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, dolorum porro ut beatae sed est facilis quod. Qui perferendis quis molestias at totam?
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./assets/images/avatar9.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>December 18, 2024 - 12:35</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- ========== Category Button Section ==========-->
     <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Art</a>
            <a href="" class="category__button">Wild Life</a>
            <a href="" class="category__button">Travel</a>
            <a href="" class="category__button">Science & Technology</a>
            <a href="" class="category__button">Food</a>
            <a href="" class="category__button">Music</a>
        </div>
     </section>

     <!-- ========== Footer Section ==========-->
      <footer>
        <div class="footer__socials">
            <a href="https://youtube.com/@SyncAudioRT" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Science & Technology</a></li>
                    <li><a href="">Food</a></li>
                    <li><a href="">Music</a></li>
                </ul>
            </article>

            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Supports</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>

            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>

            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; <span id="year"></span> Code With<a href="https://github.com/rujal404" target="_blank"> Rujal</a></small>
            <script>
                document.getElementById('year').textContent = new Date().getFullYear();
              </script>
        </div>
      </footer>

      <script src="./assets/js/main.js"></script>
</body>
</html>
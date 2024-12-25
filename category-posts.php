<?php 
    include 'partials/header.php';


    // fetch posts if id is set
    if(isset($_GET['id'])) {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM posts WHERE category_id=$id ORDER BY date_time DESC";
        $result = mysqli_query($connection, $query);
    } else {
        header('location: ' . ROOT_URL . 'blog.php');
        die();
    }
?>

    <!-- ===== Header Section ===== -->
     <header class="category__title">
        <h2>Category Title</h2>
     </header>

    <!--========== Posts Section  ==========-->



    
    <section class="posts">
        <div class="container posts__container">
            <?php while($post = mysqli_fetch_assoc($posts)) : ?>
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./assets/images/<?= $post['thumbnail'] ?>">
                </div>
                <div class="post__info">
                    <a href="<?= ROOT_URL ?>category-posts.php?id=<?= $post['category_id'] ?>" class="category__button"><?= $category['title'] ?></a>
                    <h3 class="post__title">
                        <a href="<?= ROOT_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                    </h3>
                    <p class="post__body">
                        <?= $post['body'] ?>
                        <?= substr($post['body'], 0, 150) ?>...
                    </p>
                    <div class="post__author">
                    <?php
                    // fetch author from users table using author_id
                    $author_id = $post['author_id'];
                    $author_query = "SELECT * FROM users WHERE id=$author_id";
                    $author_result = mysqli_query($connection, $author_query);
                    $author = mysqli_fetch_assoc($author_result);

                    ?>
                        <div class="post__author-avatar">
                            <img src="./assets/images/<?= $author['avatar'] ?>">
                        </div>
                        <div class="post__author-info">
                            <h5>By: <?= "{$author['firstname']} {$author['lastname']}" ?></h5>
                            <small>
                            <?= date("M d, Y - H:i", strtotime($post['date_time'])) ?>
                            </small>
                        </div>
                    </div>
                </div>
            </article>
            <?php endwhile ?>

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

<?php 
    include 'partials/footer.php';
?>
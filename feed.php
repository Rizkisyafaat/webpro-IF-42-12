<?php
    session_start();
    include "database.php";

    $photo = mysqli_query($database,"SELECT * from photo");
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feed | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="keluar.php">
                <!-- Master branch comment -->
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search" id="search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore.html" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="postfoto.php" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.php" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="feed">
        <div class="photo">
            <header class="photo__header">
                <img src="images/gambar11.jpg" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">Rizki Syafaat</span>
                    <span class="photo__location">New York</span>
                </div>
            </header>
            <img src="images/gambar2.jpg" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">9.822 likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">pevita_pearce</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">amandarawles</span> suka banget!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Al-ghazali</span> bro bro!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Caitlin_Halderman</span> semangat!
                    </li>
                </ul>
                <span class="photo__time-ago">2 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <div class="photo">
            <header class="photo__header">
                <img src="images/gambar11.jpg" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">Rizki Syafaat</span>
                    <span class="photo__location">France</span>
                </div>
            </header>
            <img src="images/gambar4.jpg" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </span>
                    <span class="photo__action">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                </div>
                <span class="photo__likes">10.822 likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">Yellow Claw</span> that's cool
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Kanye West</span> good job
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Virgil Abloh</span> nice dude
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Bagaskara</span> mantap
                    </li>
                </ul>
                <span class="photo__time-ago">10 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>



<?php foreach ($photo as $row) : ?>
            <div class="photo">
                <header class="photo__header">
                    <img src="images/<?= $row['url']; ?>" class="photo__avatar" />
                    <div class="photo__user-info">
                        <span class="photo__author"></span>
                        <span class="photo__location">Bandung</span>
                    </div>
                </header>
                <img src="images/<?= $row['url']; ?> " width="598px" height="434px" />
                <div class="photo__info">
                    <div class="photo__actions">
                        <span class="photo__action">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </span>
                        <span class="photo__action">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                    </div>
                    <span class="photo__likes">20.000 likes</span>
                    <ul class="photo__comments">
                        <li class="photo__comment">
                            <span class="photo__comment-author"></span>
                            <?= $row['caption']; ?>
                        </li>
                    </ul>
                    <span class="photo__time-ago">1 hours ago</span>
                    <div class="photo__add-comment-container">
                        <textarea name="comment" placeholder="Add a comment..."></textarea>
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </main>



    </main>
    <footer class="footer">
        <div class="footer__column">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer__column">
            <span class="footer__copyright">© 2017 Vietgram</span>
        </div>
    </footer>
    <!-- codingan searching -->
    <script>
                $(document).ready(function(){
                    $('#search').keyup(function(){
                        var text = $(this).val();
                        $('.photo').hide();
                        $('.photo').each(function(){
                            if($(this).text().toLowerCase().indexOf(""+text+"") != -1 ){
                                $(this).closest('.photo').show();
                            }
                        });
                    });

                   
                });
            </script>
</body>

</html>
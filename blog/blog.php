<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (name, email, comment)
                VALUES ('$name', '$email', '$comment')";
    $result =mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Comment added succesfully.')</script>";
    } else{
        echo "<script>alert('Comment does not add.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gotcha Interior!</title>
    <link rel="stylesheet" href="blog.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <div class="navbar">
                <h1 class="logo"><a href="#hero"> Gotcha Interior !</a></h1>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="closeMenu()"></i>
            <ul >
                <li><a href="index.html">Home</a></li>
                <li><a href="td.html">Typical Designs</a></li>
                <li><a href="pr.html">Price & Reviews</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About us</a></li>
                <input type="text" class="search-button" placeholder="Search here" >
            </ul>
        </div>
       <i class="fa fa-bars" onclick="openMenu()"></i>
        </div>
 



    <!-- blog section -->

    <section id="blog" class="blog">
        <div class="title-text">
            <h1>Blog</h1>
            <p>You can add suggestions or any comments about the website</p>
        </div>
        <div class="wrapper-main">
        <div class="wrapper">
            <form action="" class="form" method="POST">
              <div class="row">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"  placeholder="Enter name" value="<?php echo $name; ?>" required >
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter email" value="<?php echo $email; ?>"  required >
                </div>
              </div>
                <div class="input-group textarea">
                    <label for="comment">Comment</label>
                    <textarea type="text" name="comment"  id="comment"   placeholder="Enter comment"  required> <?php echo $comment; ?></textarea>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Post Comment</button>
                </div>
            </form>
            <div class="prev-comments">
                <?php 

                $sql = "SELECT * FROM comments";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0 ){
                    while ($row = mysqli_fetch_assoc($result)){

                ?>
                <div class="single-item">
                    <h4><?php echo $row['name']; ?></h4>
                    <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                    <p><?php echo $row['comment']; ?></p>
                </div>
             <?php
                    }
                }

                ?>
            </div>
        </div>
    </div>
    </section>


            <footer>
            <div class="social-links">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-youtube-play"></i>
                <p>Copyrights  Gotcha Interior</p>
            </div>
        </footer>
       

    <script>

        // toggle menu 

        var navLinks = document.getElementById("navLinks");

        function openMenu(){
            navLinks.style.right = "0";
        }

        function closeMenu(){
            navLinks.style.right = "-330px";
        }

        

    </script>
</body>
</html>
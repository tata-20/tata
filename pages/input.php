<?php
    include 'koneksi.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO testimoni SET name='$name', email='$email', comment='$comment' ";
    mysqli_query($koneksi,$query);
    header("location:style-demo.html")
?>
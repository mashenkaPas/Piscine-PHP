<!DOCTYPE html>
<?php

include_once("./php/function/sql_function.php");

?>
<html>
<head>
  <!-- CSS part start -->
  <link rel="stylesheet" type="text/css" href="./css/reset.css">
  <link rel="stylesheet" type="text/css" href="./css/index.css">
  <!-- CSS part end -->

  <!-- Title -->
  <title>online_shop</title>
</head>
<body>
  <!-- HTML part start -->
  <div class="main-container">
    <header class="header">
      
    </header>
    <nav class="nav">
      <!-- adding search bar: Chapter 3, class 13 -->
      <ul id="nav-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Sign Up</a></li>
      </ul>
    </nav>
    <aside class="sidebar">
      <div class="side-title">Categories</div>
      <ul class="side-cts">
        <?php getCts(); ?>
        <!-- <li><a href="">aaa</a></li>
        <li><a href="">aaa</a></li>
        <li><a href="">aaa</a></li> -->
      </ul>
    </aside>
    <section class="content">
      
    </section>
    <footer class="footer">
      <h2 style="text-align: center; padding-top: 30px;">&copy; 2019 by chsu & mpas</h2>
    </footer>
  </div>
  <!-- HTML part end -->
  
<!-- JS part start -->
<script src="./js/index.js"></script>
<!-- JS part end -->
</body>
</html>

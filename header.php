<?php
$url = basename($_SERVER["REQUEST_URI"]);
?>


<div class="">
  <!-- <img src="https://unsplash.it/1000/200/?random">
  -->

  <!-- <h1>Wedding Movie</h1> -->
  <!-- <img src="./img/logo-a.png" style="width:200px; height:200px">-->
</div>

<div class="navbar navbar-default">
<div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">Brand</a>
</div>
<div class="navbar-collapse collapse navbar-responsive-collapse">
  <ul class="nav navbar-nav">
    <li <?php echo($url=="index.php" ? "class=active":"");?> >
      <a href="./index.php">メインページ</a>
    </li>
    <li <?php echo($url=="link1.php" ? "class=active":"");?> >
      <a href="./link1.php">サンプル動画を見る</a>
    </li>
    <li <?php echo($url=="link2.php" ? "class=active":"");?> >
      <a href="./link2.php">料金</a>
    </li>
    <li <?php echo($url=="link3.php" ? "class=active":"");?> >
      <a href="./link3.php">製作の流れ</a>
    </li>
    <li <?php echo($url=="link4.php" ? "class=active":"");?> >
      <a href="./link4.php">Q&A</a>
    </li>
    <li <?php echo($url=="link5.php" ? "class=active":"");?> >
      <a href="./link5.php">注文する</a>
    </li>
  </ul>

  <form class="navbar-form navbar-right">
    <input type="text" class="form-control col-lg-8" placeholder="Search"></form>

  <ul class="nav navbar-nav navbar-right">
    <li>
      <a href="./link6.php">お問い合わせ</a>
    </li>
  </ul>

</div>
</div>

<!-- <h1>Breadcrumbs</h1>
<ol class="breadcrumb">
<li>
<a href="#">Home</a>
</li>
<li>
<a href="#">Library</a>
</li>
<li class="active">Data</li>
</ol> -->

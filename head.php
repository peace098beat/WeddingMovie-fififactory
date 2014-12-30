<?php
/*
  Infomation to HTML <HEAD> Tag

  CSS: bootstrap design style
  you can chose.
    - bootstrap
      - original bootstrap
      - bootstrap framework(i.journal, ii.lumen)
    - bootflat

  CSS: your css style
    - style.css

  DEBUG: debug css
  you can debug. plot any block lines.

*/
?>

<?php $spath_bootflat = './css/bootflat/' ?>
<?php $spath_bootstrap = './css/bootstrap/' ?>
<?php $spath_bootstrap_fw = './css/bootstrap-framework/' ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ふぃふぃ工房 | Wedding Movie</title>

  <!-- Bootstrap or Bootstrap Frameworks -->
    <link href="<?php echo $spath_bootstrap ?>/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="<?php echo $spath_bootstrap_fw ?>/bootstrap_journal.css" rel="stylesheet"> -->
    <!-- <link href="<?php echo $spath_bootstrap_fw ?>/bootstrap_lumen.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <!-- Bootflat -->
    <link href="<?php echo $spath_bootflat ?>/css/bootflat.min.css" rel="stylesheet">

  <!-- CSSDEBUG -->
    <!-- <link href="./css/css-debug.css" rel="stylesheet"> -->
  
  <!-- my style css -->
    <link href="./css/style.css" rel="stylesheet">

  <!-- google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">

</head>

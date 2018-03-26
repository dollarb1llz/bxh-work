<!doctype html>
<html>
<head>
  <title><?= $page_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="./res/img/fav.ico" rel="icon" type="image/x-icon" />
  <link href="./res/css/reset.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link href="./res/css/style.css" rel="stylesheet" type="text/css" />
  <link href="./res/css/banners.css" rel="stylesheet" type="text/css" />
  <link href="./res/css/colors.css" rel="stylesheet" type="text/css" />
</head>
<body>

  <header>

    <div class="desktop">
      <img src="./res/img/logo.png" />
      <span>P.R.E.P.</span>
    </div>

    <nav>
      <ul class="desktop">
        <li><a href="./index.php">Ideas</a></li>
        <li><a href="./today.php">Today</a></li>
        <li><a href="./plan.php">Tomorrow</a></li>
        <li id="checklist">
          <a href="./checklist.php">Checklist
          <span><i class="fa fa-caret-down"></i></span> </a>
            <ul>
              <li><a href="./food.php">Food</a></li>
              <li><a href="./support.php">Support</a></li>
              <li><a href="./bball.php">Basketball</a></li>
              <li><a href="./skate.php">Skateboard</a></li>
              <li><a href="./strength.php">Strength</a></li>
              <li><a href="./guitar.php">Guitar</a></li>
              <li><a href="./mind.php">Mind</a></li>
            </ul>
        </li>
        <li><a href="./archive.php">  Archive</a></li>
      </ul>

      <ul class="mobile">
        <li><img src="./res/img/logo.png" /></li>
        <li><a href="./navigation.php">Navigate</a></li>
      </ul>
    </nav>

  </header>

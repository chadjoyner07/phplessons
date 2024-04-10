<?php
 session_start();
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="calculator.php">Calculator</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendar.php">Calendar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="conditionals.php">Conditionals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datatypes.php">Datatypes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="functions.php">Functions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="loops.php">Loops</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="operators.php">Operators</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
<?php
    $_SESSION['username'] = "ChadJ4908";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])){
        echo "You are not logged in!";
    } else {
        echo "You are logged in!";
    }

    ?>
</body>
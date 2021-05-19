<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/logo.jpeg" height="40px" width="45px"> Street Beams</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php if($page == "index"){echo "active";} ?>"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item <?php if($page == "about"){echo "active";} ?>"><a href="about.php" class="nav-link">About</a></li>
        <li class="nav-item <?php if($page == "event"){echo "active";} ?>"><a href="event.php" class="nav-link">Events</a></li>
        <li class="nav-item <?php if($page == "contact"){echo "active";} ?>"><a href="contact.php" class="nav-link">Contact</a></li>
    </ul>
    </div>
</div>
</nav>
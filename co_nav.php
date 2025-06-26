<body>
  <!-- ================ Start Header Area ================= -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <p class="light">InternMatch 2.0</p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <!-- Dropdown -->
            <!-- <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Pages
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="elements.php">Elements</a>
                <a class="dropdown-item" href="course-details.php">Course Details</a>
              </div>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                Blog
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="blog-home.php">Blog Home</a>
                <a class="dropdown-item" href="blog-single.php">Blog Details</a>
              </div>
            </li> -->
            <li><a href="contacts.php">Contacts</a></li>
            <li><a href="signup.php">Sign-up</a></li>
            <!-- <li><a href='signin.php'>Sign-in</a></li> -->
            <!--==================================== SIGNIN OR LOGOUT ===================================-->
            <?php
            if (isset($_SESSION['u_id']) && isset($_SESSION['u_name'])) {
              $session = $_GET['ses'];
              echo "$session";
            } else {
              echo "<li><a href='signin.php'>Sign-in</a></li>";
            }
            ?>
            <!-- =============================================================== -->
            <!-- <?php
            // if ($session = $_GET['ses'];) {
            //   echo "<li><a href='signin.php'>Sign-in</a></li>$session";
            // } else {
            //   echo "";
            // }
            ?> -->
            <!--==================================== SIGNIN OR LOGOUT ===================================-->
            <li>
              <button class="search">
                <span class="lnr lnr-magnifier" id="search"></span>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div>
  </header>
  <!-- ================ End Header Area ================= -->
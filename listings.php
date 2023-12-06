<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="listings.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&family=Montserrat&family=Poppins:wght@400;500&display=swap" rel="stylesheet" />
  <title>Listings</title>
</head>

<body>
  <div class="main">
    <nav class="navbar">
      <div class="logo">
        <img src="/images/tiny__logo.svg" alt="404" id="logo__img" />
      </div>
      <div class="menu-toggle">
        <ul class="nav-links">
          <li><a href="index.html">HOME</a></li>
          <li><a href="#Projects">PROJECTS</a></li>
          <li><a href="#About">ABOUT US</a></li>
          <li><a href="contact.html">CONTACT US</a></li>
        </ul>
      </div>
    </nav>
    <div class="hero">
      <div class="title">
        <h2>LISTINGS</h2>
      </div>
      <div class="overlay"></div>
      <img src="/images/blog-banner.png" alt="404" id="hero" />
    </div>
    <div class="grid-container">
      <div class="listings">
        <?php
        // Connect to the database (assuming MySQL)
        $connection = mysqli_connect("localhost", "root", "password", "listings_db");

        // Fetch listings from the database
        $query = "SELECT * FROM listings_table";
        $result = mysqli_query($connection, $query);

        // Display listings
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="listing">';
          echo '<div class="listing-img">';
          echo '<img src="' . $row['image_path'] . '" alt="Listing Image" id="listing_pic" />';
          echo '<div class="info">';
          echo '<div class="dot"></div>';
          echo '<h4>$' . $row['price'] . '</h4>';
          echo '<div class="listing-info">';
          echo '<p>Beds ' . $row['bed'] . '</p>';
          echo '<p>Baths ' . $row['bath'] . '</p>';
          echo '<p>' . $row['sq_ft'] . '  sqft</p>';
          // Include more details if needed
          echo '</div></div></div></div>';
        }

        // Close the connection
        mysqli_close($connection);
        ?>
      </div>
    </div>
  </div>
</body>

</html>
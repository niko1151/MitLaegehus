<!doctype html>
<html>
    <head>
    <title><?= $title; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-87DrmpqHRiY8hPLIr7ByqhPIywuSsjuQAfMXAE0sMUpY3BM7nXjf+mLIUSvhDArs" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel='icon' href="https://img.icons8.com/cotton/64/000000/empty-delivery-scooter.png" />
    <style>
      .topBar{
        background-color: blue; color: white;
      }

      body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: #f2f2f2;
      padding: 10px;
    }

    .navbar ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: flex-end;
    }

    .navbar li {
      margin-right: 10px;
    }

    .navbar li:last-child {
      margin-right: 0;
    }

    .navbar a {
      text-decoration: none;
      padding: 8px 16px;
      color: #333;
    }

    .navbar a:hover {
      background-color: #ddd;
    }

    .footer {
      background-color: #f2f2f2;
      padding: 20px;
      text-align: center;
    }

    .footer p {
      margin: 0;
      font-size: 14px;
    }

    .footer ul {
      list-style-type: none;
      padding: 0;
      margin-top: 10px;
    }

    .footer ul li {
      display: inline;
      margin: 0 5px;
    }

    .footer ul li a {
      text-decoration: none;
      color: #333;
    }

    .footer ul li a:hover {
      color: #999;
    }
    </style>

    <meta charset="utf-8">
    </head>

    <body>
    <div class="header">	
		  <div class="topBar">Mit Lægehus</div>
    </div>
    <div class="navbar">
    <ul>
      <li><a href="/MitLaegehus">Forside</a></li>
      <li><a href="about">Om os</a></li>
      <li><a href="services">Tjenester</a></li>
      <li><a href="contact">Kontakt</a></li>
      <li><a href="booking">Booking</a></li>
      <li><a href="login">Log ind</a></li>
    </ul>
    </div>

    <main role="main" class="container">

      <?php
      echo $body_content;
      ?>

    </main>

    <footer class="footer">
      <p>Mit  Lægehus</p>
      <p>Telegrafvej 9, 2750 Ballerup</p>
      <ul>
        <li><a href="/MitLaegehus">Forside</a></li>
        <li><a href="about">Om os</a></li>
        <li><a href="services">Tjenester</a></li>
        <li><a href="contact">Kontakt</a></li>
        <li><a href="booking">Booking</a></li>
        <li><a href="login">Log ind</a></li>
      </ul>
      <p>&copy; <?php echo date('Y'); ?> Min Hjemmeside. Alle rettigheder forbeholdes.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.2/handlebars.min.js" integrity="sha256-MlbTFXdOM7EZphnz0OyXQqPt2zBOjfRXCq14CfgSsS0=" crossorigin="anonymous"></script>
</body>
</html>
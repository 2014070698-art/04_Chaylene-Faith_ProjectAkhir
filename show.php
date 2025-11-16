<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show data</title>
    <link rel="stylesheet" href='style.css'/>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    <style>
      html, body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    }
      body {
    padding-top: 80px;
    overflow-x: hidden;
    display: flex;
    flex-direction: column;
    }
    main{
      flex: 1;
    }

    table {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    border-radius: 12px;
    overflow: hidden;
    font-family: "Times New Roman", Times, serif;
    width: 90%; 
    margin: auto;
    text-align: center;
    }


    th {
        background-color: black !important;
        color: white !important;
        font-size: 18px;
        text-transform: uppercase;
    }

    td {
        background-color: #fafafa;
        padding: 12px;
        font-size: 16px;
    }

    /* Hover row effect */
    tr:hover td {
        background-color: #ffe6e6;
    }


.my-footer {
   width: 100%;
    background-color: #000000;
    color: white;
    text-align: center;
    padding: 20px 0;
    font-family: 'Poppins', sans-serif;
    margin-top: auto;
}

.my-footer p {
    margin: 5px 0;
}

.footer-title {
    font-weight: 600;
    font-size: 16px;
}

.footer-creator {
    font-weight: 300;
    font-size: 14px;
}

.footer-tagline {
    font-style: italic;
    font-size: 13px;
    opacity: 0.8;
}
</style>
</head>
<body style="background-image: url(bg.png);">

        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;">
                <div class="container-fluid">
                    <img src="logo.png" alt="Logo" style="height: 40px; margin-right: 10px;">
                  <a style="color: black; font-family: fantasy; padding-top: 10px;" class="navbar-brand" href="#"><b>DoReMiSing</b></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a style="color: black;" class="nav-link" href="info.php">Record Track</a>
                      </li>
                      <li class="nav-item">
                        <a style="color: black;" class="nav-link" href="show.php"><b>Records</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="login-btn" style="text-align: center" href="index.php"><b>Log Out</b></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>

            <main>


    <br/>
    <br/>
    <table border="1"; class="">
        <tr> 
            <th>Artist</th>
            <th>Genre</th>
            <th>Song</th>
            <th>Album</th>
            <th>Songs listened</th>
            <th>Reasons</th>
        </tr> 
        <?php
        include "koneksi.php";
        $proyekakhir = mysqli_query($koneksi,"select * from info");
        while($d = mysqli_fetch_array($proyekakhir)){
            ?>
            <tr>
                <td><?php echo $d['artist']; ?></td>
                <td><?php echo $d['genre']; ?></td>
                <td><?php echo $d['song']; ?></td>
                <td><?php echo $d['album']; ?></td>
                <td><?php echo $d['many']; ?></td>
                <td><?php echo $d['why']; ?></td>
                <td>
                    <a href="update.php?artist=<?php echo $d['artist']; ?>"><b>UPDATE</b></a>
                    <a href="delete.php?artist=<?php echo $d['artist']; ?>"><b>DELETE</b></a>
                </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </main>


<footer class="my-footer">
    <p class="footer-title">DoReMiSing © 2025</p>
    <p class="footer-creator">Created by Chaylene Faith</p>
    <p class="footer-tagline">"Feel the Beat, Live the Melody."</p>
</footer>



</body>
</html>
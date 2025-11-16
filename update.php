<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
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
            background-color: #f9f9f9;
            background-image: url(bg.png);
    padding-top: 80px;
    overflow-x: hidden;
    display: flex;
    flex-direction: column;
        }
    main{
      flex: 1;
    }

        h2 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        fieldset {
            width: 60%;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
            border: 2px solid #520000ff;
            background: white;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.15);
        }

        legend {
            font-size: 20px;
            font-weight: bold;
        }

        table {
            font-family: "Times New Roman", serif;
            width: 100%;
            font-size: 18px;
        }

        td {
            padding: 12px 0;
        }

        td:first-child {
            width: 40%;
            font-weight: bold;
        }

        input[type="text"],
        input[type="int"] {
            width: 100%;
            padding: 8px 10px;
            border-radius: 6px;
            border: 1px solid #904141ff;
            font-family: "Times New Roman", serif;
        }

        .save {
            width: 100%
            padding: 10px;
            background: black;
            color: white;
            border: none;
            border-radius: 8px; 
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
        }

        .save:hover {
            background:  #6a0000ff;
            cursor: pointer;
        }

        .kembali {
            display: inline-block;
        margin-left: 20%;
        padding: 8px 16px;
        border: 2px solid black;    
        border-radius: 6px;          
        text-decoration: none;
        color: black;
        font-weight: bold;
        transition: 0.3s;
        background: white;
        }

        .kembali:hover {
        color: white;
        background: #980000ff;
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
    
</head>
<body>

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
                        <a style="color: black;" class="nav-link" href="info.php"><b>Record Track</b></a>
                      </li>
                      <li class="nav-item">
                        <a style="color: black;" class="nav-link" href="show.php">Records</a>
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


    <h2>UPDATE DATA</h2>
    <br/>
    <a href="show.php" class="kembali">kembali</a>
    <br/>
    <br/>

    <?php
    include 'koneksi.php';
    $artist = $_GET['artist'];
    $proyekakhir = mysqli_query($koneksi, "SELECT * FROM info WHERE artist='$artist'");
    while($d = mysqli_fetch_array($proyekakhir)){
        ?>
        <form method="post" action="ubah.php">
        <fieldset>
                <legend>EDIT DATA</legend><br/>
            <table>
                <tr>
                    <td>Farvorite Artist: </td>
                    <td>
                        <input type='hidden' name="artist" value="<?php echo $d['artist'];?>">
                        <input type="text" name="artist" value="<?php echo $d['artist'];?>"></td>
        </tr>
                <tr>
                    <td>Farvorite Genre: </td>
                    <td><input type="text" name="genre" value="<?php echo $d['genre'];?>"></td>
        </tr>
                <tr>
                    <td>Farvorite Song:</td>
                    <td><input type="text" name="song" value="<?php echo $d['song'];?>"></td>
        </tr>
                <tr>
                    <td>Farvorite Album: </td>
                    <td><input type="text" name="album" value="<?php echo $d['album'];?>"></td>
        </tr>
                <tr>
                    <td>Songs listened: </td>
                    <td><input type="int" name="many" value="<?php echo $d['many'];?>"><td>
        </tr>
                <tr>
                     <td>Why do you love music</td>
                    <td><input type="text" name="why" value="<?php echo $d['why'];?>"><td>
        </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN" class="save"></td>
                    <input type='hidden' name="artist" value="<?php echo $d['artist'];?>">      
        </tr>
            </table>
        </fieldset>
    </form>
        <?php
        
    }
    ?>

</main>
    
<footer class="my-footer">
    <p class="footer-title">DoReMiSing © 2025</p>
    <p class="footer-creator">Created by Chaylene Faith</p>
    <p class="footer-tagline">"Feel the Beat, Live the Melody."</p>
</footer>



</body>
</html>
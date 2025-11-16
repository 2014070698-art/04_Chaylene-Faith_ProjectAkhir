<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
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
    background-image: url(bg.png);
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
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* MAIN */
        main {
            margin-top: 70px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
            text-align: center;
            font-weight: bold;
            flex: 1;
        }

        /* CARD */
        .info-box {
            background: white;
            width: 550px;
            padding: 50px;
            border-radius: 50px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            text-align: left;
        }

        .info-box h2 {
            text-align: center;
            font-size: 40px;
            margin-bottom: 20px;
        }

        .row {
            margin-bottom: 20px;
        }

        .row label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        .row input {
            width: 100%;
            padding: 15px;
            font-size: 17px;
            border-radius: 50px;
            border: 1px solid #ccc;
        }

        .row input:focus {
            border-color: #a00000ff;
            outline: none;
            box-shadow: 0 0 5px #ff4c4cff;
                }
        .save {
            padding: 10px 40px;/* panjangin tombol */ 
            background-color: #680000ff;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        /* efek hover merah */
        .save:hover {
            background-color: red;
            color: white;
        
        }

        input {
    font-family: "Times New Roman", Times, serif;
}

    </style>

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

            <div class="info-box">
    <h2 style="text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25); font-family: cursive;"  >About You </h2>
    <form method="post" action="aksiinfo.php">
        <fieldset>
            <table>
                <tr>
                    <td style="padding-bottom: 30px;">Farvorite Artist: </td>
                    <td style="padding-bottom: 30px;"><input type="text" name="artist"></td>
        </tr>
                <tr>
                    <td  style="padding-bottom: 30px;">Farvorite Genre: </td>
                    <td  style="padding-bottom: 30px;"><input type="text" name="genre"></td>
        </tr>
                <tr>
                    <td  style="padding-bottom: 30px;">Farvorite Song: </td>
                    <td  style="padding-bottom: 30px;"> <input type="text" name="song"></td>
        </tr>
                <tr>
                    <td  style="padding-bottom: 30px;">Farvorite Album: </td>
                    <td  style="padding-bottom: 30px;"><input type="text" name="album"></td>
        </tr>
                <tr>
                    <td  style="padding-bottom: 30px;"> Songs listened:</td>
                    <td style="padding-bottom: 30px;"><input type="int" name="many"></td>
        </tr>
                <tr>
                    <td  style="padding-bottom: 30px; padding-right: 40px;">Why do you love music</td>
                    <td  style="padding-bottom: 30px;"><input type="text" name="why"></td>
        </tr>
                <tr>
                    <td ></td>
                    <td><input type="submit" value="save" class="save"></td>       
        </tr>
            </table>
        </fieldset>
    </form>
    </div>
</main>


<footer class="my-footer">
    <p class="footer-title">DoReMiSing © 2025</p>
    <p class="footer-creator">Created by Chaylene Faith</p>
    <p class="footer-tagline">"Feel the Beat, Live the Melody."</p>
</footer>



</body>
</html>
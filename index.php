<!DOCTYPE html>

<?php

$VTema = "Base";
if (isset($_POST["tema"]))
  $VTema = $_POST["tema"];

if (!file_exists("./$VTema/jquery-ui-1.12.1.custom/jquery-ui.min.js")) {
  $VTema = "Base";
  echo "Nâo existe";
}

$VIdioma = "pt-BR";
if (isset($_POST["idioma"]))
  $VIdioma = $_POST["idioma"];

if ($VIdioma != "en-US" && !file_exists("./i18n/datepicker-$VIdioma.js")) {
  $VIdioma = "pt-BR";
  echo "Nâo existe";
}

$VTamanho = 12;
if (isset($_POST["tamanho"]))
  $VTamanho = $_POST["tamanho"];
?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="./<?php echo $VTema; ?>/jquery-ui-1.12.1.custom/jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="./<?php echo $VTema; ?>/jquery-ui-1.12.1.custom/jquery-ui.min.js" type="text/javascript"></script>

  <?php if ($VIdioma != "en-US") { ?>
    <script src="./i18n/datepicker-<?php echo $VIdioma; ?>.js" type="text/javascript"></script>
  <?php } ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <script src="script.js" type="text/javascript"></script>

  <title>Data Datepicker JS</title>

</head>
<body>
  <div class="container-fluid mt-5">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">

        <div class="card mb-4">
          <div class="card-body">

            <div class="form-group row">
              <label for="STema" class="col-form-label col-form-label-sm col-4 px-0 text-right">Tema</label>
              <div class="input-group input-group-sm col-8">
                <select id="STema" class="form-control form-control-sm" aria-label="Tema">
                  <option <?php echo $VTema == "Base" ? "selected" : ""; ?>>Base</option>
                  <option <?php echo $VTema == "Black Tie" ? "selected" : ""; ?>>Black Tie</option>
                  <option <?php echo $VTema == "Blitzer" ? "selected" : ""; ?>>Blitzer</option>
                  <option <?php echo $VTema == "Cupertino" ? "selected" : ""; ?>>Cupertino</option>
                  <option <?php echo $VTema == "Dark Hive" ? "selected" : ""; ?>>Dark Hive</option>
                  <option <?php echo $VTema == "Dot Luv" ? "selected" : ""; ?>>Dot Luv</option>
                  <option <?php echo $VTema == "Eggplant" ? "selected" : ""; ?>>Eggplant</option>
                  <option <?php echo $VTema == "Excite Bike" ? "selected" : ""; ?>>Excite Bike</option>
                  <option <?php echo $VTema == "Flick" ? "selected" : ""; ?>>Flick</option>
                  <option <?php echo $VTema == "Hot Sneaks" ? "selected" : ""; ?>>Hot Sneaks</option>
                  <option <?php echo $VTema == "Humanity" ? "selected" : ""; ?>>Humanity</option>
                  <option <?php echo $VTema == "Le Frog" ? "selected" : ""; ?>>Le Frog</option>
                  <option <?php echo $VTema == "Mint Choc" ? "selected" : ""; ?>>Mint Choc</option>
                  <option <?php echo $VTema == "Overcast" ? "selected" : ""; ?>>Overcast</option>
                  <option <?php echo $VTema == "Papper Grinder" ? "selected" : ""; ?>>Papper Grinder</option>
                  <option <?php echo $VTema == "Redmond" ? "selected" : ""; ?>>Redmond</option>
                  <option <?php echo $VTema == "Smoothness" ? "selected" : ""; ?>>Smoothness</option>
                  <option <?php echo $VTema == "South Street" ? "selected" : ""; ?>>South Street</option>
                  <option <?php echo $VTema == "Start" ? "selected" : ""; ?>>Start</option>
                  <option <?php echo $VTema == "Sunny" ? "selected" : ""; ?>>Sunny</option>
                  <option <?php echo $VTema == "Swanky Purse" ? "selected" : ""; ?>>Swanky Purse</option>
                  <option <?php echo $VTema == "Tronstastic" ? "selected" : ""; ?>>Tronstastic</option>
                  <option <?php echo $VTema == "UI Darkness" ? "selected" : ""; ?>>UI Darkness</option>
                  <option <?php echo $VTema == "UI Lightness" ? "selected" : ""; ?>>UI Lightness</option>
                  <option <?php echo $VTema == "Vader" ? "selected" : ""; ?>>Vader</option>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="SIdioma" class="col-form-label col-form-label-sm col-4 px-0 text-right">Idioma</label>
              <div class="input-group input-group-sm col-8">
                <select id="SIdioma" class="form-control form-control-sm" aria-label="Tema">
                  <option <?php echo $VIdioma == "af" ? "selected" : ""; ?>>af</option>
                  <option <?php echo $VIdioma == "ar-DZ" ? "selected" : ""; ?>>ar-DZ</option>
                  <option <?php echo $VIdioma == "ar" ? "selected" : ""; ?>>ar</option>
                  <option <?php echo $VIdioma == "az" ? "selected" : ""; ?>>az</option>
                  <option <?php echo $VIdioma == "be" ? "selected" : ""; ?>>be</option>
                  <option <?php echo $VIdioma == "bg" ? "selected" : ""; ?>>bg</option>
                  <option <?php echo $VIdioma == "bs" ? "selected" : ""; ?>>bs</option>
                  <option <?php echo $VIdioma == "ca" ? "selected" : ""; ?>>ca</option>
                  <option <?php echo $VIdioma == "cs" ? "selected" : ""; ?>>cs</option>
                  <option <?php echo $VIdioma == "cy-GB" ? "selected" : ""; ?>>cy-GB</option>
                  <option <?php echo $VIdioma == "da" ? "selected" : ""; ?>>da</option>
                  <option <?php echo $VIdioma == "de-AT" ? "selected" : ""; ?>>de-AT</option>
                  <option <?php echo $VIdioma == "de" ? "selected" : ""; ?>>de</option>
                  <option <?php echo $VIdioma == "el" ? "selected" : ""; ?>>el</option>
                  <option <?php echo $VIdioma == "en-AU" ? "selected" : ""; ?>>en-AU</option>
                  <option <?php echo $VIdioma == "en-GB" ? "selected" : ""; ?>>en-GB</option>
                  <option <?php echo $VIdioma == "en-NZ" ? "selected" : ""; ?>>en-NZ</option>
                  <option <?php echo $VIdioma == "en-US" ? "selected" : ""; ?>>en-US</option>
                  <option <?php echo $VIdioma == "eo" ? "selected" : ""; ?>>eo</option>
                  <option <?php echo $VIdioma == "es" ? "selected" : ""; ?>>es</option>
                  <option <?php echo $VIdioma == "et" ? "selected" : ""; ?>>et</option>
                  <option <?php echo $VIdioma == "eu" ? "selected" : ""; ?>>eu</option>
                  <option <?php echo $VIdioma == "fa" ? "selected" : ""; ?>>fa</option>
                  <option <?php echo $VIdioma == "fi" ? "selected" : ""; ?>>fi</option>
                  <option <?php echo $VIdioma == "fo" ? "selected" : ""; ?>>fo</option>
                  <option <?php echo $VIdioma == "fr-CA" ? "selected" : ""; ?>>fr-CA</option>
                  <option <?php echo $VIdioma == "fr-CH" ? "selected" : ""; ?>>fr-CH</option>
                  <option <?php echo $VIdioma == "fr" ? "selected" : ""; ?>>fr</option>
                  <option <?php echo $VIdioma == "gl" ? "selected" : ""; ?>>gl</option>
                  <option <?php echo $VIdioma == "he" ? "selected" : ""; ?>>he</option>
                  <option <?php echo $VIdioma == "hi" ? "selected" : ""; ?>>hi</option>
                  <option <?php echo $VIdioma == "hr" ? "selected" : ""; ?>>hr</option>
                  <option <?php echo $VIdioma == "hu" ? "selected" : ""; ?>>hu</option>
                  <option <?php echo $VIdioma == "hy" ? "selected" : ""; ?>>hy</option>
                  <option <?php echo $VIdioma == "id" ? "selected" : ""; ?>>id</option>
                  <option <?php echo $VIdioma == "is" ? "selected" : ""; ?>>is</option>
                  <option <?php echo $VIdioma == "it-CH" ? "selected" : ""; ?>>it-CH</option>
                  <option <?php echo $VIdioma == "it" ? "selected" : ""; ?>>it</option>
                  <option <?php echo $VIdioma == "ja" ? "selected" : ""; ?>>ja</option>
                  <option <?php echo $VIdioma == "ka" ? "selected" : ""; ?>>ka</option>
                  <option <?php echo $VIdioma == "kk" ? "selected" : ""; ?>>kk</option>
                  <option <?php echo $VIdioma == "km" ? "selected" : ""; ?>>km</option>
                  <option <?php echo $VIdioma == "ko" ? "selected" : ""; ?>>ko</option>
                  <option <?php echo $VIdioma == "ky" ? "selected" : ""; ?>>ky</option>
                  <option <?php echo $VIdioma == "lb" ? "selected" : ""; ?>>lb</option>
                  <option <?php echo $VIdioma == "lt" ? "selected" : ""; ?>>lt</option>
                  <option <?php echo $VIdioma == "lv" ? "selected" : ""; ?>>lv</option>
                  <option <?php echo $VIdioma == "mk" ? "selected" : ""; ?>>mk</option>
                  <option <?php echo $VIdioma == "ml" ? "selected" : ""; ?>>ml</option>
                  <option <?php echo $VIdioma == "ms" ? "selected" : ""; ?>>ms</option>
                  <option <?php echo $VIdioma == "nb" ? "selected" : ""; ?>>nb</option>
                  <option <?php echo $VIdioma == "nl-BE" ? "selected" : ""; ?>>nl-BE</option>
                  <option <?php echo $VIdioma == "nl" ? "selected" : ""; ?>>nl</option>
                  <option <?php echo $VIdioma == "nn" ? "selected" : ""; ?>>nn</option>
                  <option <?php echo $VIdioma == "no" ? "selected" : ""; ?>>no</option>
                  <option <?php echo $VIdioma == "pl" ? "selected" : ""; ?>>pl</option>
                  <option <?php echo $VIdioma == "pt-BR" ? "selected" : ""; ?>>pt-BR</option>
                  <option <?php echo $VIdioma == "pt" ? "selected" : ""; ?>>pt</option>
                  <option <?php echo $VIdioma == "rm" ? "selected" : ""; ?>>rm</option>
                  <option <?php echo $VIdioma == "ro" ? "selected" : ""; ?>>ro</option>
                  <option <?php echo $VIdioma == "ru" ? "selected" : ""; ?>>ru</option>
                  <option <?php echo $VIdioma == "sk" ? "selected" : ""; ?>>sk</option>
                  <option <?php echo $VIdioma == "sl" ? "selected" : ""; ?>>sl</option>
                  <option <?php echo $VIdioma == "sq" ? "selected" : ""; ?>>sq</option>
                  <option <?php echo $VIdioma == "sr-SR" ? "selected" : ""; ?>>sr-SR</option>
                  <option <?php echo $VIdioma == "sr" ? "selected" : ""; ?>>sr</option>
                  <option <?php echo $VIdioma == "sv" ? "selected" : ""; ?>>sv</option>
                  <option <?php echo $VIdioma == "ta" ? "selected" : ""; ?>>ta</option>
                  <option <?php echo $VIdioma == "th" ? "selected" : ""; ?>>th</option>
                  <option <?php echo $VIdioma == "tj" ? "selected" : ""; ?>>tj</option>
                  <option <?php echo $VIdioma == "tr" ? "selected" : ""; ?>>tr</option>
                  <option <?php echo $VIdioma == "uk" ? "selected" : ""; ?>>uk</option>
                  <option <?php echo $VIdioma == "vi" ? "selected" : ""; ?>>vi</option>
                  <option <?php echo $VIdioma == "zh-CN" ? "selected" : ""; ?>>zh-CN</option>
                  <option <?php echo $VIdioma == "zh-HK" ? "selected" : ""; ?>>zh-HK</option>
                  <option <?php echo $VIdioma == "zh-TW" ? "selected" : ""; ?>>zh-TW</option>
                </select>
              </div>
            </div>

            <div class="form-group row mb-0">
              <label for="ITamanho" class="col-form-label col-form-label-sm col-4 px-0 text-right">Tamanho</label>
              <div class="input-group input-group-sm col-8">
                <input id="ITamanho" type="range" class="form-range" value="<?php echo $VTamanho; ?>" min="9" max="16">
                <label id="LTamanho" for="ITamanho" class="col-form-label col-form-label-sm col-4 px-0 text-right"></label>
              </div>
            </div>

          </div>
        </div>

        <div class="card">
          <div class="card-body">

            <div class="form-group row">
              <label for="IData" class="col-form-label col-form-label-sm col-4 px-0 text-right">Data</label>
              <div class="input-group input-group-sm col-8">
                <input id="IData" type="text" class="form-control form-control-sm"  aria-label="Data" aria-describedby="BData" disabled>
                <div class="input-group-append">
                  <button id="BData" class="btn btn-outline-dark" type="button" >
                    <img id="ImgData" src="black-date.png" alt="Data" class="img-fluid">
                  </button>
                </div>
              </div>
            </div>

            <div class="form-group row mb-0">
              <label for="IEvento" class="col-form-label col-form-label-sm col-4 px-0 text-right">Evento nº</label>
              <div class="input-group input-group-sm col-8">
                <input id="IEvento" type="text" class="form-control form-control-sm" placeholder="Quantidade de alterações" aria-label="Evento" disabled>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
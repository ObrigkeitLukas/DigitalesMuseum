<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Digitales Museum</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<link rel="stylesheet" href="./css/custom_styles.css">-->
    <script src="./mehrLiteratur.js" type="text/javascript"></script>
</head>
<body>
<?php
require("./navbar.php");
?>
<br/>
<br/>
<div class="container">
    <div class="page-header">
        <h1>Neue Pers&ouml;nlichkeit hinzuf&uuml;gen</h1>
    </div>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class="col-md-4 col-md-offset-4 col-custom">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" action="newPerson.php" method="post" enctype='multipart/form-data'>
                            <fieldset>
                                <div class="form-group">
                                    <label for="vorname">Vorname: *</label>
                                    <input type="text" placeholder="Vorname" class="form-control form-control-custom" name="vorname" required>
                                </div>
                                <div class="form-group">
                                    <label for="nachname">Nachname: *</label>
                                    <input type="text" placeholder="Nachname" class="form-control form-control-custom" name="nachname" required>
                                </div>
                                <div class="form-group">
                                    <label for="gebDat">Geburtsdatum: *</label>
                                    <input type="text" placeholder="dd-mm-yyyy" class="form-control form-control-custom" name="gebDat" required>
                                </div>
                                <div class="form-group">
                                    <label for="todDat">Todesdatum: </label>
                                    <input type="text" placeholder="dd-mm-yyyy" class="form-control form-control-custom" name="todDat">
                                </div>
                                <div class="form-group">
                                    <label for="alter">Alter: *</label>
                                    <input type="text" placeholder="0-150" class="form-control form-control-custom" name="alter" required>
                                </div>
                                <div class="form-group">
                                    <label for="zitat">Zitat: *</label>
                                    <input type="text" placeholder="Zitat" class="form-control form-control-custom" name="zselbst">
                                    <input type="date" placeholder="dd-mm-yyyy" class="form-control form-control-custom" name="zdatum"
                                           pattern="^(31|30|0[1-9]|[12][0-9]|[1-9])\-(0[1-9]|1[012]|[1-9])\-((18|19|20)\d{2}|\d{2})$">
                                    <input type="text" placeholder="Quelle" class="form-control form-control-custom" name="zquelle">
                                </div>
                                <div class="form-group">
                                    <label for="text">Text: *</label>
                                    <textarea name="text" cols="35" rows="4" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="film">Film: </label>
                                    <input type="file" accept="video/*" class="form-control-custom" name="film">
                                </div>
                                <div class="form-group">
                                    <label for="poster">Poster: *</label>
                                    <input type="file" accept="image/*" class="form-control-custom" name="poster" required>
                                </div>
                                <div class="form-group">
                                    <label for="bild">Bilder: *</label>
                                    <input type="file" accept="image/*" class="form-control-custom" name="bild_daten" multiple required>
                                </div>
                                <div class="form-group">
                                    <label for="kategorie">Kategorie: *</label><br>
                                    <input type="radio" id="kat1" name="Kategorie" value="Kla" checked>
                                    <label for="k1">Klassiker</label><br>
                                    <input type="radio" id="kat2" name="Kategorie" value="Pro">
                                    <label for="k2">Professionalisierung</label><br>
                                    <input type="radio" id="kat3" name="Kategorie" value="Wis">
                                    <label for="k3">Wissenschaft</label>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="count" value="1" />
                                    <div class="control-group" id="fields">
                                        <label class="control-label" for="field1">Literatur: *</label>
                                        <div class="controls" id="profs">
                                            <div id="field">
                                                <button id="b1" class="btn btn-form btn-group add-more btn-lit" type="button">+</button>
                                                <input class="input form-control form-control-lit" id="ltitel1" name="ltitel1" type="text" placeholder="Titel" required/>
                                                <input class="input form-control form-control-lit" id="lstadt1" name="lstadt1" type="text"  placeholder="Stadt" required />
                                                <input class="input form-control form-control-lit" id="lverlag1" name="lverlag1" type="text"  placeholder="Verlag" required />
                                                <input class="input form-control form-control-lit" id="lauflage1" name="lauflage1" type="text"  placeholder="Auflage" required />
                                                <input class="input form-control form-control-lit" id="ljahr1" name="ljahr1" type="text"  placeholder="Jahr" required />
                                                <input class="input form-control form-control-lit" id="lautor1" name="lautor1" type="text"  placeholder="Autor" required />
                                                <input class="input form-control form-control-lit" id="lseiten1" name="lseiten1" type="text"  placeholder="Seiten" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-group">Pers&ouml;nlichkeit hinzuf&uuml;gen</button>
                                    <div class="small register">
                                        * = Pflichtfelder
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

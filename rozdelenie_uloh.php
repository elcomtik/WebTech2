<?php
/**
 * Created by PhpStorm.
 * User: eentox
 * Date: 5/13/17
 * Time: 1:00 PM
 */
include_once 'session.php';
if (!isset($_SESSION['name'])) {
    header('location: index.php');
}
?>
<head>
    <?php
    include_once 'includes.php';
    ?>
</head>
<body>
<?php
include_once 'menu.php';
?>

<div class="container-fluid col-lg-8 col-lg-offset-2">
    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Úloha</th>
            <th class="text-center">kpt. Roman Danko</th>
            <th class="text-center">Sabina Fraňová</th>
            <th class="text-center">Adam Podhradský</th>
            <th class="text-center">Erik Pribula</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Github</td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Responzívny design</td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
        </tr>
        <tr>
            <td>Preklady</td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
        </tr>
        <tr>
            <td>Menu</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
        </tr>
        <tr>
            <td>Titulná stránka</td>
            <td></td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
        </tr>
        <tr>
            <td>Päta stránok</td>
            <td></td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td></td>
        </tr>
        <tr>
            <td>Pracovníci</td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Výskum/Projekty</td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Kontakt</td>
            <td></td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td></td>
        </tr>
        <tr>
            <td>Fotogaléria</td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Videá</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
        </tr>
        <tr>
            <td>Médiá</td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Prihlásenie do intranetu</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
        </tr>
        <tr>
            <td>Pedagogika</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Doktoranti</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Publikácie</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Služobné cesty</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Nákupy</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Dochádzka</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Rozdelenie úloh</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="text-center"><span class="glyphicon glyphicon-ok"></span></td>
        </tr>


        </tbody>


    </table>
</div>
</body>

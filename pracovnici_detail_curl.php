<?php

header('Content-type: text/html; charset=UTF-8');

$id = $_GET['aisid'];
//$url = 'http://is.stuba.sk/lide/clovek.pl?id=' . $id . ";zalozka=5;lang=sk";
$url = 'http://is.stuba.sk/lide/clovek.pl';
$ch = curl_init($url);

// zostavenie dat pre POST dopyt
$data = array(
    'id' => $id,
    'zalozka' => '5',
    'lang' => 'sk',
    'rok' => 1,
    'zvoli_rok' => 'Zvoliť');

// nastavenie curl-u pre pouzitie POST dopytu
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// nastavenie curl-u pre ulozenie dat z odpovede do navratovej hodnoty z volania curl_exec
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

// vykonanie dopytu
$result = curl_exec($ch);
curl_close($ch);

$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTML($result);
$xPath = new DOMXPath($doc);
$publications = $xPath->query('//html/body/div/div/div/table[last()]/tbody/tr/td[2]/small/b[1]');
$tableRows = $xPath->query('//html/body/div/div/div/table[last()]/tbody/tr');
$i = 0;
$val;
$exist=false;

echo "<table class=\"table\" data-sorting=\"true\">";
echo "<thead><tr><th>" . $lang['staff.publication'] . "</th><th>" . $lang['staff.publication.type'] . "</th><th data-type=\"numeric\" data-sorted=\"true\">" . $lang['staff.publication.year'] . "</th></tr></thead>";
foreach ($tableRows as $tableRow) {
    if ((int)$tableRow->childNodes[3]->textContent > 2011) {
        if (strcmp($tableRow->childNodes[2]->textContent, "monografie, učebnice, skriptá, príručky, normy, patenty, výskumné správy, iné neperiodické publikácie") == 0) {
            $val = 1;
            $exist = true;
        } else {
            $exist = false;
        }
    }
    if ($exist AND $val == 1) {
        echo "<tr><td>" . $publications[$i++]->childNodes[0]->textContent . "<input type='hidden' value='$annotation' id='$i'/></td>";
        echo "<td data-sort-value='" . $val . "'>" . $tableRow->childNodes[2]->textContent . "</td>";
        echo "<td data-sort-value='" . $tableRow->childNodes[3]->textContent . "'>" . $tableRow->childNodes[3]->textContent . "</td></tr>";
        $exist = false;
    }
}
echo "</table>";

echo "<table class=\"table\" data-sorting=\"true\">";
echo "<thead><tr><th>" . $lang['staff.publication'] . "</th><th>" . $lang['staff.publication.type'] . "</th><th data-type=\"numeric\" data-sorted=\"true\">" . $lang['staff.publication.year'] . "</th></tr></thead>";
foreach ($tableRows as $tableRow) {
    if ((int)$tableRow->childNodes[3]->textContent > 2011) {
        if (strlen($tableRow->childNodes[2]->textContent) == 23) {
            $val = 2;
            $exist = true;
        } else {
            $exist = false;
        }
    }
    if ($exist) {
        echo "<tr><td>" . $publications[$i++]->childNodes[0]->textContent . "<input type='hidden' value='$annotation' id='$i'/></td>";
        echo "<td data-sort-value='" . $val . "'>" . $tableRow->childNodes[2]->textContent . "</td>";
        echo "<td data-sort-value='" . $tableRow->childNodes[3]->textContent . "'>" . $tableRow->childNodes[3]->textContent . "</td></tr>";
        $exist = false;
    }
}
echo "</table>";

echo "<table class=\"table\" data-sorting=\"true\">";
echo "<thead><tr><th>" . $lang['staff.publication'] . "</th><th>" . $lang['staff.publication.type'] . "</th><th data-type=\"numeric\" data-sorted=\"true\">" . $lang['staff.publication.year'] . "</th></tr></thead>";
foreach ($tableRows as $tableRow) {
    if ((int)$tableRow->childNodes[3]->textContent > 2011) {
        if (strlen($tableRow->childNodes[2]->textContent) == 76) {
            $val = 3;
            $exist = true;
        } else {
            $exist = false;
        }
    }
    if ($exist) {
        echo "<tr><td>" . $publications[$i++]->childNodes[0]->textContent . "<input type='hidden' value='$annotation' id='$i'/></td>";
        echo "<td data-sort-value='" . $val . "'>" . $tableRow->childNodes[2]->textContent . "</td>";
        echo "<td data-sort-value='" . $tableRow->childNodes[3]->textContent . "'>" . $tableRow->childNodes[3]->textContent . "</td></tr>";
        $exist = false;
    }
}
echo "</table>";
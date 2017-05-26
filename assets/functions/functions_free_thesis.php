<?php

$pole=[];
$prispevky = [];
if (isset($_POST["ustav"]))
{
    $cislo = $_POST["ustav"];
    $typ = $_POST["typ"];
    // echo ($cislo);

    $url = "http://is.stuba.sk/pracoviste/prehled_temat.pl?lang=sk;pracoviste=".$cislo;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $output = curl_exec($curl);
    curl_close($curl);
    $DOM = new DOMDocument;
    @$DOM->loadHTML($output);

    $xpath = new DOMXPath($DOM);
    $entries = $xpath->query('//*[@id="base-right"]/div/form/table[3]/tbody')[0];
    $entries = $entries->getElementsByTagName('tr');

    foreach($entries as $link) {
        $pole2=[];
        # Show the <a href>
        $riadok = $link->getElementsByTagName('td');
        //echo $aaa->item(2)->nodeValue;
        //echo "<br />";
        if($riadok->item(8)->nodeValue[0]==0 && $riadok->item(1)->nodeValue[0]==$typ)
        {
            $pole2[]= $riadok->item(2)->nodeValue;
            $pole2[]= $riadok->item(3)->nodeValue;
            $pole2[]= $riadok->item(5)->nodeValue;
            //$pole2[]= $riadok->item(7)->childNodes->item(0)->childNodes->item(0)->getAttribute("href");

            $url = "http://is.stuba.sk" . $riadok->item(7)->childNodes->item(0)->childNodes->item(0)->getAttribute("href");
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            $output2 = curl_exec($curl);
            curl_close($curl);
            $DOM2 = new DOMDocument;
            @$DOM2->loadHTML($output2);

            $xpath2 = new DOMXPath($DOM2);
            $entries2 = $xpath2->query('//*[@id="base-right"]/div/table[1]/tbody/tr[10]/td[2]')[0]->nodeValue;
            //$entries2 = $entries2->getElementsByTagName('td');
            $pole2[]=$entries2;
            $pole[]=$pole2;
            //echo "<br />";
        }

    }
    echo json_encode($pole, JSON_UNESCAPED_UNICODE);
}

if (isset($_POST["login"]))
{
    $username = $_POST["login"];
    $uid = getID($username);
    //echo $uid;

    $url = "http://is.stuba.sk/lide/clovek.pl?lang=sk;zalozka=5;id=".$uid.";rok=1";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $output = curl_exec($curl);
    curl_close($curl);
    $DOM = new DOMDocument;
    @$DOM->loadHTML($output);
    //echo $output;

    $xpath = new DOMXPath($DOM);
    $entries = $xpath->query('//*[@id="base-right"]/div/table[3]/tbody')[0];
    $entries = $entries->getElementsByTagName('tr');

    unset($prispevky); // $foo is gone
    $prispevky = array();

    foreach($entries as $link) {
        $prispevky2 = [];
        $riadok = $link->getElementsByTagName('td');
        //echo $riadok->item(1)->nodeValue;

        //echo "<br />";
        if (intval($riadok->item(3)->nodeValue) >= 2013) {
            //echo $riadok->item(2)->nodeValue;
            //echo "\n";
            echo "\n";

            switch ($riadok->item(2)->nodeValue) {
                case "monografie, učebnice, skriptá, príručky, normy, patenty, výskumné správy, iné neperiodické publikácie":
                    //echo "casopis";
                    //array_push($casopisy, $riadok->item(1)->childNodes->item(0)->getElementsByTagName('b')->nodeValue[0]);
                    array_push($prispevky2, $riadok->item(1)->childNodes->item(0)->childNodes->item(0)->nodeValue);
                    array_push($prispevky2, $riadok->item(2)->nodeValue);
                    array_push($prispevky2, $riadok->item(3)->nodeValue);
                    $prispevky[] = $prispevky2;
                    break;
                case "články v časopisoch":
                    //echo "kniha";
                    array_push($prispevky2, $riadok->item(1)->childNodes->item(0)->childNodes->item(0)->nodeValue);
                    array_push($prispevky2, $riadok->item(2)->nodeValue);
                    array_push($prispevky2, $riadok->item(3)->nodeValue);
                    $prispevky[] = $prispevky2;
                    break;
                case "príspevky v zborníkoch, kapitoly v monografiách/učebniciach, abstrakty":
                    //echo "zbornik";
                    array_push($prispevky2, $riadok->item(1)->childNodes->item(0)->childNodes->item(0)->nodeValue);
                    array_push($prispevky2, $riadok->item(2)->nodeValue);
                    array_push($prispevky2, $riadok->item(3)->nodeValue);
                    $prispevky[] = $prispevky2;
                    break;
                default:
            }


            //echo "\n";
        }
    }
    echo json_encode($prispevky, JSON_UNESCAPED_UNICODE);
}

function getID($username){

    //echo "som tu";

    $ldaprdn  = "ou=People, DC=stuba, DC=sk";
    $filter="(uid=$username*)";
    $ds=ldap_connect("ldap.stuba.sk",389);

    if ($ds) {
        ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION,3);
        $r=ldap_bind($ds);
        $sr=ldap_search($ds, $ldaprdn, $filter);
        $info = ldap_get_entries($ds, $sr);
        $uid = $info[0]["uisid"];

        ldap_close($ds);
        return $uid[0];

    } else {
        //echo "error";
        return "error";
    }
}


?>
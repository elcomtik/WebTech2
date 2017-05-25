<?php
$adServer = "ldap.stuba.sk";
$adPort = 389;
$ldap = ldap_connect($adServer, $adPort);
$dn  = 'ou=People, DC=stuba, DC=sk';

ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

$ldaprdn = 'uid='.'xfranovas'.', ou=People, DC=stuba, DC=sk';

$bind = @ldap_bind($ldap, $ldaprdn, "Doll1111");

$login = $_GET['aisName'];

if ($bind) {
    $usr = "uid=" . $login;
    $results=ldap_search($ldap,$dn,$usr,array("givenname","employeetype","surname","mail","faculty","cn","uisid","uid"));
    $info=ldap_get_entries($ldap,$results);
    $i=0;
    $_GET['aisId'] = $info[$i]['uisid'][0];
    ldap_unbind($ldap);
    header("Location: pracovnici_detail_curl.php?aisId=" . $info[$i]['uisid'][0]);
}
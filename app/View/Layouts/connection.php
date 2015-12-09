<?php

$server = "ldap://ldap-proxy.42.fr";
$port = "1636";
$userdn = "uid=tauvray,ou=august,ou=2014,ou=paris,ou=people,dc=42,dc=fr";
$userpw = "OUPS";
if (($serv_id = ldap_connect($server, $port)) == 0)
    echo "Connection Fail";
else
{
    ldap_set_option($serv_id, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($serv_id, LDAP_OPT_REFERRALS, 0);
    if (!ldap_bind($serv_id, $userdn, $userpw))
        echo "BIND fail";
    else
	{
        echo "allright";
	}
}


?>

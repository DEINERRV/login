<?php

	$ldap_dn = "cn=".$_POST["username"].",ou=usuarios,dc=proyecto,dc=local";
	$ldap_password = $_POST["password"];

	$ldap_con = ldap_connect("ldap://104.215.90.201");
	ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

	if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password))
		echo '<script language="javascript">alert("Autenticado");</script>';
	else
		echo '<script language="javascript">alert("Credenciales Invalidas");</script>';
?>
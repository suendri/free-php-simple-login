<?php 

/**
 * Gosoftware Media Abadi 2019
 * --
 * --
 * Gosoftware Media Abadi
 * http://gosoftware.web.id
 * e-mail : cs@gosoftware.web.id
 * WA : 6285263616901
 * --
 * --
 */

function enkripsi($string)
{
	$key = "password";
	return openssl_encrypt($string, "AES-128-ECB", $key);
}

function dekripsi($string)
{
	$key = "password";
	return openssl_decrypt($string, "AES-128-ECB", $key);
}
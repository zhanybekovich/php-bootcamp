<?php
// Superglobals
/*
$_GLOBALS - references vars in the global scope
$_SERVER - info about the server: hostname, file path, etc
$_GET - vars passed to the script via query params and GET forms
$_POST - vars passed to the script via POST forms
$_FILES - items uploaded to current script
$_COOKIE - vars passed to script via HTTP cookies
$_SESSION - session vars available to the script
$_REQUEST - contains the content of $_GET, $_POST and $_COOKIE (NOT SECURE!)
$_ENV - vars passed to the current script via environment method
*/

// Common $_SERVER variables
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? '';
echo $requestMethod;
echo '<hr>';

$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? '';
echo $serverProtocol;
echo '<hr>';

$serverName = $_SERVER['SERVER_NAME'] ?? '';
echo $serverName;
echo '<hr>';

$serverPort = $_SERVER['SERVER_PORT'] ?? '';
echo $serverPort;
echo '<hr>';

$serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? '';
echo $serverSoftware;
echo '<hr>';

$serverAdmin = $_SERVER['SERVER_ADMIN'] ?? '';
echo $serverAdmin;
echo '<hr>';

$documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
echo $documentRoot;
echo '<hr>';

$scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? '';
echo $scriptFilename;
echo '<hr>';

$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
echo $scriptName;
echo '<hr>';

$phpSelf = $_SERVER['PHP_SELF'] ?? '';
echo $phpSelf;
echo '<hr>';

$remoteAddr = $_SERVER['REMOTE_ADDR'] ?? '';
echo $remoteAddr;
echo '<hr>';

$connection = $_SERVER['HTTP_CONNECTION'] ?? '';
echo $connection;
echo '<hr>';

$host = $_SERVER['HTTP_HOST'] ?? '';
echo $host;
echo '<hr>';

$referer = $_SERVER['HTTP_REFERER'] ?? '';
echo $referer;
echo '<hr>';

$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
echo $userAgent;
echo '<hr>';

$queryString = $_SERVER['QUERY_STRING'] ?? '';
echo $queryString;
echo '<hr>';

$requestUri = $_SERVER['REQUEST_URI'] ?? '';
echo $requestUri;
echo '<hr>';

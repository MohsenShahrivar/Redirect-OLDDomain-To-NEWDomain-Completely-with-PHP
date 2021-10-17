<?php 
// Redirect 301 old.com to new.com
// Redirect Any URL to New URL
// author : Mohsen Shahrivar

header("HTTP/1.1 301 Moved Permanently"); 

$requested_url = $_SERVER[REQUEST_URI];

if ( $requested_url ) {
    header("Location: http://newdomain.com/" . $requested_url); 
}
else {
    header("Location: http://newdomain.com/"); 
}

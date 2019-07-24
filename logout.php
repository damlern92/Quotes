<?php
/* This is the logout page. It destroys the cookie. */

/* 
	Destroy the cookie, but only if it already exists
	By making this check, the script prevents hackers from discovering the name of the cookie
	used by the site by accessing the logout script without having first logged in:
*/
if (isset($_COOKIE['Samuel'])) {
	setcookie('Samuel', FALSE, time()-300);
}

// Define a page title and include the header:
define('TITLE', 'Logout');
include('templates/header.html');

// Print a message:
echo '<p>You are now logged out.</p>';

// Include the footer:
include('templates/footer.html'); 
?>
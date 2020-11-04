<?php



// Set Cookies
setcookie('CIS222TEST', 'Week13');

setcookie('BrokenCookie', 'some text 2');


// Use Cookies
echo '<p>Cookie: '. $_COOKIE['BrokenCookie'] . '</p>';
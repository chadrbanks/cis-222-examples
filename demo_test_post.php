<?php

// dim fname,city
// fname=Request.Form("name")
// city=Request.Form("city")
// Response.Write("Dear " & fname & ". ")
// Response.Write("Hope you live well in " & city & ".")


$fname = $_POST['name'];
$city = $_POST['city'];

echo "Dear $fname";
echo "Hope you live well in $city.";

# Chad R. Banks

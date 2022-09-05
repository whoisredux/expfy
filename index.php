$ip = getIPAddress(); 

$handle = fopen("logs.txt","a");

$text = date("Y-m-d H:i:s")."\t".$ip;

fwrite($handle,$text);
fwrite($handle,PHP_EOL);

fclose($handle);

echo 'User Real IP Address - '.$ip;
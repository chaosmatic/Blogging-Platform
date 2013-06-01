<?php
echo "<title>Your Ip</title> <h1> Your IP Address is: ";
$ip =  filter_var($_SERVER['REMOTE_ADDR'],FILTER_VALIDATE_IP);
echo $ip;
echo " </h1>";

?>
<pre>
&lt;?php
echo "&lt;title&gt;Your Ip&lt;/title&gt; &lt;h1&gt; Your IP Address is: ";
$ip =  filter_var($_SERVER['REMOTE_ADDR'],FILTER_VALIDATE_IP);
echo $ip;
echo " &lt;/h1&gt;";

?&gt;
</pre>
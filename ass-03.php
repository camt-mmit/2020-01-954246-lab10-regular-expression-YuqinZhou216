<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/

$file=fopen($_SERVER['argv'][1],'r');
while(!feof($file))
{
    $text=fread($file,9999);
    }
    preg_match_all('/\(([A-Z]+)\)/',$text,$texts);
 foreach($texts[1] as $textss)
 {
     printf("%s\n",$textss);
 }
 fclose($file);
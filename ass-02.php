<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/

$file=fopen($_SERVER['argv'][1],'r');
while(!feof($file))
{
     $data=fread($file,9999);
    }
    preg_match_all("/(\d+[.]\d+)|(\b\d+\b)/",$data,$datas);
    foreach($datas[0] as $datass)
    {
         printf("%s\n",$datass);
    }
    fclose($file);
    
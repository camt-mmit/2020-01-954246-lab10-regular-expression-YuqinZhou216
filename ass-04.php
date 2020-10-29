<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/

    $file=fopen($_SERVER['argv'][1],'r');
    while(!feof($file))
    {
        $content=trim(fread($file,9999));
        }
    preg_match_all("/([A-Z][a-z]+(?:\s[A-Z][a-z]+)*)/",$content,$contents);
    
    foreach($contents[0] as $contentss)
    {
        if($contentss=="My"||$contentss=="The") printf("");
        else printf("%s\n",$contentss);
    }

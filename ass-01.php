<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/

$file=fopen($_SERVER['argv'][1],'r');
$satisfied=[];
$unsatisfied=[];
fscanf($file,"%d",$n);
for ($i=0;$i<$n;$i++)
{
     $password=rtrim(fgets($file));
     if(
          preg_match("/(?=(.*[A-Z]){2,})(?=(.*[0-9]){2,})(?=(.*[\$@&]){2,})(?=(.*\S){8,})(?!.*[ ])/",$password)
     )    $satisfied[]=$password;
     else $unsatisfied[]=$password;
}

printf("Satisfied:\n");
foreach($satisfied as $satisfieds)
{
     printf("    %s\n",$satisfieds);
}
printf("Non-Satisfied:\n");
foreach($unsatisfied as $unsatisfieds)
{
     printf("    %s\n",$unsatisfieds);
}
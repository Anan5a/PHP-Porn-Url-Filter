<?php

$input = 'https://github.com/Clefspeare13/pornhosts/raw/master/0.0.0.0/hosts';
echo "Getting Data from $input";
$data = file_get_contents($input);
$lines = explode("\n", $data);
$blocked = [];
foreach($lines as $line){

    if(substr($line, 0, 7) == '0.0.0.0' ){
        $parts = explode(' ', $line);
        $domain = end($parts);
        $blocked [] = $domain;
    }
}

$str = var_export($blocked, true);
file_put_contents('blocked_domains_list.php', "<?php\n\n\$blocked_domains = $str;\n\n");
echo 'Input :'.count($lines).' Lines'."\n";
echo 'Processed Domains: '.count($blocked).' '."\n";
echo 'USE blocked_domains_list.php in your project';

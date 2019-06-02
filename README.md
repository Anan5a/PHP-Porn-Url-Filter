# PHP-Porn-Url-Filter
this project generate a list of domain which can be used to filter out porn urls
# this project use DOMAINS from https://github.com/Clefspeare13/pornhosts project.
## Please run ``` Generator.php ``` regularly to update the list

## How To Use
```bash
1. Download generator.php
2. run php Generator.php in your terminal to generate the block list
3. Copy the file in your project
4. Use it!!
```
```php
require_once 'blocked_domains_list.php';


$url = 'https://pornhub.com/huyftjdh-35476254';
$parsed = parse_url($url);
$match = in_array($parsed['host'], $blocked_domains);
```

# This project may not be sufficient for your need

Use under
## MIT LICENSE

## Thank you

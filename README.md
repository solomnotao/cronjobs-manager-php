# cronjobs-manager-php
function control cronjobs using php

HOW TO
1. Clone Or Download cron.php
2. Include file cron.php
Finishhhhhh

ex.

Add Cronjobs 
add_cronjob('* * * * * curl -s https://example.com/run.php');

Remove Cronjob
remove_cronjob('* * * * * curl -s https://example.com/run.php');

Cronjobs List
echo cron_list();

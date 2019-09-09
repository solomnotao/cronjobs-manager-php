# cronjobs-manager-php
function control cronjobs using php

ex.
Add Cronjobs 
add_cronjob('* * * * * curl -s https://example.com/run.php');

Remove Cronjob
remove_cronjob('* * * * * curl -s https://example.com/run.php');

Cronjobs List
echo cron_list();

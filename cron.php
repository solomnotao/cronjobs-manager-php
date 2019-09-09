<?php

function add_cronjob($cmd){
    exec('crontab -l', $data);
    $key = array_search($cmd, $data);
    if($key === false){
        exec('echo -e "`crontab -l`\n'.$cmd.'" | crontab -', $output);
    }
}

function remove_cronjob($cmd) {
    exec('crontab -l', $data);
    $key = array_search($cmd, $data);
    if($key !== false){
        unset($data[$key]);
    }
    exec ('echo "'.implode("\n", $data).'" | crontab -');
}

function cron_list(){
    $list = shell_exec('crontab -l');
    return '<pre>'.$list.'</pre>';
}

?>
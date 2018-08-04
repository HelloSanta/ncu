<?php
// local alias
$local_sites = '/var/www/html/';
$aliases['demo.local'] = array(
  'root' => $local_sites ,
  'path-aliases' => array(
    '%dump-dir' => $local_sites . 'drush.dbdumps',
    '%files' => $local_sites . '/sites/default/files',
    '%private' => $local_sites . '/sites/default/private'
  )
);


// remote alias
$remote_sites = '/var/www/html/';
$aliases['dev'] = array(
  'remote-host' => '60.248.35.69',
  'remote-user' => 'root',
  'ssh-options' => '-p 2300 -o PasswordAuthentication=no -o StrictHostKeyChecking=no -i '.drush_server_home().'/.ssh/develop_server.key',
  'root' => $remote_sites  ,
  'path-aliases' => array(
    '%dump-dir' => '/home/root/drush.dbdumps',
    '%files' => $remote_sites . '/sites/default/files',
    '%private' => $remote_sites . '/sites/default/private'
  )
);

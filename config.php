<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.4.105.130';
$CFG->dbname    = 'drupal';
$CFG->dbuser    = 'admindSwiWUI';
$CFG->dbpass    = 'CnFNr2W-ISGD';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://elasa2ir.tk';
$CFG->dataroot  = '/var/lib/openshift/55d33bf50c1e66b083000099/app-root/data/downloads/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

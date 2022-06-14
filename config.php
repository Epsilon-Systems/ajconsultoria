<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'u291610153_ajconsultores';
$CFG->dbuser    = 'u291610153_ajconsultores';
$CFG->dbpass    = 'V3nu$940721';
$CFG->prefix    = 'mhrm_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '0',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://ajconsultoria.com.mx/capacita';
$CFG->dataroot  = '/home/u291610153/domains/ajconsultoria.com.mx/public_html/capacita/.htmyx9fdzmbowu.data/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

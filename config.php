<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle';
<<<<<<< HEAD
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = '1981';
=======
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';
>>>>>>> 90f2aa9a6fe3354902b1e9f4350b5146db36fd36
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
<<<<<<< HEAD
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'http://localhost/moodle';
$CFG->dataroot  = 'C:\\Shiva\\moodledata';
=======
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'http://localhost/moodle';
$CFG->dataroot  = 'C:\\xampp\\moodledata';
>>>>>>> 90f2aa9a6fe3354902b1e9f4350b5146db36fd36
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

<?php
/**
 * @file          kb.queries.categories.php
 * @author        Nils Laumaillé
 * @version       2.1.13
 * @copyright     (c) 2009-2012 Nils Laumaillé
 * @licensing     GNU AFFERO GPL 3.0
 * @link          http://www.teampass.net
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

session_start();
if (!isset($_SESSION['CPM']) || $_SESSION['CPM'] != 1) {
    die('Hacking attempt...');
}

global $k, $settings;
include $_SESSION['settings']['cpassman_dir'].'/includes/settings.php';
header("Content-type: text/x-json; charset=".$k['charset']);

//Connect to DB
$db = new SplClassLoader('Database\Core', '../includes/libraries');
$db->register();
$db = new Database\Core\DbCore($server, $user, $pass, $database, $pre);
$db->connect();

$sql = "SELECT id, category FROM ".$pre."kb_categories";

//manage filtering
if (!empty($_GET['term'])) {
    $sql .= " WHERE category LIKE '%".$_GET['term']."%'";
}

$sql .= " ORDER BY category ASC";

$sOutput = '';

$rows = $db->fetchAllArray($sql);
if ($rows[0]>0) {
    foreach ($rows as $reccord) {
        if (empty($sOutput)) {
            $sOutput = '"'.$reccord['category'].'"';
        } else {
            $sOutput .= ', "'.$reccord['category'].'"';
        }
    }

    //Finish the line
    echo '[ '.$sOutput.' ]';
}

 <?php
/**
 * Created by PhpStorm.
 * User: benjamin.mpolokoso
 * Date: 07/02/2019
 * Time: 9:06 PM
 */

main::start();

class main {

    static public function start() {
        $records = csv::getRecords();
        $table = html::generateTable($records);
        $table = 'test';
        system::printPage($table);
    }
}

class csv
{
    static public function getRecords()  {

        $records= 'test records';
     return $records;
    }
}
class html{
    static public function generateTable($records) {

        $table = $records;

    return $table;
    }
}
class system {
    static public function printPage($page) {

        echo $page;
    }
}

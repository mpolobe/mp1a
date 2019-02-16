 <?php
/**
 * Created by PhpStorm.
 * User: benjamin.mpolokoso
 * Date: 07/02/2019
 * Time: 9:06 PM
 */

main::start("example.csv");

class main  {
    static public function start($filename) {
        $data = csv::getData($filename);
      //  $data = file("example.csv");
        $table = html::generateTable($data);

        print_r ($data);
    }
}


class csv
{
    static public function getData()  {


//        foreach ($data as $line){
//            $lineArray = explode("t", $line);
 //           list($permalink, $company, $numEmps, $city, $state, $fundedDate, $raisedAmt,$raisedCurrency, $round) = $lineArray;
//
//            return $data;
//)




$filename = 'example.csv';

// The nested array to hold all the arrays
$the_big_array = [];

// Open the file for reading
if (($h = fopen("{$filename}", "r")) !== FALSE)
{
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
    {
        // Each individual array is being pushed into the nested array
        $the_big_array[] = $data;
    }

    // Close the file
    fclose($h);
}

// Display the code in a readable format


    }
}
class html{
    static public function generateTable($data) {
        $table = self::returnHTMLHeader();
       print <<< HERE
  <table border = "1">
  <tr>
   <th>permalink</th>
   <th>company</th>
   <th>numEmps</th>
   <th>city</th>
   <th>state</th>
   <th>fundedDate</th>
   <th>raisedAmt</th>
   <th>raisedCurrency</th>
   <th>round</th>
  </tr>
HERE;

    return $table;
    }

    public static function returnHTMLHeader(){
        $table = '<!DOCTYPE html><html lang="en"><head><link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script></head><body><table class="table table-bordered table-striped">';
        return $table;
    }

}
class system {
    static public function printPage($page) {

        echo "<pre>";
        var_dump($the_big_array);
        echo "</pre>";
    }
}

 class recordFactory {
     public static function create(Array $fieldNames = null, Array $values = null) {
         $record = new record($fieldNames, $values);
         return $record;
     }
 }
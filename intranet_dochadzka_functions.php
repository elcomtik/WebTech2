<?php
//$sql = "SELECT start_date,end_date,s.status FROM evidence JOIN status as s ON status_id=s.id WHERE user_id='".$user_id."'";

include('DB_config.php');
$conn = new mysqli($servername, $username, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8");

if (isset($_POST['user_id'])) {
    sendTable($_POST['user_id'], $_POST['start'], $_POST['end'], $_POST['status']);
}

if (isset($_GET['date'])) {
    //echo "<script>console.log('here')</script>";
    getTable($_GET['date']);
}

function isWeekend($date)
{
    return (date('N', strtotime($date)) >= 6);
}


function getTable($date)
{
    //list($year, $month) = preg_split('[/.-]', $date);
    list($year, $month) = explode("-", $date);
    //echo $year + ", ";
    //echo $month + ", ";
    //echo $date + ",  ";


    $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    //echo ", ";

    // Creating connection
    include('DB_config.php');
    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo '<script>console.log("[MySQL] Database connected successfully")</script>';

    mysqli_set_charset($conn, "utf8");
    $sql = "SELECT ID, NAME FROM users ORDER BY NAME";
    $rs = $conn->query($sql);

    if ($rs->num_rows > 0) {
        $start = 0;
        $end = 0;
        $table = '<table id="dochadzka">';
        $table .= '<col span="1" class="wide">';
        // first row
        $table .= '<tr><th>Meno</th>';
        $i = 1;
        while ($i != $days_in_month + 1) {
            if (isWeekend($year . "-" . $month . "-" . $i)) {
                $table .= '<th class = "weekend">' . $i++ . '.</th>';
            } else {
                $table .= '<th>' . $i++ . '.</th>';
            }

        }
        $table .= '</tr>';
        // end first row

        while ($row = $rs->fetch_assoc()) {
            //$table.='<option value="'.$row['id'].'">'.$row['firstname'].' ' .$row['lastname'].'</option>';
            $table .= '<tr id="' . $row['ID'] . '"><td id="name">' . $row['NAME'] . '</td>';
            $user_id = $row['ID'];

            $sql = "SELECT start_date,end_date,status_id FROM evidence WHERE user_id=" . $user_id . " AND MONTH(start_date)=" . $month . " AND YEAR(start_date)=" . $year . " ORDER BY id,start_date";
            $rs1 = $conn->query($sql);
            $num_of_rows = $rs1->num_rows;
            if ($num_of_rows > 0) {
                $i = 1;

                $table_row = array();
                while ($i++ <= $days_in_month + 1) {
                    array_push($table_row, "<td></td>");
                }

                while ($result = $rs1->fetch_assoc()) {


                    list($year, $month, $day) = array_pad(explode('-', $result['start_date']), 3, null);
                    $start = (int)$day;
                    //echo $start." -> ";
                    list($year, $month, $day) = array_pad(explode('-', $result['end_date']), 3, null);
                    $end = (int)$day;
                    //echo $end."<br />";

                    $i = $start;
                    while ($end >= $i) {
                        $table_row[$i++] = "<td id=state" . $result['status_id'] . "></td>";
                    }
                    /*
                    if($num_of_rows > 1 && $j == $num_of_rows && $i < $days_in_month) {
                        echo $i."<br />";
                        while($i++ != $days_in_month+1) {
                            $table.='<th></th>';
                        }
                    }
                    */


                    //$start = 0;
                    //$end = 0;
                }
                $i = 0;
                while ($i++ < $days_in_month) {
                    $table .= $table_row[$i];
                }
            } else {
                $result = null;
                $i = 1;
                while ($i++ != $days_in_month + 1) {
                    $table .= '<td></td>';
                }
            }

        }


        $table .= '</table>';
        echo $table;
    } else {
        echo "0 results";
    }

}

function get_numerics($str)
{
    preg_match_all('/\d+/', $str, $matches);
    return $matches[0];
}

function sendTable($user_id, $start, $end, $status)
{
    // Create connection
    $con = create_conn();
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    /*INSERT INTO evidence (start_date, end_date, user_id, status_id) VALUES ('2017-03-12', '2017-03-12', '1', '1')*/


    $sql = "INSERT INTO evidence (start_date, end_date, user_id, status_id) 
	VALUES ( convert('" . $start . "',datetime), convert('" . $end . "',datetime), " . $user_id . ", " . get_numerics($status)[0] . " )";

    if ($con->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error" . $con->error;
    }

    $con->close();
}


/*



$sql = "SELECT id,firstname,lastname FROM users";

$rs = $conn->query($sql);


//echo $result;
$days_in_month = cal_days_in_month(CAL_GREGORIAN,2,2004);


if ($rs->num_rows > 0) {
// output data of each row
    $table= '<table>';
    $table.='<tr><th>Meno</th><th>1.</th><th>2.</th>';
    while($row = $rs->fetch_assoc()){
        //$table.='<option value="'.$row['id'].'">'.$row['firstname'].' ' .$row['lastname'].'</option>';
        $table.='<tr><td>'.$row['firstname'].' '.$row['lastname'].'</td></tr>';
    }
    $table.='</table>';
    echo $table;
} else {
    echo "0 results";
}

//echo date("r");

//close_con($sql);

*/


?>
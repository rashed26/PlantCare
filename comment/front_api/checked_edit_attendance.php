<?php

include "./dbConnection.php";



$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);  // you given "true" then this data convert associative array, if not given then it convert php object


$query = "SELECT iid, name from leo_member where active=1
                 UNION
                SELECT iid, name from lion_member where active=1;";

$result = mysqli_query($conn, $query);
$fetch = array();
$name = array();
$data = array(array());
$sentData = array();
$allIID = array();
$allDate = array();

while ($row = mysqli_fetch_assoc($result)) {
    $fetch[] = $row;
    $allIID[] = $row['iid'];
    $name[$row['iid']] = $row['name'];
}

// $data['error'] = false;
// $data['data'] = $fetch;

// $data['error'] = false;
// $data['data'] = $allIID;

$query = "SELECT DISTINCT YEAR(date) as year FROM month_year ORDER BY date ASC;";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $allDate[] = $row['year'];
}


for ($i = 0; $i < count($allIID); $i++) {
    $iid = $allIID[$i];
    $personPresent = array();
    $personData = array();

    for ($j = 0; $j < count($allDate); $j++) {
        $uniDate = $allDate[$j];
        $query = "SELECT COUNT(attendance.present) AS present
                  FROM attendance
                  INNER JOIN month_year
                  ON attendance.date = month_year.id  WHERE attendance.iid='$iid' AND YEAR(month_year.date)='$uniDate' AND attendance.present=1  ORDER BY month_year.date ASC;";

        $result = mysqli_query($conn, $query);
        $present = mysqli_fetch_assoc($result);
        $personPresent[] = $present['present'];
    }
    $personData['label'] = "Name : $name[$iid] , IID : $iid , Attendance ";
    $personData['fill'] = 'false';
    $personData['tension'] = 0.1;
    $personData['data'] = $personPresent;
    if (count($personPresent) > 0) {
        $data[$i] = $personData;
    }
}



$sentData['error'] = false;
$sentData['data'] = $data;
$sentData['date'] = $allDate;



/// Return Json Fortmatted data
echo json_encode($sentData);

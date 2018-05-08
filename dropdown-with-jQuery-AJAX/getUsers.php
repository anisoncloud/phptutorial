<?php error_reporting(0);
include "config.php";

//$departid = 2;
$departid = $_POST['depart'];   // department id

//$sql = "SELECT subcat_id, cat_id, subcategory FROM subcategory WHERE cat_id=".$departid;
$sql = "SELECT o.subcat_id, o.cat_id, o.subcategory FROM subcategory AS o WHERE o.cat_id=$departid";
$result = mysql_query($sql);

//if(mysql_num_rows($result)){
/*$row_count = $sql->fetchColumn() ;
echo $row_count;
foreach ($con->query($sql) as $noticia2) {*/

//$result = mysql_query($sql);

//$users_arr = array();

while( $row = mysql_fetch_array($result) ){
    $userid = $row['subcat_id'];
    $name = $row['subcategory'];

    $users_arr[] = array("ids" => $userid, "name" => $name);
}

// encoding array to json format
echo json_encode($users_arr);
//}else{
	//echo 'No Data';
//}

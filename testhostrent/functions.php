<?php



$conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');
function BAM_con($conn){

    
//      $m = "photos/IITA_HQ.jpg";
// $stmts = $conn->prepare("SELECT  *  FROM agentupload WHERE frontview = :i"); 
//      $stmts -> bindParam(':i', $m);
//     $stmts->execute();
//     $results = $stmts->fetchAll(PDO::FETCH_ASSOC);
//     return $results;
}
function img_con($conn){
    $stmt = $conn->prepare("SELECT * FROM agentupload"); 
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    return $result;
}
// WHERE category='Market'"
function cool_con($conn){
 	$stmts = $conn->prepare("SELECT * FROM agentupload  WHERE category='Cool'"); 
    $stmts->execute();
    $results = $stmts->fetchAll(PDO::FETCH_ASSOC);
    return $results; 
   }
function religious_con($conn){
	$stmts = $conn->prepare("SELECT * FROM agentupload  WHERE category='Religious'"); 
	$stmts->execute();
	$results = $stmts->fetchAll(PDO::FETCH_ASSOC);
	return $results; 
}
function ghetto_con($conn){
	$stmts = $conn->prepare("SELECT * FROM agentupload  WHERE category='Ghetto'"); 
	$stmts->execute();
	$results = $stmts->fetchAll(PDO::FETCH_ASSOC);
	return $results; 
}
function market_con($conn){
 	$stmts = $conn->prepare('SELECT * FROM agentupload  WHERE category="Market"'); 
    $stmts->execute();
    $results = $stmts->fetchAll(PDO::FETCH_ASSOC); 
    return $results; 
}
?>

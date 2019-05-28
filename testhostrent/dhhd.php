<?php



$conn = new PDO("mysql:host=localhost;dbname=hostel_management", 'root', '');
function BAM_con($conn){
$stmts = $conn->prepare("SELECT  *  FROM agentupload WHERE frontview = :i"); 
      // $stmts -> bindParam(':i', $m);
    $stmts->execute([':i' => $m]);
    $results = $stmts->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}?>
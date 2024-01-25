<?php
echo "<script>document.location='displayDhenat.php';</script>";
ose
header("Location:displayDhenat.php");


public function lexoDhenat(){
    $sql='SELECT * FROM mobilshop';
    $stm=$this->dbconn->prepare($sql);
    $stm->execute();
    $rezultati =$stm->fetchAll(PDO::FETCH_ASSOC);
    return $rezultati;
    }




?>
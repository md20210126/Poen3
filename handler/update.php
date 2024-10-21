<?php 

if (isset($_POST['id_predmeta']) 
    && isset($_POST['submit'])    
    && $_POST['submit'] == "izmeni" 
    && isset($_POST['predmet']) 
    && isset($_POST['katedra']) 
    && isset($_POST['sala']) 
    && isset($_POST['datum'])) {
    
 

    $query = "
        UPDATE prijave 
        SET predmet = '{$_POST['predmet']}', 
            katedra = '{$_POST['katedra']}', 
            sala = '{$_POST['sala']}', 
            datum = '{$_POST['datum']}' 
        WHERE id = {$_POST['id_predmeta']}
    ";


    

    $result = $conn->query($query);

    if ($result) {
        header("Location: home.php"); 
        exit(); 
    } else {
        echo "Failed to update record.";
    }
}
?>
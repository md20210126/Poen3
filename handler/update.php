<?php 

if (isset($_POST['id_predmeta']) 
    && isset($_POST['submit'])    
    && $_POST['submit'] == "izmeni" 
    && isset($_POST['predmet']) 
    && isset($_POST['katedra']) 
    && isset($_POST['sala']) 
    && isset($_POST['datum'])) {
    
    $status = Prijava::update(new Prijava($_POST['id_predmeta'],$_POST['predmet'], $_POST['katedra'], $_POST['sala'], $_POST['datum']), $conn);

    if ($result) {
        header("Location: home.php"); 
        exit(); 
    } else {
        echo "Failed to update record.";
    }
}
?>
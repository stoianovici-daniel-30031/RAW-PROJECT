<?php
//  Afisez ce am primit
// print_r($_POST);

function corectez($sir) {
  $sir = trim($sir);
  $sir = stripslashes($sir);
  $sir = htmlspecialchars($sir);
  return $sir;
}

  // preiau imaginea aleasa
  $poza = $_FILES["imagine"]["name"];
  $nmtmp = $_FILES["imagine"]["tmp_name"];
  $extensie = pathinfo($poza,PATHINFO_EXTENSION); 
 
  // numele initial pt toate pozele
  $pinit = 'temp.png';
  
  // preiau valorile din campurile formularului (nume, numerotare si prezentare) și verific daca au fost completate
  $eroare = '';

  if(empty($_POST['nume'])) {
    $eroare .= '<p>Nu ați introdus numele!</p>';
  } else {
    $nume = corectez($_POST['nume']);
  }

  if(empty($_POST['numerotare'])) {
    $eroare .= '<p>Nu ați introdus o numerotare!</p>';
  } else {
    $numerotare = corectez($_POST['numerotare']);
  }

  if(empty($_POST['prezentare'])) {
    $eroare .= '<p>Nu ați introdus o prezentare!</p>';
  } else {
    $prezentare = corectez($_POST['prezentare']);
  }

  //  Verific daca preluarea datelor s-a derulat corect
  if($eroare == '') {
    //  Nu sunt mesaje de eroare

    // formulez comanda INSERT
    include '../../conect.php';
    $comanda = "INSERT INTO clones (imagine, nume, numerotare, prezentare) VALUES (?, ?, ?, ?)";
    $stm = mysqli_prepare($cnx, $comanda);
    mysqli_stmt_bind_param($stm, 'ssss', $pinit, $nume, $numerotare, $prezentare);
    mysqli_stmt_execute($stm);
    //  Preiau valoarea cheii primare
    $nr = mysqli_insert_id($cnx);
    //redenumesc fisierul continand imaginea si il copiez in directorul poze din site (/htdocs/FamiliaMea/poze)

    $poza_r = "clone".$nr.".".strtolower($extensie);  
    $cale = "../../images/$poza_r";              
    $rezultat = move_uploaded_file($nmtmp, $cale);    
    // schimb denumirea fisierului in articolul scris
    $cdamodif = "UPDATE clones set imagine='$poza_r' where id=$nr";
    mysqli_query($cnx, $cdamodif) or die("Nu merge update in tabel");

    //inchid conexiunea
    mysqli_close($cnx); //sau $cnx = null;
    header('Location: ../adaugclone.php');
  } else {
    echo $eroare;
  }
?>
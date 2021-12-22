<?php
    $conn = mysqli_connect("localhost", "root", "", "bot") or die("Erro no banco de dados");

    $get_string = mysqli_real_escape_string($conn, $_POST["text"]);

    $check_data = "SELECT results FROM chatbot WHERE queries LIKE '%$get_string%'";

    $run_querie = mysqli_query($conn, $check_data);

    if(mysqli_num_rows($run_querie) > 0){
        $fetch_data = mysqli_fetch_assoc($run_querie);
        $replay = $fetch_data['results'];

        echo $replay;

    }else{
        echo "Desculpe, mas não entendi. poderia repeti?";
    }

?>
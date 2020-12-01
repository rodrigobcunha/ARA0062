<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://trabalho-3006.000webhostapp.com/index.html');
    </script>
    ";
    
}

?>
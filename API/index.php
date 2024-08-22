<?php
echo "reponse request method;" . $_server["Request_Method"];
if($_Server['Request_Method'] == 'Post'){
    $data = json_decode(file_get_contents('php: //input'), true);
    echo"response data: " .json_encode($data);
    
}

?>
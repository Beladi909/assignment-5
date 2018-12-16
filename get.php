<?php
    function gets()
    {
    $sql = 'SELECT * FROM Array_images';
    $response = $GLOBALS['conn']->query($sql);
    if ($response && $response->num_rows > 0) {
        while ($row = $response->fetch_array()) {
       echo '<img src="data:image/jpeg;base64,'.base64_encode($row['imag']).'" width="200" height = "200" >';   
  } 
        
    }
    echo"</br>";
    echo "Fetched data successfully\n";
    

    }
 ?>
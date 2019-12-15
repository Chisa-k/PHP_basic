<pre>

<?php
for($i=1; $i<=366; $i++){
<<<<<<< HEAD
    $day = date('y/n/j(D)' , strtotime('+' . $i .'day'));
=======
    $day = date('Y/n/j(D)' , strtotime('+' . $i .'day'));
>>>>>>> 29444a3a863c66656137241b26b12f6a14f4b3f1
    print($day . "\n");
}
?>

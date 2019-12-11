<pre>

<?php
for($i=1; $i<=366; $i++){
    $day = date('Y/n/j(D)' , strtotime('+' . $i .'day'));
    print($day . "\n");
}
?>

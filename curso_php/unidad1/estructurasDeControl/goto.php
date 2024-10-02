<?php

for($i=0,$j=50; $i<100; $i++) {
    while($j--) {
        echo "valor j = ". $j . " | valor i = ". $i . "<br>";
        if($j==47) goto end;
    }
}
// echo "i = $i";
end:
echo 'j alcanzó 17';

?>
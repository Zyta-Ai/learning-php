<?php 

$musim = 8;

switch ($musim) {
    case ($musim >= 1 && $musim <= 3): 
        echo "Musim Dingin";
        break;
    case ($musim >= 4 && $musim <= 6): 
        echo "Musim Semi";
        break;
    case ($musim >= 7 && $musim <= 9): 
        echo "Musim Panas";
        break;
    case ($musim >= 10 && $musim <= 12): 
        echo "Musim Gugur";
        break;
    
}

?>
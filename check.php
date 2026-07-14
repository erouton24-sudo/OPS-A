<?php
echo "PHP Version: " . phpversion() . "<br>";
if (is_writable('./')) {
    echo "Root folder is writable.";
} else {
    echo "Root folder is NOT writable.";
}
?>
<?php
    if (isset($_REQUEST['input'])) {
        $input = $_REQUEST['input'];
        try {

            $input02 = @eval("return " . $input . ";");
            echo  $input02;
            
        }catch (Error $er) {
            echo $er->getMessage();
        }
    }

    echo "<br><br><br><a  href='./index.html'>back</a>";

?>
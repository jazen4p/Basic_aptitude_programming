<html>
    <body>
        <?php 
            function penghitung_huruf($n){
                $arr = str_split($n);

                $result = array();
                $prev_value = array('value' => null, 'amount' => null);

                foreach ($arr as $val) {
                    if ($prev_value['value'] != $val) {
                        unset($prev_value);
                        $prev_value = array('value' => $val, 'amount' => 0);
                        $result[] =& $prev_value;
                    }

                    $prev_value['amount']++;
                }

                // var_dump($result);
                echo "Input: ".$n."<br><br>";

                for($i = 0; $i < count($result); $i++){
                    echo "The output of ".$result[$i]['value']." : ".$result[$i]['amount']."<br>";
                }
            }
        ?>
        <div><?php echo penghitung_huruf("aaaabbcccaaaac");?></div>
    </body>
</html>
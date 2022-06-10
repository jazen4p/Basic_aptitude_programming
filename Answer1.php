<html>
    <body>
        <?php 
            function fibonacci($n){
                $a = 0;
                $b = 1;

                $hasil = "$a $b";

                for($i = 0; $i < $n-2; $i++){
                    $output = $a + $b;

                    $hasil = $hasil." $output";

                    $a = $b;
                    $b = $output;
                }
                return $hasil;
            }
        ?>
        <div><?php echo fibonacci(2);?></div>
    </body>
</html>
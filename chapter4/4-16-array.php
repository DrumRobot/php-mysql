<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <script>
            var coworkers = ['egoing', 'leezche', 'duru', 'taeho'];
            coworkers.push('graphittie');
            // for(var i in coworkers) document.write(coworkers[i] +'<br>');
            for(var item of coworkers){
                document.write(item +'<br>');
            }

            var obj = {
                egoing: 1,
                leezche: 2,
                duru: 3,
                taeho: 4,
            }
            for(var key in obj){
                document.write(`${key}: ${obj[key]}<br>`);
            }
        </script>
    </head>
    <body>
        <h1>Array</h1>
        <?php
            $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
            echo $coworkers[1];
            array_push($coworkers, 'graphittie');
            foreach ($coworkers as $item) {            
                var_dump($item);
            }

            $obj = array('egoing' => 1, 'leezche' => 2, 'duru' => 3, 'taeho' => 4);
            echo '<br><br>'.json_encode($obj);
            
            foreach ($obj as $key => $value) {
                echo "<br>$key: $value";
            }
        ?>
    </body>
</html>

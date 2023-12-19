<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $path = 'counter.txt';

    function readCounter($path)
    {
        $count = 0;
        $file = fopen($path, 'r');
        $count = fread($file, filesize($path));
        fclose($file);
        return $count;
    }

    $nonActualCount = readCounter($path);
    $ActualCount = $nonActualCount + 1;
    writeCounter($path, $ActualCount);
    echo "Кількість показів сторінки: $ActualCount";

    function writeCounter($path, $count)
    {
        $file = fopen($path, 'w');
        fwrite($file, $count);
        fclose($file);
    } 
    ?>
</body>
</html>
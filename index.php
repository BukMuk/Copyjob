<?php
//enter the link to your sourceimage like http//yourwebsite/img3.jpg
$contents= file_get_contents('link to your image');
//set your timeformat
setlocale(LC_TIME, 'de_DE');
//create the filename (in this case its 2016-08-22_09-27-43)
$savename = strftime("%Y-%m-%d_%H-%M-%S");

$savefile = fopen("$savename.jpg", "w");
fwrite($savefile, $contents);
fclose($savefile);
?>

<!-- Reload page after 80 seconds to save a new image !-->
<script type="text/javascript">
    setTimeout(function(){
   window.location.reload(1);
}, 80000);
</script>
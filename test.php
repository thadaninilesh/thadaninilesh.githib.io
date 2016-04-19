<script>
    $.get("http://ipinfo.io", function(response) {
    console.log(response.postal);
}, "jsonp");
    </script>
    
    
    <?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}
else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else if(!empty($_SERVER['REMOTE_ADDR'])){
    $ip = $_SERVER['REMOTE_ADDR'];
}
echo $ip;

?>
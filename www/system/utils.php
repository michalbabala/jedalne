<?
function strpos_r($haystack, $needle)
{
    if(strlen($needle) > strlen($haystack))
        trigger_error(sprintf("%s: length of argument 2 must be <= argument 1", __FUNCTION__), E_USER_WARNING);

    $seeks = array();
    while($seek = strrpos($haystack, $needle))
    {
        array_push($seeks, $seek);
        $haystack = substr($haystack, 0, $seek);
    }
    return $seeks;
}

function generateRandomString($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>

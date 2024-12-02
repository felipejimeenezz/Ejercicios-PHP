<?

$pesetas = 50;

while ($pesetas <= 1000) {
    $euros = $pesetas / 166.386;
    echo "$pesetas pesetas son $euros euros";
    $pesetas = $pesetas + 50;
}

?>
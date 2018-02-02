<link href="style.css" rel="stylesheet">
<?php
$n = 23;
$html = "<div class='chessboard'>";
for ($i = 0; $i < $n; $i++) {
    if ($i % 2 == 0) {
        $color = 'white';
    } else {
        $color = 'black';
    }
    $html .= "<div class='row'>";
    for ($a = 0; $a < $n; $a++) {
        if ($color == "black") {
            $color = 'white';
        } else {
            $color = 'black';
        }
        $html .= "<div class=\"$color\"></div>";
    }
    $html .= '</div>';
}
$html .= "</div>";
echo $html;

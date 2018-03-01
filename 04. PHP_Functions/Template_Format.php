<?php
declare(strict_types=1);
$input = array_chunk(explode(", ", trim(fgets(STDIN))), 2);

echo $result = toXML($input);

function toXML(array $input): string
{
    $bodyArr = array();
    for ($i = 0; $i < count($input); ++$i) {
        $question = "<question>\n" . $input[$i][0] . "\n" . "</question>\n";
        $answer = "<answer>\n" . $input[$i][1] . "\n" . "</answer>";
        $bodyArr[] = $question . $answer;
    }

    $header = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<quiz>\n";
    $body = implode("\n", $bodyArr);
    $footer = "</quiz>";
    return $header . $body . "\n" . $footer;
}
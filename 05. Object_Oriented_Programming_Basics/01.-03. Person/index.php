<?php
declare(strict_types=1);

require_once 'Person.php';
require_once 'Poll.php';

$poll = new Poll();
$poll->createPoll();
$poll->showPoll();
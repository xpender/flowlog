<?php
date_default_timezone_set('Europe/Berlin');

$config = array(
    'Region' => 'eu-west-1',
    'LogGroupName' => 'FlowLog',
    'StartTime' => mktime(13, 10, 0, 6, 14, 2015) * 1000,
    'EndTime' => mktime(13, 20, 0, 6, 14, 2015) * 1000,
    );

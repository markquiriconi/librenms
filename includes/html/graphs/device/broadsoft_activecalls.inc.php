<?php

$rrd_filename = Rrd::name($device['hostname'], 'sensor-count-broadsoft-bwCallpActiveCalls');

$rrd_list[0]['filename'] = $rrd_filename;
$rrd_list[0]['descr'] = 'Active AS Calls';
$rrd_list[0]['ds'] = 'Active Calls';

$unit_text = 'Active Calls';

$units = '';
$total_units = '';
$colours = 'mixed';

$scale_min = '0';

$nototal = 1;

if ($rrd_list) {
    include 'includes/html/graphs/generic_multi_line.inc.php';
}

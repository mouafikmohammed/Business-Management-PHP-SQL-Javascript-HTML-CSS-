<?php
$exp_date= date(Ymd,strtotime('+15 day'));
$today_date=date(Ymd);

 now convert to strtotime
$exp=strtotime($exp_date);
$td=strtotime($today_date);




?>
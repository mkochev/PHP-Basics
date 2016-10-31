<?php
function getSundays($y, $m)
{
    return new DatePeriod(
        new DateTime("first sunday of $y-$m"),
        DateInterval::createFromDateString('next sunday'),
        new DateTime("last day of $y-$m-01")
    );
}
foreach (getSundays(2016, 9) as $sunday) {
    echo $sunday->format("jS F Y") . "<br/>";
}
?>
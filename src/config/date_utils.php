<?php

function getDateAsDateTime($date){
    return is_string($date) ? new DateTime($date) : $date;
}

function isWeekend($date){
    $inputDate = getDateAsDateTime($date);
    //'N' retorna o numero do dia e se for = ou > q 6 é final de semana
    return $inputDate->format('N') >= 6;
}

function isBefore($date1, $date2){
    $inputDate1 = getDateAsDateTime($date1);
    $inputDate2 = getDateAsDateTime($date2);

    return $inputDate1 <= $inputDate2;
}

function getNextDay($date){
    $inputDate = getDateAsDateTime($date);
    $inputDate->modify('+1 day');
    return $inputDate;
}

function sumIntervals($interval1, $interval2){
    $date = new DateTime('00:00:00');
    $date->add($interval1);
    $date->add($interval2);
    return (new DateTime('00:00:00'))->diff($date);
}

function subtractIntervals($interval1, $interval2){
    $date = new DateTime('00:00:00');
    $date->add($interval1);
    $date->sub($interval2);
    return (new DateTime('00:00:00'))->diff($date);
}

function getDateFromInterval($interval){
    return new DateTimeImmutable($interval->format('%H:%i:%s'));
}

function getDateFromString($str){
    return DateTimeImmutable::createFromFormat('Y-m-d H:i:s', $str); //tirar o dia
}

function getFirstDayOfMonth($date){
    $time = getDateAsDateTime($date)->getTimestamp();
    return new DateTime(date('Y-m-1', $time));
}

function getLastDayOfMonth($date){
    $time = getDateAsDateTime($date)->getTimestamp();
    return new DateTime(date('Y-m-t', $time));
}

function getSecondsFromDateInterval($interval){
    $d1 = new DateTimeImmutable();
    $d2 = $d1->add($interval);

    return $d2->getTimestamp() - $d1->getTimestamp();
}

function isPastWorkday($date){
    return !isWeekend($date) && isBefore($date, new DateTime());
}

function getTimeStringFromSeconds($seconds){
    $h = intdiv($seconds, 3600); //1 hora tem 3600 segundos
    $m = intdiv($seconds % 3600, 60); //resto da divisão de hora dividido por 60 segundos
    $s = $seconds - ($h * 3600) - ($m * 60);
    return sprintf('%02d:%02d:%02d', $h, $m, $s);
}

function formatDateWithLocale($date, $pattern){
    $time = getDateAsDateTime($date)->getTimestamp();
    return utf8_encode(strftime($pattern, $time));
}
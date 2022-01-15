<?php

/**
 * Format format to indonesian date
 * 
 * @param string|null $date Date to format
 * 
 * @return string
 */
function format_to_indonesian_date(string $date = null): string
{
    if ($date == null) return '-';

    $months = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];

    $dates = explode('-', $date);
    $year = $dates[0];
    $month = $months[$dates[1]];
    $day = $dates[2];

    return $day . ' ' . $month . ' ' . $year;
}

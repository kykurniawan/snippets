<?php

/**
 * Format to indonesian rupiah
 * 
 * @param int $number Number to format
 * 
 * @return string
 */
function format_idr(int $number) : string
{
    return "Rp " . number_format($number, 2, ',', '.');
}
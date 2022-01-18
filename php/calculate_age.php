<?php

/**
 * Calculate age with PHP
 * 
 * @param string $dateOfBird Date of bird (Y-m-d)
 * 
 * @return int
 */
function calculate_age(string $dateOfBird)
{
    return date_diff(date_create($dateOfBird), date_create(date("Y-m-d")))->y;
}

<?php

declare(strict_types = 1);

use Phply\Chartisan\Chartisan;

/**
 * Outputing JSON encoded data and
 * the CORS headers.
 */
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

/**
 * Main application entry point.
 */
return static fn (): string => Chartisan::build()
                                        ->labels(['a', 'b', 'c'])
                                        ->dataset('Sample 1', [1, 2 ,3])
                                        ->dataset('Sample 2', [3, 2 ,1])
                                        ->toJSON();

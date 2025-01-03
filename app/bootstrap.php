<?php declare(strict_types=1);
/**
 * Sigma Connected Transport API Server.
 * 
 * @author    Jacques Marneweck <jacques@siberia.co.za>
 * @copyright 2024-2025 Jacques Marneweck.  All rights strictly reserved.
 */

require_once __DIR__ . '/../vendor/autoload.php';

$app = \Slim\App([]);

$routes = require_once __DIR__ . '/routes.php';
$routes($app);

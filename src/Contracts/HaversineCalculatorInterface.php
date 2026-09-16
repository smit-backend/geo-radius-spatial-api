<?php

declare(strict_types=1);

namespace SmitBackend\GeoBound\Contracts;

/**
 * Interface HaversineCalculatorInterface
 *
 * @package SmitBackend\GeoBound
 */
interface HaversineCalculatorInterface
{
    public function execute(array $payload = []): mixed;
}

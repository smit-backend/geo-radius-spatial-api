<?php

declare(strict_types=1);

namespace SmitBackend\GeoBound;

use SmitBackend\GeoBound\Contracts\HaversineCalculatorInterface;

/**
 * Class SpatialRadiusQuery
 *
 * @package SmitBackend\GeoBound
 */
class SpatialRadiusQuery implements HaversineCalculatorInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}

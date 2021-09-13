<?php
namespace Vendimia\Session\Driver;

/**
 * Session driver interface
 */
interface DriverInterface
{
    /**
     * Initializes the session mechanism. Returns the persisted data.
     */
    public function initialize(): array;

    /**
     * Persists the data.
     */
    public function persist(array $data): void;
}
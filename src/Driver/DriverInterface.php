<?php
namespace Vendimia\Session\Driver;

/**
 * Session driver interface
 */
interface DriverInterface
{
    /**
     * Sets this session identifier
     */
    public function setIdentifier(string $identifier): void;

    /**
     * Initializes the session mechanism. Returns the persisted data.
     */
    public function initialize(...$options): array;

    /**
     * Persists the data.
     */
    public function persist(array $data): void;
}

<?php
namespace Vendimia\Session;

use Vendimia\Collection\Collection;

/**
 * Session manager
 */
class SessionManager extends Collection
{
    public function __construct(
        private Driver\DriverInterface $driver
    )
    {
    }

    public function initialize(...$options)
    {
        $this->storage = $driver->initialize(...$options);

        register_shutdown_function([$this, "persist"]);

    }

    /**
     * Saves the session state onto the driver
     */
    public function persist()
    {
        $this->driver->persist($this->storage);
    }
}
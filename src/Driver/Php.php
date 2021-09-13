<?php
namespace Vendimia\Session\Driver;

/**
 * Uses PHP native session mechanism.
 */
class Php implements DriverInterface
{
    public function initialize(): array
    {
        session_start();

        return $_SESSION;
    }

    public function persist(array $data): void
    {
        $_SESSION = $data;
        session_write_close();
    }
}
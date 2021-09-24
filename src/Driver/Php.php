<?php
namespace Vendimia\Session\Driver;

/**
 * Uses PHP native session mechanism.
 */
class Php implements DriverInterface
{
    public function initialize(...$options): array
    {
        session_start($options);

        return $_SESSION;
    }

    public function persist(array $data): void
    {
        $_SESSION = $data;
        session_write_close();
    }
}
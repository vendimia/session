<?php
namespace Vendimia\Session\Driver;

/**
 * Uses PHP native session mechanism.
 */
class Php implements DriverInterface
{
    private ?string $identifier = null;

    public function setIdentifier(?string $identifier): void
    {
        $this->identifier = $identifier;
    }

    public function initialize(...$options): array
    {
        if ($this->identifier) {
            session_name($this->identifier);
        }

        session_start($options);

        return $_SESSION;
    }

    public function persist(array $data): void
    {
        $_SESSION = $data;
        session_write_close();
    }
}
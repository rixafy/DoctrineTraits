<?php

declare(strict_types=1);

namespace Rixafy\DoctrineTraits;

use Ramsey\Uuid\UuidInterface;

trait UniqueTrait
{
    /**
     * @var UuidInterface
     *
     * @ORM\Id
     * @ORM\Column(type="uuid_binary", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    protected $id;

    public function getId(): ?UuidInterface
    {
        return $this->id;
    }
}

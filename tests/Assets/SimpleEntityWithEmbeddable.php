<?php

declare(strict_types=1);

namespace DoctrineTest\Laminas\Hydrator\Assets;

class SimpleEntityWithEmbeddable
{
    /** @var int */
    protected $id;

    /** @var EmbedabbleEntity */
    protected $embedded;

    public function __construct()
    {
        $this->embedded = new EmbedabbleEntity();
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setEmbedded(EmbedabbleEntity $embedded)
    {
        $this->embedded = $embedded;
    }

    public function getEmbedded(): EmbedabbleEntity
    {
        return $this->embedded;
    }
}
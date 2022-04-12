<?php

namespace App\Entity;

use App\Repository\TargetListRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TargetListRepository::class)
 */
class TargetList
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $target_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTargetName(): ?string
    {
        return $this->target_name;
    }

    public function setTargetName(string $target_name): self
    {
        $this->target_name = $target_name;

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\AutomobileMarksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AutomobileMarksRepository::class)
 */
class AutomobileMarks
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
    private $mark_name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarkName(): ?string
    {
        return $this->mark_name;
    }

    public function setMarkName(string $mark_name): self
    {
        $this->mark_name = $mark_name;

        return $this;
    }



}
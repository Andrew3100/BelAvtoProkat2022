<?php

namespace App\Entity;

use App\Repository\AutomobilesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AutomobilesRepository::class)
 */
class Automobiles
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $mark_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model_name;

    /**
     * @ORM\Column(type="string", length=2500)
     */
    private $photo_link;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarkId(): ?int
    {
        return $this->mark_id;
    }

    public function setMarkId(int $mark_id): self
    {
        $this->mark_id = $mark_id;

        return $this;
    }

    public function getModelName(): ?string
    {
        return $this->model_name;
    }

    public function setModelName(string $model_name): self
    {
        $this->model_name = $model_name;

        return $this;
    }

    public function getPhotoLink(): ?string
    {
        return $this->photo_link;
    }

    public function setPhotoLink(string $photo_link): self
    {
        $this->photo_link = $photo_link;

        return $this;
    }
}
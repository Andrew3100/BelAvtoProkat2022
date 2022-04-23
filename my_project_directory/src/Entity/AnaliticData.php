<?php

namespace App\Entity;

use App\Repository\AnaliticDataRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnaliticDataRepository::class)
 */
class AnaliticData
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
    private $type_target_rent_list;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_rent_length_list;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status_rent;

    /**
     * @ORM\Column(type="integer")
     */
    private $count_people;

    /**
     * @ORM\Column(type="integer")
     */
    private $trunk_capacity;

    /**
     * @ORM\Column(type="integer")
     */
    private $soundbar;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $box_type_list;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $road_type_list;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $interior_material;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $gas;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $by_100;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ower;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeTargetRentList(): ?string
    {
        return $this->type_target_rent_list;
    }

    public function setTypeTargetRentList(string $type_target_rent_list): self
    {
        $this->type_target_rent_list = $type_target_rent_list;

        return $this;
    }

    public function getTypeRentLengthList(): ?string
    {
        return $this->type_rent_length_list;
    }

    public function setTypeRentLengthList(string $type_rent_length_list): self
    {
        $this->type_rent_length_list = $type_rent_length_list;

        return $this;
    }

    public function getStatusRent(): ?string
    {
        return $this->status_rent;
    }

    public function setStatusRent(string $status_rent): self
    {
        $this->status_rent = $status_rent;

        return $this;
    }

    public function getCountPeople(): ?int
    {
        return $this->count_people;
    }

    public function setCountPeople(int $count_people): self
    {
        $this->count_people = $count_people;

        return $this;
    }

    public function getTrunkCapacity(): ?int
    {
        return $this->trunk_capacity;
    }

    public function setTrunkCapacity(int $trunk_capacity): self
    {
        $this->trunk_capacity = $trunk_capacity;

        return $this;
    }

    public function getSoundbar(): ?int
    {
        return $this->soundbar;
    }

    public function setSoundbar(int $soundbar): self
    {
        $this->soundbar = $soundbar;

        return $this;
    }

    public function getBoxTypeList(): ?string
    {
        return $this->box_type_list;
    }

    public function setBoxTypeList(string $box_type_list): self
    {
        $this->box_type_list = $box_type_list;

        return $this;
    }

    public function getRoadTypeList(): ?string
    {
        return $this->road_type_list;
    }

    public function setRoadTypeList(string $road_type_list): self
    {
        $this->road_type_list = $road_type_list;

        return $this;
    }

    public function getInteriorMaterial(): ?string
    {
        return $this->interior_material;
    }

    public function setInteriorMaterial(string $interior_material): self
    {
        $this->interior_material = $interior_material;

        return $this;
    }

    public function getGas(): ?string
    {
        return $this->gas;
    }

    public function setGas(string $gas): self
    {
        $this->gas = $gas;

        return $this;
    }

    public function getBy100(): ?string
    {
        return $this->by_100;
    }

    public function setBy100(string $by_100): self
    {
        $this->by_100 = $by_100;

        return $this;
    }

    public function getOwer(): ?string
    {
        return $this->ower;
    }

    public function setOwer(string $ower): self
    {
        $this->ower = $ower;

        return $this;
    }
}

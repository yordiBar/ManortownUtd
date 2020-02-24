<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 */
class Team
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    
    /**
     * @ORM\Column(type="text", length=100)
     */
    private $teamName;

    public function getTeamName()
    {
        return $this->teamName;
    }

    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;
    }


    /**
     * @ORM\Column(type="text", length=100)
     */
    private $contact_Name;

    public function getContactName()
    {
        return $this->contact_Name;
    }

    public function setContactName($contact_Name)
    {
        $this->contact_Name = $contact_Name;
    }

    /**
     * @ORM\Column(type="text", length=100)
     */
    private $contact_Number;

    public function getContactNumber()
    {
        return $this->contact_Number;
    }

    public function setContactNumber($contact_Number)
    {
        $this->contact_Number = $contact_Number;
    }


    /**
     * @ORM\Column(type="text", length=100)
     */
    private $teamAgeGroup;

    public function getTeamAgeGroup()
    {
        return $this->teamAgeGroup;
    }

    public function setTeamAgeGroup($teamAgeGroup)
    {
        $this->teamAgeGroup = $teamAgeGroup;
    }
}

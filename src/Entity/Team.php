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


    // /**
    //  * @ORM\Column(type="text", length=100)
    //  */
    // private $playerName;

    // public function getPlayerName()
    // {
    //     return $this->playerName;
    // }

    // public function setPlayerName($playerName)
    // {
    //     $this->playerName = $playerName;
    // }


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

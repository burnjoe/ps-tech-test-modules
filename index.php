<?php

// Athlete Class
class Athlete
{
    private $name;
    private $weight;
    private $height;
    private $age;

    public function __construct($name, $weight, $height, $age)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
}

// Event Class
class Event
{
    private $athletes;
    private $matches;

    public function __construct(array $athletes)
    {
        if (array_filter($athletes, fn ($athlete) => !$athlete instanceof Athlete)) {
            throw new InvalidArgumentException("Athlete type required");
        }

        $this->athletes = $athletes;
    }

    public function getAthletes() {
        return $this->athletes;
    }

    public function getMatches() {
        return $this->matches;
    }

    public function getMatchFromRound($round) {
        // code here...
    }

    public function generateMatches() {
        // code here...
    }
}


$event = new Event($athletes);

$event->generateMatches();

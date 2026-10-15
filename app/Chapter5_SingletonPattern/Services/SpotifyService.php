<?php

namespace App\Chapter5_SingletonPattern\Services;

class SpotifyService implements IMusicService
{
    private string $serviceType = "Spotify Service";
    function getServiceName(): string
    {
        return $this->serviceType;
    }
}

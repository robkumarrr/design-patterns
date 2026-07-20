<?php

namespace App\Chapter5_SingletonPattern\Services;

class AppleMusicService implements IMusicService
{
    private string $serviceType = "Apple Music Service";
    function getServiceName(): string
    {
        return $this->serviceType;
    }
}

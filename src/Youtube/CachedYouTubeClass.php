<?php

declare(strict_types=1);

namespace App\Youtube;

class CachedYouTubeClass implements ThirdPartyYouTubeLib
{
    private ?array $listCache = null;

    private ?array $videoCache = null;

    private bool $needReset = false;

    public function __construct(
        private ThirdPartyYouTubeLib $service,
    ) { }

    public function listVideos(): array
    {
        if ($this->listCache === null || $this->needReset) {
            $this->listCache = $this->service->listVideos();
        }

        return $this->listCache;
    }

    public function getVideoInfo(int $id): array
    {
        if ($this->videoCache === null || $this->needReset) {
            $this->videoCache = $this->service->getVideoInfo($id);
        }

        return $this->videoCache;
    }

    public function downloadVideo(int $id): string
    {
        if ($this->downloadExists($id) || $this->needReset) {
            return $this->service->downloadVideo($id);
        }
    }

    private function downloadExists(int $id): bool
    {
        return $this->service->downloadVideo($id) !== null;
    }
}
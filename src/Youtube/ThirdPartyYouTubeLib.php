<?php

namespace App\Youtube;

interface ThirdPartyYouTubeLib
{
    public function listVideos(): array;

    public function getVideoInfo(int $id): array;

    public function downloadVideo(int $id): string;
}
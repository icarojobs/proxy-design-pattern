<?php

declare(strict_types=1);

namespace App\Youtube;

class YouTubeManager
{
    public function __construct(
        protected ThirdPartyYouTubeLib $service,
    ) { }

    public function renderVideoPage(int $id): array
    {
        return $this->service->getVideoInfo($id);
    }

    public function renderListPanel(): array
    {
        return $this->service->listVideos();
    }

    public function reactOnUserInput(int $videoId): void
    {
        echo "------------------------------------------------" . PHP_EOL;

        print_r($this->renderVideoPage($videoId));


        echo "------------------------------------------------" . PHP_EOL;

        print_r($this->renderListPanel());

        echo "------------------------------------------------" . PHP_EOL;
    }
}
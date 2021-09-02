<?php

declare(strict_types=1);

namespace App\Youtube;

class Application
{
    public function init()
    {
        $youtubeService = new ThirdPartyYouTubeClass();
        $youtubeProxy = new CachedYouTubeClass($youtubeService);

        $manager = new YouTubeManager($youtubeProxy);

        $videoId = (int) $this->inputReader("Informe o ID do vídeo desejado: ");

        $manager->reactOnUserInput($videoId);
    }

    private function inputReader(string $question): string
    {
        $fh = fopen('php://stdin', 'r');
        echo $question;
        $userInput = trim(fgets($fh));
        fclose($fh);

        return $userInput;
    }
}
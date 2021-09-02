<?php

declare(strict_types=1);

namespace App\Youtube;

class ThirdPartyYouTubeClass implements ThirdPartyYouTubeLib
{

    public function listVideos(): array
    {
        echo "Enviando requisição para Youtube via API..." . PHP_EOL;
        sleep(2);

        return [
            1 => ['id' => 1, 'title' => 'Video 01', 'description' => 'Description 01', 'url' => 'https://yb.eu/01'],
            2 => ['id' => 2, 'title' => 'Video 02', 'description' => 'Description 02', 'url' => 'https://yb.eu/02'],
            3 => ['id' => 3, 'title' => 'Video 03', 'description' => 'Description 03', 'url' => 'https://yb.eu/03'],
            4 => ['id' => 4, 'title' => 'Video 04', 'description' => 'Description 04', 'url' => 'https://yb.eu/04'],
        ];
    }

    public function getVideoInfo(int $id): array
    {
        echo "Obtendo vídeo {$id} da API do Youtube: " . PHP_EOL;
        sleep(1);

        $videos = [
            1 => ['id' => 1, 'title' => 'Video 01', 'description' => 'Description 01', 'url' => 'https://yb.eu/01'],
            2 => ['id' => 2, 'title' => 'Video 02', 'description' => 'Description 02', 'url' => 'https://yb.eu/02'],
            3 => ['id' => 3, 'title' => 'Video 03', 'description' => 'Description 03', 'url' => 'https://yb.eu/03'],
            4 => ['id' => 4, 'title' => 'Video 04', 'description' => 'Description 04', 'url' => 'https://yb.eu/04'],
        ];

        $result = $videos[$id] ?? null;

        if (is_null($result)) {
            throw new \Exception("O vídeo {$id} não foi encontrado.");
        }

        return $result;
    }

    public function downloadVideo(int $id): string
    {
        $videos = [
            1 => ['id' => 1, 'title' => 'Video 01', 'description' => 'Description 01', 'url' => 'https://yb.eu/01'],
            2 => ['id' => 2, 'title' => 'Video 02', 'description' => 'Description 02', 'url' => 'https://yb.eu/02'],
            3 => ['id' => 3, 'title' => 'Video 03', 'description' => 'Description 03', 'url' => 'https://yb.eu/03'],
            4 => ['id' => 4, 'title' => 'Video 04', 'description' => 'Description 04', 'url' => 'https://yb.eu/04'],
        ];

        $result = $videos[$id]['url'] ?? null;

        if (is_null($result)) {
            throw new \Exception("Não foi possível baixar o vídeo {$id}, pois ele não foi encontrado");
        }

        return $result;
    }
}
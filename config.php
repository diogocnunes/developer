<?php

return [
    'baseUrl' => 'https://developer-vert.vercel.app',
    'production' => true,
    'title' => 'Diogo Nunes - Certified Laravel Developer ',
    'description' => 'Senior Full-Stack Engineer specializing in high-security Laravel ecosystems. Building mission-critical solutions for government and global enterprises.',
    'collections' => [],
    'vite' => function ($page, $path) {
        if ($page->production) {
            static $manifest;
            if (!$manifest) {
                $manifestPath = __DIR__ . '/source/assets/build/manifest.json';
                if (file_exists($manifestPath)) {
                    $manifest = json_decode(file_get_contents($manifestPath), true);
                }
            }
            $manifestKey = "source/_assets/" . $path;
            if ($manifest && isset($manifest[$manifestKey])) {
                return $page->baseUrl . '/assets/build/' . $manifest[$manifestKey]['file'];
            }
            return $page->baseUrl . '/assets/build/' . $path;
        }
        return "http://localhost:5173/source/_assets/{$path}";
    },
];

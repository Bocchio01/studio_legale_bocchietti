<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;
use League\Flysystem\FilesystemException;

class GoogleDriveHelper
{
    public static function create_folder_structure($path = '')
    {
        $googleDisk = Storage::disk('google');
        $result = [
            'name' => basename($path),
            'type' => 'folder',
            'children' => []
        ];

        try {
            $listing = $googleDisk->listContents($path, false);

            foreach ($listing as $item) {
                $itemPath = $item->path();

                if ($item instanceof \League\Flysystem\FileAttributes) {
                    $fileName = basename($itemPath);
                    $fileUrl = $googleDisk->url($itemPath);

                    $queryString = parse_url($fileUrl, PHP_URL_QUERY);
                    parse_str($queryString, $queryParams);
                    $fileID = $queryParams['id'];

                    $result['children'][] = [
                        'name' => $fileName,
                        'type' => 'file',
                        'url' => $fileUrl,
                        'ID' => $fileID,
                    ];

                } elseif ($item instanceof \League\Flysystem\DirectoryAttributes) {
                    $dirName = basename($itemPath);
                    $result['children'][] = self::create_folder_structure($itemPath);
                }
            }
        } catch (FilesystemException $exception) {
            $result['error'] = $exception->getMessage();
        }

        return $result;
    }

    public static function findUrlById($array, $targetId) {
        if (isset($array['ID']) && $array['ID'] === $targetId) {
            return $array['url'];
        }

        if (isset($array['children'])) {
            foreach ($array['children'] as $child) {
                $result = self::findUrlById($child, $targetId);
                if ($result) {
                    return $result;
                }
            }
        }

        return null;
    }
}




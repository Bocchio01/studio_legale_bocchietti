<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VademecumController extends Controller
{
    protected static $basePath = 'Vademecum aste immobiliari/';

    /**
     * Handle the incoming request.
     */
    public function index(Request $request): Response
    {
        $googleDisk = Storage::disk('google');

        // $filePathList = $googleDisk->listContents(self::$basePath);

        $filePathList = $googleDisk->files(self::$basePath);
        $fileNameList = array_map(function($filePath) {
            return str_replace(self::$basePath, '', $filePath);
        }, $filePathList);

        $fileUrl = $googleDisk->url($request->fileName ? self::$basePath . $request->fileName : $filePathList[0]);
        $parsedUrl = parse_url($fileUrl);
        parse_str($parsedUrl['query'], $queryParams);
        $fileID = $queryParams['id'] ?? null;

        return response()->view('pages.vademecum', [
            'fileNameList' => $fileNameList,
            'fileID' => $fileID,
        ]);
    }
}

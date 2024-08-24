<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\GoogleDriveHelper;

class CurriculaController extends Controller
{
    protected static $basePath = 'Curricula/';

    /**
     * Handle the incoming request.
     */
    public function index(Request $request): Response
    {
        $curriculaObj = array(GoogleDriveHelper::create_folder_structure(self::$basePath));

        $fileID = $request->input('ID') ?? $curriculaObj[0]['children'][0]['ID'];
        $fileURL = GoogleDriveHelper::findUrlById($curriculaObj[0], $fileID);

        return response()->view('pages.curricula', [
            'curriculaObj' => $curriculaObj,
            'fileID' => $fileID,
            'fileURL' => $fileURL,
        ]);
    }
}

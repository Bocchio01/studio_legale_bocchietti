<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Helpers\GoogleDriveHelper;

class VademecumController extends Controller
{
    protected static $basePath = 'Vademecum aste immobiliari/';

    /**
     * Handle the incoming request.
     */
    public function index(Request $request): Response
    {
        $vademecumObj = array(GoogleDriveHelper::create_folder_structure(self::$basePath));

        $fileID = $request->input('ID') ?? '11EGxOU9MwVln8nGce_iBQahuEkldIkPf';
        $fileURL = GoogleDriveHelper::findUrlById($vademecumObj[0], $fileID);

        return response()->view('pages.vademecum', [
            'vademecumObj' => $vademecumObj,
            'fileID' => $fileID,
            'fileURL' => $fileURL,
        ]);
    }
}

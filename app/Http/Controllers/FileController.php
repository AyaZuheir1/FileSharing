<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class FileController extends Controller
{
    
    public function view()
    {
        $files = File::all();
        return view('view', compact('files'));
    }
    public function index()
    {
        $files = File::all();
        return view('index', compact('files'));
    }

    public function upload(Request $request)
    {
    // التحقق من وجود ملفات تم تحديدها في النموذج
  
    if ($request->hasFile('file')) {
        $uploadedFile = $request->file('file');
        $fileName = $uploadedFile->getClientOriginalName();
        $filePath = $uploadedFile->store('uploads');

        // حفظ الملف في مجلد التحميلات (storage/app/public)
        $path = $uploadedFile->store('public/uploads');

        // حفظ بيانات الملف في قاعدة البيانات
        $file = new File();
        $file->file_name = $fileName;
        $file->file_size = $uploadedFile->getSize();
        $file->file_path = $filePath;
        $file->save();

        return 'the file uploded successfully';
    }

    return 'no files to upload';
    }

    public function showUploadedFiles()
    {
        $files = File::all();
        return view('file', compact('files'));
    }

   
    public function shareFile($id)
{
    $file = File::findOrFail($id);
    if (!$file) {
        return redirect()->back()->with('error', 'File not found!');
    }

    $shareLink = URL::signedRoute('file.download', ['id' => $file->id]);

    return $shareLink ;

   
}

public function downloadFile($id)
{
    $file = File::findOrFail($id);
    $filePath = storage_path('app/' . $file->file_path);

    return response()->download($filePath);
}
}

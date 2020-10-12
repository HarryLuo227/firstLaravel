<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #使用者id
        $id = Auth::id();

        #導向使用者相簿頁
        return redirect()->route('photos.show', $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        #使用者id
        $id = Auth::id();

        return view('photos/uploadImg', [$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::id();
        #處理上傳圖檔
        if($request->hasFile('files')){                                     //檢查是否存在要上傳的檔案
            $files = $request->file('files');                               //指定檔案物件給$files變數

            foreach($files as $file){
                #檔案資訊陣列
                $info = [
                    'mime-type' => $file->getMimeType(),                    //取得檔案類型
                    'filename' => $file->getClientOriginalName(),           //取得原始檔案名稱
                    'extension' => $file->getClientOriginalExtension(),     //取得副檔名
                    'size' => $file->getSize(),                       //取得檔案大小
                ];

                /**
                 *檔案儲存
                 * files_obj->storeAs()
                 *  格式:files_obj->storeAs($default_PATH = projectName/storage/app/public, $fileName)
                 */
                $file->storeAs('public/img/album'.$id, $info['filename']);
            }
        }

        return redirect()->route('photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        #$id = Auth::id();

        #取得指定目錄下所有檔案
        $files = get_files(storage_path('app/public/img/album'.$id));

        $data = [
            'id' => $id,
            'files' => $files,
        ];
        
        return view('photos/imgGallery', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

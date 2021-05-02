<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UploadAvatarController extends Controller
{
    public function Upload()
    {
        $avatar=auth()->user();
        return view('users.avatar',['avatar'=>$avatar]);
    }
    public function UploadAvatar(Request $request)
    {
        if ($request->hasFile('image')){
//            return $user;
            $filename = $request->image->getClientOriginalName();
            $this->deleteOldImage();
            $request->image->storeAs('AvatarImages', $filename, 'public');
            auth()->user()->update(['avatar'=>$filename]);
            return redirect()->back()->with('message','image uploaded');
        } else {
            return redirect()->back()->with('error', 'something went wrong!');
        }

    }


        protected function deleteOldImage(){
        if(auth()->user()->avatar){
            Storage::delete('/public/AvatarImages/'.auth()->user()->avatar);
                }
         }



}

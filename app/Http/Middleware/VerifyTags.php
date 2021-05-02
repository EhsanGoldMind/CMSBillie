<?php

namespace App\Http\Middleware;

use App\Models\Tag;
use Closure;
use Illuminate\Http\Request;

class VerifyTags
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Tag::all()->count()===0){
            session()->flash('Tag','There is no tag you have to create Tags first');
            return redirect()->to('/login');
        }
        return $next($request);
    }
}

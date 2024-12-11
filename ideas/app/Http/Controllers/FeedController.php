<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea; 

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $followingIds = $user->followings()->pluck("user_id");


        $ideas = Idea::whereIn('user_id', $followingIds)->latest();

        if(request()->has("search")){
            $ideas = $ideas->search(request("search", ""));
        }


        return view("dashboard", [
            'ideas' => $ideas->paginate(5)
        ]);
    }
}

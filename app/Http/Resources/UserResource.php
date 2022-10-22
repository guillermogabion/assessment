<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $count = DB::table('users')
            ->select('referred_by', DB::raw('count(*) as total'))
            ->groupBy('referred_by')
            ->get();
        // $user = User::where('id', $count->referred_by)->first();

        return [
            // 'user' => $user,
            'total' => $count
        ];
    }
}

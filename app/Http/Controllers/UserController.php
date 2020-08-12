<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::with(["job"])->orderBy("created_at", "DESC")->paginate(10);

        return view('admin.users.index', compact('users'));
    }

    public function destroy($id){
        $user = User::with(['reports'])->where('id', $id)->firstOrFail();

        if (count($user->reports) > 0){
            return redirect(route('admin.users.index'))
                ->with(["error" => "User memiliki laporan"]);
        }
        \File::delete('assets/image'.$user->image);

        $user->delete();

        return redirect(route('admin.users.index'))
            ->with(["success" => "User berhasil dihapus"]);
    }

}

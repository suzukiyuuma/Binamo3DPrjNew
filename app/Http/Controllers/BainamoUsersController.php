<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BainamoUser;

class BainamoUsersController extends Controller
{
    public function getAll()
    {
        $users = BainamoUser::get(['id', 'name', 'email']);
        return response()->json($users);
    }

    public function create(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|unique:bainamo_users|max:255',
        //     'password' => 'required|min:6'
        // ]);

        $user = new BainamoUser();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return response()->json($user);
    }

    public function show(Request $request, $id)
    {
        $user = BainamoUser::find($id);

        if (!$user) {
            return response()->json(['message' => "User $id not found"], 404);
        }

        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255'
        ]);

        $user = BainamoUser::find($id);

        if (!$user) {
            return response()->json(['message' => "User $id not found"], 404);
        }

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->save();

        return response()->json($user);
    }

    public function destroy(Request $request, $id)
    {
        $user = BainamoUser::find($id);

        if (!$user) {
            return response()->json(['message' => "User $id not found"], 404);
        }

        $user->delete();

        return response()->json(['message' => "User $id deleted successfully"]);
    }
}

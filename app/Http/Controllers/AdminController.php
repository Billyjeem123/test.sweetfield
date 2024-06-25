<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard(){

        $usersCount = User::all()->count();

        return  view('admin.index', ['usersCount' => $usersCount]);
    }

    public function menu(){

        return  view('admin.menu');
    }


    public function orders(){

        return  view('admin.order');
    }

    public function testimonials(){

        return  view('admin.testimonials');
    }

    public function messages(){

        return  view('admin.messages');
    }


    public function advert(){

        return  view('admin.advert.advert');
    }


    public function users(){

         $users = User::paginate(5);
        return  view('admin.users', ['items' => $users, 'users' => $users]);
    }



    public function registerAdmin(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            return redirect()->back()->withErrors($validator)->with('error', $firstError)->withInput();
        }

        // Create the user with default password and admin role
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make('admin123'), // default password
            'role' => 'admin', // assign role as admin
        ]);

        return redirect()->back()->with('success', 'Admin user created successfully.');
    }


    public function delete_user($id)
    {
        $user = User::find($id);

        $user->delete();

        return Redirect::back()->with('success', 'User deleted successfully!');

    }


    public function uploadMenu(Request $request)
    {
        // Validate the form inputs
        $validator = Validator::make($request->all(), [
            'menuName' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'nullable|string|max:255',
            'contentPrice' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $data = $validator->validated();

            // Handle file upload
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request);
            }

            # Save the menu to the database
            Menu::create([
                'name' => $data['menuName'],
                'price' => $data['price'],
                'image' => $data['image'] ?? null,
                'content' => $data['content'] ?? null,
                'content_price' => 0
            ]);

            return redirect()->back()->with('success', 'Menu uploaded successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

    private function uploadImage($request): ?string
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Generate a unique name for the file
            $file->storeAs('public/uploads', $fileName);
            $fileUrl = asset('storage/uploads/' . $fileName);

            return $fileUrl;
        }

        return null;
    }






}

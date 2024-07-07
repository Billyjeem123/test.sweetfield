<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function dashboard(){

        $usersCount = User::all()->count();
        $menusCount = Menu::all()->count();

        return  view('admin.index', ['usersCount' => $usersCount, 'menusCount' => $menusCount]);
    }

    public function menu(){

       $menus = Menu::paginate(5);
        return  view('admin.menu', ['items' => $menus, 'menus' => $menus]);
    }






    public function orders(){

        return  view('admin.order');
    }

    public function testimonials(){

        $testimonials = Testimonial::paginate(6);
        return  view('admin.testimonials', ['testimonials' => $testimonials]);
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

    public function deleteMenu($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->back()->with('success', 'Menu deleted successfully!');
    }

    public function viewImage($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.view-image', compact('menu'));
    }

    public function edit_menu($edit_menu){


         $menu =  Menu::find($edit_menu);

         return view ('admin.edit_menu', compact('menu'));


}




    public function update_menu(Request $request, $menu_id)
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

            // Find the existing menu item
            $menu = Menu::findOrFail($menu_id);

            // Handle file upload
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request);
            }

            // Update the menu item
            $menu->update([
                'name' => $data['menuName'],
                'price' => $data['price'],
                'image' => $data['image'] ?? $menu->image, // Retain existing image if no new image is uploaded
                'content' => $data['content'] ?? $menu->content,
                'content_price' => $data['contentPrice'] ?? $menu->content_price
            ]);

            return redirect()->back()->with('success', 'Menu updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }



    // Handle the admin login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.index');
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors(['email' => 'Access denied.']);
            }
        }

        return redirect()->route('admin.login')->withErrors(['email' => 'Invalid credentials.']);
    }



    public function reject($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->status = 'rejected';
        $testimonial->save();

        return redirect()->route('testimonials')->with('status', 'Testimonial rejected successfully.');
    }

    public function approve($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->status = 'approved';
        $testimonial->save();

        return redirect()->route('testimonials')->with('status', 'Testimonial approved successfully.');
    }






}

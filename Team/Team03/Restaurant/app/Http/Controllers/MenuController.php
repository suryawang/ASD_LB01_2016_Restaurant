<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function getAllMenus() {
        $menus = Food::all();
        $seat = 0;
        if(isset($_COOKIE['seat']))
            $seat = $_COOKIE['seat'];
        return view('enduser.menu', ['menus' => $menus, 'seat' => $seat ]);
    }

    public function showAllMenusAdmin() {
        $menus = Food::all();
        return view('admin.foodlist', ['menus' => $menus]);
    }

    public function editMenuForm($id) {
        $menu = Food::find($id);
        return view('admin.editmenu', ['menu' => $menu]);
    }

    public function editMenu(Request $request) {
        $menu = Food::find($request->id);
        if($menu) {
            $menu->name = $request->name;
            $menu->type = $request->type;
            $menu->price = $request->price;
            if($request->upload) {
                $destinationPath = 'assets/img/menu'; // upload path
                $extension = $request->upload->getClientOriginalExtension(); // getting image extension
                $fileName = rand(11111,99999).'.'.$extension; // renameing image
                $request->upload->move($destinationPath, $fileName); // uploading file to given path
                $menu->picture = $fileName;
            }
            $menu->save();
        }
        return redirect('/admin/foodlist');
    }

    public function showAddForm() {
        return view('admin.addmenu');
    }
    public function addMenu(Request $request) {
        $menu = new Food();
        $menu->name = $request->name;
        $menu->type = $request->type;
        $menu->price = $request->price;
        $menu->duration = $request->duration;
        if($request->upload) {
            $destinationPath = 'assets/img/menu'; // upload path
            $extension = $request->upload->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            $request->upload->move($destinationPath, $fileName); // uploading file to given path
            $menu->picture = $fileName;
        }
        $menu->save();
        return redirect('/admin/foodlist');
    }

    public function deleteMenu($id) {
        $menu = Food::find($id);
        $menu->delete();
        return back();
    }

    public function chooseSeat(Request $request){
        setcookie("order".$request->seat, "", time()+3600, '/');
        setcookie("seat", $request->seat, time()+3600, '/');
        return redirect('/menu');
    }
}

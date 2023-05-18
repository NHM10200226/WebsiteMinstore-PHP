<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Components\MenuRecusive;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class MenuController extends Controller
{
    private $menuRecusive;
    private $menu;
    public function __construct(MenuRecusive $menuRecusive, Menu $menu)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menu;
    }
    public function index()
    {
        $menus = $this->menu->latest()->paginate(5);
        return view('Admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $optionSelect = $this->menuRecusive->menuRecusiveAdd();
        return view(('Admin.menus.add'), compact('optionSelect'));
    }

    public function store(Request $request)
    {

        $this->menu->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->route('menus.index');
    }

    public function getMenu($parentId)
    {
    }

    public function edit(Request $request, $id)
    {
        $menusFollowIdEdit = $this->menu->find($id);
        $optionSelect = $this->menuRecusive->menuRecusiveEdit($menusFollowIdEdit->parent_id);
        return view('Admin.menus.edit', compact('optionSelect', 'menusFollowIdEdit'));
    }

    public function update($id, Request $request)
    {
        $this->menu->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->route('menus.index');
    }

    public function delete($id)
    {
        try {
            $this->menu->find($id)->delete();
            return response()->json([
                'code' => 200,
                'massage' => 'Delete success'
            ], 200);
        } catch (\Exception $exception) {
            Log::error('Message:' . $exception->getMessage() . 'Line:' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'massage' => 'Delete fail'
            ], 500);
        }
    }
}

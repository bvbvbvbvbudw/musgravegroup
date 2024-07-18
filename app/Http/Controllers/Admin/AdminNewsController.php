<?php

// TODO: update controller.

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminNewsController extends Controller
{
    public function index()
    {
        return view('musgravegroup.admin.pages.news.index');
    }

    public function create()
    {
        return view('musgravegroup.admin.pages.news.create'); // maybe make universal form, ICU.
    }

    public function store(RequestStoreNews $request) // change name
    {
        $data = $request->validate();
        News::create($data);
        return redirect()->back()->with(['status' => 'Success']);
    }

    public function edit($id)
    {
        $item = News::find($id);
        if($item)
        {
            return view('musgrave.group.admin.pages.news.edit');
        } else return redirect()->back()->with(['status' => 'Not found']);
    }
    public function show($id)
    {
        //
    }

    public function update(RequestStoreNews $request, $id) // change name
    {
        $data = $request->validated();
        News::find($id)->update($data);
        return redirect()->back()->with(['status' => 'Success']);
    }
    public function destroy ($id)
    {
        News::findOrFail($id)->destroy();
        return redirect()->back()->with(['status' => 'Success']);
    }
}

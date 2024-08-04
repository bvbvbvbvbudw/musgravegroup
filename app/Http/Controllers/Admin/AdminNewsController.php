<?php

// TODO: update controller.

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminNewsController extends Controller
{

    protected function getFields()
    {
        return  [
            ['name' => 'title', 'label' => 'Заголовок', 'type' => 'text', 'required' => true],
            ['name' => 'content', 'label' => 'Контент', 'type' => 'textarea', 'required' => true],
            // Добавьте другие поля по необходимости
        ];
    }

    public function index()
    {
        return view('musgravegroup.admin.pages.news.index');
    }

    public function create()
    {
        $title = "Create news";
        $fields = $this->getFields();
        return view('musgravegroup.admin.pages.form', compact('fields', 'title')); // maybe make universal form, ICU.
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

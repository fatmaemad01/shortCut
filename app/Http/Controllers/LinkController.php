<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LinkController extends Controller
{
    public function index()
    {
        $links = DB::table('links')->get();
        return view('dashboard.dashboard', compact('links'));
    }


    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $rules = $this->rules();
        $request->validate($rules);

        $short_link = Str::random(8);

        $data = $request->all();
        $data['link'] = $request->post('link');
        $data['title'] = $request->post('title');
        $data['short_link'] = "http://shortUrl/$short_link";
        $links = Link::create($data);

        return redirect()->route('dashboard.index', compact('data'));
    }


    public function redirect($short_link)
    {
        $link = Link::where('short_link', $short_link)->first();

        if (!$short_link) {
            abort(404);
        } else {
          $short = Str::substr($link->link , 15);
            return redirect()->away(url($short));
        }
    }

    public function edit($id)
    {
        // $link = Link::findOrFail($id);

    }

    public function update()
    {
    }

    public function destroy($id)
    {
        Link::destroy($id);
        return redirect()->route('dashboard.index');
    }

    protected function rules()
    {
        return [
            'link' => 'url|required',
            'title' => 'required|min:5|string'
        ];
    }
}

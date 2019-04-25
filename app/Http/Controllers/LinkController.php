<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{
    public function list() {
        $userId = auth()->user()->id;
        $links = Link::where('user_id', $userId)->paginate(5);

        return view(
            'panel.links.list',
            compact('links')
        );
    }

    public function delete(Request $request, $id) {
        $link = Link::findOrFail($id);

        // Cek apakah yang menghapus adalah pemilik link
        $toast = ['toastr' => $this->toast('You are not link owner')];
        if(auth()->user()->id == $link->user_id) {
            $toast = ['toastr' => $this->toast('Link Deleted', 'success', 'Yey!')];
            $link->delete();
        }

        return redirect()->route('panel.links')->with($toast);
    }

    public function add(Request $request) {
        // Jika ada form-data yang dikirim, arahkan ke proses operasi database
        if($request->has('_token')) {
            return $this->addEditAction($request);
        }

        // Jika hanya akses url, arahkan ke view
        return view('panel.links.addedit', [
            'operation' => 'add'
        ]);
    }

    public function edit(Request $request, $id=null) {
        // Jika ada form-data yang dikirim, arahkan ke proses operasi database
        if($request->has('_token')) {
            return $this->addEditAction($request);
        }

        // Jika hanya akses url, arahkan ke view
        return view('panel.links.addedit', [
            'operation' => 'edit',
            'link' => Link::findOrFail($id)
        ]);
    }

    private function addEditAction(Request $request) {
        $operation = $request->operation;

        $link = new Link();
        $toast = ['toastr' => $this->toast('Link Created', 'success', 'Yey!')];
        if($operation == "edit") {
            $link = Link::findOrFail($request->link_id);
            $toast = ['toastr' => $this->toast('Link Updated', 'success', 'Yey!')];
        }

        $link->user_id = auth()->user()->id;
        $link->name = $request->link_name;
        $link->url = $request->link_url;
        $link->save();

        return redirect()->route('panel.links')->with($toast);
    }

    private function toast($msg, $kind="error", $title="Opps!") {
        return collect([
            "type" => $kind,
            "title" => $title,
            "message" => $msg
        ]);
    }
}

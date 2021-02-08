<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('admin.pages.announcement.index', compact('announcements'));
    }

    public function create()
    {
        return view('admin.pages.announcement.create');
    }

    public function store(Request $request)
    {
        $dataAnnounce = $request->validate([
            'judul_announce' => 'required|min:3|max:3000',
            'image' => 'required|file|image|max:7000',
            'description' => 'required',
            'status' => 'required|in:aktif,non-aktif'
        ]);
        $dataAnnounce['image'] = $request->file('image')->store('assets/admin/announce', 'public');
        $announcement = Announcement::create($dataAnnounce);
        $request->session()->flash('pesan', "Announcement {$dataAnnounce['judul_announce']} Berhasil diSimpan");
        return redirect()->route('announcements.index');
    }

    public function edit(Announcement $announcement)
    {
        return view('admin.pages.announcement.edit', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement)
    {
        $validateId = $announcement->find($announcement->id);
        $dataAnnounce = $request->validate([
            'judul_announce' => 'required|min:3|max:3000,'.$announcement->id,
            'description' => 'required',
            'status' => 'required|in:aktif,non-aktif'
        ]);

        if($request->image){
            Storage::delete('public/'.$validateId->image);
            $dataAnnounce['image'] = $request->file('image')->store('assets/admin/announce', 'public');
        }
        $announcement->update($dataAnnounce);
        return redirect()->route('announcements.index', ['announcement' => $announcement->id])->with('pesan', "Update Announcement {$dataAnnounce['judul_announce']} Berhasil di Ubah");
    }

    public function destroy(Announcement $announcement)
    {
        $validateId = $announcement->find($announcement->id);
        Storage::delete('public/'.$validateId->image);
        $announcement->delete();
        return redirect()->route('announcements.index')->with('hapus', "Announcement $announcement->judul_announce Berhasil di Hapus");
    }
}

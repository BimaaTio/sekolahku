<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('dashboard.page.berita', [
            'kategori' => $kategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kategori = Kategori::all();
        // return view('dashboard.page.create.beritaCreate', [
        //     'kategori' => $kategori
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->slug  = Str::slug($request->judul);
        $berita->excerpt = Str::limit($request->konten, 30);
        $berita->konten = $request->konten;
        $berita->user_id = $request->user_id;
        $berita->kategori_id = $request->kategori;
        $berita->status = 'pending';
        $berita->save();
        return redirect('/dashboard/berita')->with('success', 'Berhasil Membuat Berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Berita::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        Berita::destroy($berita->id);
        return redirect('/dashboard/berita')->with('success', 'Berhasil menghapus berita!');
    }

    public function ajax()
    {
        $data = Berita::orderBy('judul', 'asc')->with(['user', 'kategori']);
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('aksi', function ($data) {
                return view('template.partials.button')->with('data', $data);
            })
            ->editColumn('created_at', function ($request) {
                return $request->created_at->toDayDateTimeString();
            })
            ->editColumn('status', function ($data) {
                return view('template.partials.stat')->with('data', $data);
            })
            ->make(true);
    }
}

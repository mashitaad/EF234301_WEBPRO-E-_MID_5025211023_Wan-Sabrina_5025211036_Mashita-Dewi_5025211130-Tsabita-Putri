<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Packages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="Landing Page";
        $packages=Packages::all();
        //dd($packages)
        return view('backpage.daftarpackage', compact('title', 'packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title="Create Page";
        $communities=Community::all();
        //dd($packages)
        return view('backpage.inputpackage', compact('title', 'communities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $messages = [
        'required'=> 'Kolom :attribute harus lengkap',
        'numeric'=> 'Kolom :attribute harus Angka',
        'file'=> 'Perhatikan format dan ukuran file'
    ];

    $validasi = $request->validate([
        'package_code' => 'required|numeric',
        'package_name' => 'required',
        'package_desc' => 'required',
        'community_id' => 'exists:communities,community_id',
        'feature_img' => 'required|mimes:png,jpg|max:1024',
    ], $messages);

    try {
        $fileName = time() . $request->file('feature_img')->getClientOriginalName();
        $path = $request->file('feature_img')->storeAs('photos', $fileName);
        $validasi['feature_img'] = $path;
        $response = Packages::create($validasi);
        return Redirect::to('package');
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $package=Packages::find($id);
            $package->delete();
            return redirect('package');
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ManagementUser;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Console\Logger\ConsoleLogger;

class ManagementUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Fathor Rahman";
        $pelajaran = ["Algoritma & Pemrograman", "Kelkulus", "Pemrograman Web"];
        return view('home', compact('nama', 'pelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return "Method ini nantinya akan digunakan untuk menambahkan data user pada tabel database";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManagementUser  $managementUser
     * @return \Illuminate\Http\Response
     */
    public function show(ManagementUser $managementUser)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $managementUser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManagementUser  $managementUser
     * @return \Illuminate\Http\Response
     */
    public function edit($managementUser)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $managementUser;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManagementUser  $managementUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManagementUser $managementUser)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $managementUser;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManagementUser  $managementUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManagementUser $managementUser)
    {
        return "Method ini nantinya akan digunakan untuk menghapus data user dengan id=" . $managementUser;
    }
}

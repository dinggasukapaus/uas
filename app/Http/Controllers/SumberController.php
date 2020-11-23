<?php

namespace App\Http\Controllers;



use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SumberController extends Controller
{

    public function index()
    {
        $sumber =  DB::table('tb_pemasukan')->get();


        return view('sumber.sumber_index', compact('sumber'));
    }

    public function add()
    {

        return view('sumber.sumber_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'keterangan' => 'required'
        ]);

        $keterangan = $request->keterangan;
        DB::table('tb_pemasukan')->insert([
            'id' => Uuid::generate(4),
            'keterangan' => $keterangan,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
        Alert::success('selamat', $keterangan . ' telat ditambah');


        return redirect('sumber-pemasukan');
    }

    public function edit($id)
    {
        $data = DB::table('tb_pemasukan')->where('id', $id)->first();

        return view('sumber.sumber_edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'keterangan' => 'required'
        ]);

        //proses update
        DB::table('tb_pemasukan')->where('id', $id)->update([
            'keterangan' => $request->keterangan,
            'updated_at' => date('Y-m-d  H:i;s'),
        ]);

        // Alert::success('selamat', $request->keterangan . ' di update');
        toast('data anda berhasil di update !', 'success');
        // return redirect('sumber-pemasukan')->withToastSuccess($request->keterangan, 'berhasil di update');


        return redirect('sumber-pemasukan');
    }

    public function delete($id)
    {
        DB::table('tb_pemasukan')->where('id', $id)->delete();
        Alert::info('data', ' telat hapus');
        return redirect('sumber-pemasukan');
    }
}

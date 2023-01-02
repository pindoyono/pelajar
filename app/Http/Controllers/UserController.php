<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;


class UserController extends Controller
{
    //
    public function getAllUserServerSide()
    {
        $data = User::latest()->orderBy('created_at')->get();
        return Datatables::of($data)
            ->editColumn("created_at", function ($data) {
                return date("m/d/Y", strtotime($data->created_at));
            })
            ->addColumn('ID', function ($data) {
                // $update = '<a href=/edit/'.$data->id .' class="btn btn-primary">Edit</a>   <a href='.$data->id .' class="btn btn-danger">Hapus</a> <a href='.$data->id .' class="btn btn-info">Foto Profil</a>';
                // return $update;
                return $data->id;
            })
            ->addColumn("AVATAR", function ($data) {
                if(file_exists(public_path('patan/').$data->nisn.'.png')){
                    $url = asset('patan/'.$data->nisn.'.png');
                    return '<img width="100" src="'. $url .'" />';
                }else{
                    $url = asset('patan/'.$data->nisn.'.jpg');
                    return '<img width="100" src="'. $url .'" />';
                }

            })
            ->rawColumns(['AVATAR','ID'])
            // ->rawColumns(['ID'])
            ->make(true);
    }


    public function indexGetUser()
    {
        return view("user_server_side");
    }

    public function import1(Request $request)
    {

    }

    public function import(Request $request)
    {
        Excel::import(new SiswaImport,request()->file('file'));
        return back();
    }

    public function edit($id)
    {
        $user = \App\User::findOrFail($id);
        return view('edit',   ['user' => $user
                                    ]
                                );
    }

    public function print(Request $jurusan)
    {
        $data = User::orderBy('id','asc')->get();
        // $data = User::orderBy('id','asc')->whereBetween('id' , array( 797, 820))->get();


        // dd($data);
        $no = 0;
        $pdf = PDF::loadview('print', ['data' => $data,'no' => $no, ])->setPaper('A4','potrait');
        return $pdf->stream();

        return view('print', ['data' => $data,'no' => $no, ]);

    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Clinic;
use App\Models\gejala;
use App\Models\Admin;
use App\Models\Rule;
use App\Models\JenisKulit;
use App\Models\User;
use App\Models\Perawatan;
use App\Models\Pasient;
use App\Models\Sesi;
use App\Models\Transaction;
use App\Models\HasilDiagnosa;
use App\Models\gejala_jenis_kulit;
use Carbon\Carbon;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminAdddataController extends Controller
{
    /////////////////////////////////Doctor Method All/////////////////////////////////////////////////
    public function  AdminDoctorData()
    {
        $doctor = Doctor::latest()->get();
        return view('admin.admin_doctor_data', compact('doctor'));
    }

    public function AddDoctorData()
    {
        return view('admin.add_doctordata');
    }

    public function DoctorDataStore(Request $request)
    {

        //validation
        $request->validate([
            'no_str' => 'required|unique:doctors|max:50',
            'nama' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'tempat_praktik' => 'required',
            'Alamat' => 'required'
        ]);
        Doctor::insert([
            'no_str' => $request->no_str,
            'nama' => $request->nama,
            'phone' => $request->phone,
            'email' => $request->email,
            'tempat_praktik' => $request->tempat_praktik,
            'Alamat' => $request->Alamat,
        ]);

        $notification = array(
            'message' => ' Add Data Doctor Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.doctordata')->with($notification);
    }

    public function EditDoctorData($no_str)
    {

        $doctor = Doctor::findOrFail($no_str);
        return view('admin.edit_doctor_data', compact('doctor'));
    }

    public function UpdateDoctorData(Request $request)
    {

        $id = $request->no_str;
        Doctor::findOrfail($id)->update([
            'no_str' => $request->no_str,
            'nama' => $request->nama,
            'phone' => $request->phone,
            'email' => $request->email,
            'tempat_praktik' => $request->tempat_praktik,
            'alamat' => $request->Alamat
        ]);

        $notification = array(
            'message' => ' Data Doctor Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.doctordata')->with($notification);
    }

    public function DeleteDoctorData($id)
    {
        Doctor::findOrfail($id)->delete();

        $notification = array(
            'message' => ' Data Doctor Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    //end Method


    //////////////////////////////////////Clinic All Method/////////////////////////////////////////////
    public function  AdminClinic()
    {
        $clinic = Clinic::latest()->get();
        return view('clinic.admin_clinic', compact('clinic'));
    }
    public function AddClinicData()
    {
        $clinic = Clinic::all();
        $doctor = Doctor::all();
        return view('clinic.add_clinic', compact('clinic', 'doctor'));
    }

    public function ClinicDataStore(Request $request)
    {

        //validation
        $request->validate([
            'id_klinik' => 'required|unique:clinics|max:50',
            'tempat_praktik' => 'required|unique:clinics|max:50',
            'no_str' => 'required|unique:clinics',
            'Alamat' => 'required',
        ]);
        Clinic::insert([
            'id_klinik' => $request->id_klinik,
            'tempat_praktik' => $request->tempat_praktik,
            'no_str' => $request->no_str,
            'Alamat' => $request->Alamat,
        ]);

        $notification = array(
            'message' => ' Add Data Clinic Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.clinic')->with($notification);
    }

    public function EditClinicData($id_klinik)
    {
        $doctor = Doctor::get();
        $clinic = Clinic::findOrFail($id_klinik);
        return view('clinic.edit_clinic', compact('clinic', 'doctor'));
    }

    public function UpdateClinicData(Request $request)
    {

        $id = $request->id_klinik;
        Clinic::findOrfail($id)->update([
            'id_klinik' => $request->id_klinik,
            'tempat_praktik' => $request->tempat_praktik,
            'no_str' => $request->no_str,
            'Alamat' => $request->Alamat
        ]);

        $notification = array(
            'message' => ' Data Clinic Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.clinic')->with($notification);
    }

    public function DeleteClinicData($id)
    {
        Clinic::findOrfail($id)->delete();

        $notification = array(
            'message' => ' Data Clinic Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function exportClinic()
    {
        $clinic = Clinic::all();
        $PDF = PDF::loadView('clinic.report', array('clinic' => $clinic))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-clinic.pdf');
    }

    //end method



    /////////////Jenis Kulit Method All/////////////////
    public function  AdminSkinType()
    {
        $skintype = JenisKulit::latest()->get();
        return view('skintype.admin_skin_type', compact('skintype'));
    }

    public function AddSkinType()
    {
        return view('skintype.add_skintype');
    }

    public function SkintypeDataStore(Request $request)
    {

        //validation
        $request->validate([
            'id_JK' => 'required|unique:jenis_kulits|max:50',
            'jenis_kulit' => 'required',
            'penyebab' => 'required',
            'solusi' => 'required',
        ]);
        JenisKulit::insert([
            'id_JK' => $request->id_JK,
            'jenis_kulit' => $request->jenis_kulit,
            'penyebab' => $request->penyebab,
            'solusi' => $request->solusi,
        ]);

        $notification = array(
            'message' => ' Add Data Jenis Kulit Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.skintype')->with($notification);
    }

    public function EditSkintypeData($id_JK)
    {

        $skintype = JenisKulit::findOrFail($id_JK);
        return view('skintype.edit_skintype', compact('skintype'));
    }

    public function UpdateSkintypeData(Request $request)
    {

        $id = $request->id_JK;
        JenisKulit::findOrfail($id)->update([
            'id_JK' => $request->id_JK,
            'jenis_kulit' => $request->jenis_kulit,
            'penyebab' => $request->penyebab,
            'solusi' => $request->solusi
        ]);

        $notification = array(
            'message' => ' Data Jenis Kulit Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.skintype')->with($notification);
    }

    public function DeleteSkintypeData($id_JK)
    {
        JenisKulit::findOrfail($id_JK)->delete();

        $notification = array(
            'message' => ' Data Jenis Kulit Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function exportSkintypeData()
    {
        $skintype = JenisKulit::all();
        $PDF = PDF::loadView('skintype.report_jenis_kulit', array('skintype' => $skintype));
        return $PDF->stream('data-Jenis Kulit.pdf');
    }
    //end method




    //////////////////////////////////////Gejala All Method ////////////////////////////////////
    public function  AdminSymptoms()
    {
        $gejala = gejala::latest()->get();
        return view('gejala.admin_symptoms', compact('gejala'));
    }

    public function AddGejala()
    {
        return view('gejala.add_gejala');
    }

    public function GejalaDataStore(Request $request)
    {
        //validation
        $request->validate([
            'kd_gejala' => 'required|unique:gejalas|max:50',
            'nama_gejala' => 'required',

        ]);
        gejala::insert([
            'kd_gejala' => $request->kd_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);

        $notification = array(
            'message' => ' Add Data Gejala Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.symptoms')->with($notification);
    }

    public function EditGejalaData($kd_gejala)
    {

        $gejala = gejala::findOrFail($kd_gejala);
        return view('gejala.edit_gejala', compact('gejala'));
    } //end method

    public function UpdateGejalaData(Request $request)
    {

        $id = $request->kd_gejala;
        gejala::findOrfail($id)->update([
            'kd_gejala' => $request->kd_gejala,
            'nama_gejala' => $request->nama_gejala,
            'pertanyaan' => $request->pertanyaan,
        ]);

        $notification = array(
            'message' => ' Data Gejala Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.symptoms')->with($notification);
    }

    public function DeleteGejalaData($kd_gejala)
    {
        gejala::findOrfail($kd_gejala)->delete();

        $notification = array(
            'message' => ' Data Gejala Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }



    //////////////////////////////Rule All Method ///////////////////////////////////
    public function  AdminRules()
    {
        $rule = JenisKulit::get();
        return view('aturan.admin_rules', compact('rule'));
    }

    public function AddRules()
    {
        $rule = Rule::all();
        $gejala = gejala::all();
        $skintype = JenisKulit::all();
        return view('aturan.add_rule', compact('rule', 'skintype', 'gejala'));
    }

    public function RulesDataStore(Request $request)
    {
        Rule::create([
            'kd_aturan' => $request->kd_aturan,
            'kd_JK' => $request->kd_JK,
            'kd_gjl' => $request->kd_gjl,

        ]);
        $notification = array(
            'message' => ' Add Data Gejala Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.rules')->with($notification);
    }

    public function EditAturan($id_JK)
    {
        $skintype = JenisKulit::find($id_JK);
        $gejala = gejala::all();
        return view('aturan.edit_rule', compact('gejala', 'skintype'));
    }
    public function UpdateRulesData(Request $request)
    {
        $id_JK = $request->id_JK;
        JenisKulit::where('id_JK', $id_JK)->update([
            'jenis_kulit' => $request->kd_JK,
        ]);
        $jeniskulit = JenisKulit::find($id_JK);
        $jeniskulit->gejala()->sync($request->gejala);
        $notification = array(
            'message' => ' Data Aturan Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.clinic')->with($notification);
    }


    public function DeleteRulesData($kd_aturan)
    {
        Rule::findOrfail($kd_aturan)->delete();

        $notification = array(
            'message' => ' Data Gejala Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }



    //////////////////////////////////////Admin Method All////////////////////////////////////
    public function AdminData()
    {
        $admin = User::where('role', 'admin')->get();
        return view('dataAdmin.admin_data', compact('admin'));
    }
    public function AddAdmin()
    {
        return view('dataAdmin.add_admin');
    }

    public function AdminDataStore(Request $request)
    {

        $admin = User::create($request->all());
        return redirect()->route('admin.data');
    }

    ////////////////////////////////////Pasient All Method//////////////////////////////////
    public function AdminPasientData()
    {
        $pasient = User::where('role', 'pasient')->get();
        return view('pasient.admin_pasient_data', compact('pasient'));
    }




    /////////////Perawatan All Method/////////////////
    public function  PerawatanData()
    {
        $perawatan = Perawatan::latest()->get();
        return view('perawatan.perawatan_data', compact('perawatan'));
    }

    public function AddPerawatan()
    {
        return view('perawatan.add_perawatan');
    }

    public function PerawatanDataStore(Request $request)
    {

        //validation
        $request->validate([
            'jenis_perawatan' => 'required',
            'Biaya' => 'required',

        ]);
        Perawatan::insert([
            'jenis_perawatan' => $request->jenis_perawatan,
            'Biaya' => $request->Biaya,

        ]);

        $notification = array(
            'message' => ' Add Data Gejala Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.perawatan')->with($notification);
    }

    public function EditPerawatanData($id_perwatan)
    {

        $perawatan = Perawatan::findOrFail($id_perwatan);
        return view('perawatan.edit_perawatan', compact('perawatan'));
    } //end method

    public function UpdatePerawatanData(Request $request)
    {

        $id = $request->id_perwatan;
        Perawatan::findOrfail($id)->update([
            'id_perwatan' => $request->id_perwatan,
            'jenis_perawatan' => $request->jenis_perawatan,
            'Biaya' => $request->Biaya,

        ]);

        $notification = array(
            'message' => ' Data Perawatan Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.perawatan')->with($notification);
    }

    public function DeletePerawatanData($id_perwatan)
    {
        Perawatan::findOrfail($id_perwatan)->delete();

        $notification = array(
            'message' => ' Data Perawatan Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function PerawatanExport()
    {
        $perawatan = Perawatan::all();
        $PDF = PDF::loadView('perawatan.report_perawatan', array('perawatan' => $perawatan));
        return $PDF->stream('data-perawatan.pdf');
    }
    //end Method


    ///////////////////////Temu Dokter All Method //////////////////////////////////
    public function TemuDokter()
    {
        $temu = Pasient::get();
        return view('temudokter.temu_dokter', compact('temu'));
    }

    public function AddTemu()
    {
        $temu = Pasient::all();
        $doctor = Doctor::all();
        $clinic = Clinic::all();
        $p = Sesi::all();
        return view('temudokter.add_temu', compact('temu', 'doctor', 'clinic', 'p'));
    }

    public function TemuDataStore(Request $request)
    {
        Pasient::create([
            'nama_pasient' => $request->nama_pasient,
            'no_str' => $request->no_str,
            'id_klinik' => $request->id_klinik,
            'id_sesi' => $request->id_sesi,

        ]);
        $notification = array(
            'message' => ' Add Data Temu Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.temu')->with($notification);
    }

    public function EditTemuData($id_pasient)
    {
        $temu = Pasient::findOrFail($id_pasient);
        $doctor = Doctor::get();
        $clinic = Clinic::get();
        $p = Sesi::get();
        return view('temudokter.edit_temu', compact('temu', 'doctor', 'clinic', 'p'));
    }

    public function exportJadwalDokter()
    {
        $temu = Pasient::all();
        $PDF = PDF::loadView('temudokter.jadwal_dokter_report', array('temu' => $temu));
        return $PDF->stream('data-jadwalDokter.pdf');
    }
    //end method


    ////////////////////////////////////////Sesi All Method ///////////////////////////////////
    public function  SesiDokter()
    {
        $p = Sesi::latest()->get();
        return view('sesi.sesi_doctor', compact('p'));
    }

    public function AddSesi()
    {
        return view('sesi.add_sesi');
    }

    public function SesiDataStore(Request $request)
    {
        //validation
        $request->validate([
            'sesi' => 'required',
            'tanggal' => 'required',

        ]);
        Sesi::insert([
            'sesi' => $request->sesi,
            'tanggal' => $request->tanggal,

        ]);

        $notification = array(
            'message' => ' Add Data Sesi Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.sesi')->with($notification);
    }

    public function EditSesiData($id_sesi)
    {

        $p = Sesi::findOrFail($id_sesi);
        return view('sesi.edit_sesi', compact('p'));
    } //end method

    public function UpdateSesiData(Request $request)
    {

        $id = $request->id_sesi;
        Sesi::findOrfail($id)->update([
            'sesi' => $request->sesi,
            'tanggal' => $request->tanggal,


        ]);

        $notification = array(
            'message' => ' Data Sesi Updated Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.sesi')->with($notification);
    }

    public function DeleteSesiData($id_sesi)
    {
        Sesi::findOrfail($id_sesi)->delete();

        $notification = array(
            'message' => ' Data Sesi Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function exportSesi()
    {
        $p = Sesi::all();
        $PDF = PDF::loadView('sesi.report_sesi', array('p' => $p));
        return $PDF->stream('data-sesi.pdf');
    }
    //end Method


    /////////////////////////////////////////////Surat All Method /////////////////////////////////////
    public function  SuratJanji()
    {
        $temu = Pasient::latest()->get();
        return view('surat.surat', compact('temu'));
    }
    public function exportSurat()
    {
        $temu = Pasient::all();

        $clinic = Clinic::all();
        $PDF = PDF::loadView('surat.report_surat', array('temu' => $temu))->setOptions(['defaultFont' => 'sans-serif']);
        return $PDF->stream('data-janji.pdf');
    }
    //end Method

    /////////////Transaksi All Method /////////////////
    public function  TransaksiPasient()
    {
        $transaksi = Transaction::latest()->get();
        return view('transaksi.transaksi_pasient', compact('transaksi'));
    }

    public function AddTransaksi()
    {
        $temu = Pasient::all();
        // $doctor = Doctor::all();
        $clinic = Clinic::all();
        $perawatan = Perawatan::all();
        return view('transaksi.add_transaksi', compact('temu', 'perawatan', 'clinic'));
    }
    public function TransaksiStore(Request $request)
    {

        Transaction::create([
            'id_pasient' => $request->id_pasient,
            'id_klinik' => $request->id_klinik,
            'id_perwatan' => $request->id_perawatan

        ]);
        $notification = array(
            'message' => ' Add Data Transaksi Successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('admin.pasient')->with($notification);
    }
    //end Method

    //////////////////////////////////////Diagnosa All Method //////////////////////////////////
    public function  Diagnosa()
    {
        $diagnosa = gejala::all();
        return view('diagnosa.diagnosa', compact('diagnosa'));
    }

    public function  CekDiagnosa(Request $request)
    {
        // dd($request->all());
        $results = new HasilDiagnosa();
        $DataRegulation = gejala_jenis_kulit::all();
        $selectedIndication = $request->nama_gejala;
        // dd($DataRegulation);
        $regulation = [];
        foreach ($DataRegulation as $item) {
            if (!isset($regulation[$item->jenis_kulit_id_JK])) {
                $regulation[$item->jenis_kulit_id_JK] = [];
            }
            array_push($regulation[$item->jenis_kulit_id_JK], $item->gejala_kd_gejala);
        }
        // dd($regulation);
        $result = [];
        foreach ($regulation as $key => $rules) {
            foreach ($selectedIndication as $select) {
                if (in_array($select, $rules)) {
                    if (!isset($result[$key])) {
                        $result[$key] = 1;
                    } else {
                        $result[$key] = $result[$key] + 1;
                    }
                }
            }
        }
        // dd($result);
        if (count($result) > 0) {
            $max_keys = array_keys($result, max($result));
            // dd($max_keys[0]);
            $myTime = Carbon::now();
            $results = HasilDiagnosa::Create([
                'datetime' => $myTime->toDateTimeString(),
                'id_kulit' =>  $max_keys[0],
                'id_user' => auth()->user()->id,
            ]);
            $results->gejala()->attach($request->nama_gejala);
            $results->save();
            return redirect()->route('diagnosa.hasil');
        } else {
            return redirect()->back();
        }
    }

    ///////////////////////////////Hasil Diagnosa All Method ////////////////////////////
    public function  HasilDiagnosa()
    {
        $hasil = HasilDiagnosa::all();
        return view('diagnosa.hasil_diagnosa', compact('hasil'));
    }
    //end Method
}

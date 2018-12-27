<?php

namespace App\Http\Controllers;
use App\ProductsPhoto;


class ajaxcontroller extends Controller
{
    
    /**
     * @var Application
     */  
    
    public function delete_img($id)
    {        
        ProductsPhoto::destroy($id);

//        return 'xxx';
//        $info_licenses = DB::table('license_status')->orderBy('created_time')
//                ->select('lesen.nama AS Inama', 'lesen.aktiviti_lesen AS Iaktiviti' , 'lesen.aktadanperaturan AS Lakta', 'lesen.keterangan AS Iketerangan','lesen.lokasi_permohonan AS Ilokasi', 'lesen.syarat AS Isyarat', 'lesen.fi AS Ifi',
//                        'agensi.nama_paparan AS Anamapaparan','agensi.nama AS Anama','agensi.alamatagensi1 AS Aalamat1','agensi.alamatagensi2 AS Aalamat2','agensi.alamatagensi3 AS Aalamat3','agensi.poskod AS Aposkod','agensi.no_tel AS Anotel','lesen.aktadanperaturan as aktadanperaturan','lesen.perkhidmatanonline as perkhidmatanonline',
//                        'lesen.perniagaanlayak as perniagaanlayak','agensi.no_faks AS Anofaks','agensi.url AS Aurl','negeri.nama AS Nnegeri','lesen.lokasi_permohonan AS Lokasi')
//                ->leftJoin('lesen', 'license_status.license_map', '=', 'lesen.agensi_map')
//                       ->leftJoin('agensi', 'lesen.agensi_id', '=', 'agensi.id')
//                ->leftJoin('negeri', 'agensi.negeri_id', '=', 'negeri.id')
//                ->where('license_request_id',$id)->get();
//        
//        return $info_licenses;
    }
    
    public function ajax1()
    {        
        return 'dddddddddddddd';
//        $info_licenses = DB::table('license_status')->orderBy('created_time')
//                ->select('lesen.nama AS Inama', 'lesen.aktiviti_lesen AS Iaktiviti' , 'lesen.aktadanperaturan AS Lakta', 'lesen.keterangan AS Iketerangan','lesen.lokasi_permohonan AS Ilokasi', 'lesen.syarat AS Isyarat', 'lesen.fi AS Ifi',
//                        'agensi.nama_paparan AS Anamapaparan','agensi.nama AS Anama','agensi.alamatagensi1 AS Aalamat1','agensi.alamatagensi2 AS Aalamat2','agensi.alamatagensi3 AS Aalamat3','agensi.poskod AS Aposkod','agensi.no_tel AS Anotel','lesen.aktadanperaturan as aktadanperaturan','lesen.perkhidmatanonline as perkhidmatanonline',
//                        'lesen.perniagaanlayak as perniagaanlayak','agensi.no_faks AS Anofaks','agensi.url AS Aurl','negeri.nama AS Nnegeri','lesen.lokasi_permohonan AS Lokasi')
//                ->leftJoin('lesen', 'license_status.license_map', '=', 'lesen.agensi_map')
//                       ->leftJoin('agensi', 'lesen.agensi_id', '=', 'agensi.id')
//                ->leftJoin('negeri', 'agensi.negeri_id', '=', 'negeri.id')
//                ->where('license_request_id',$id)->get();
//        
//        return $info_licenses;
    }
       
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeopageController extends Controller
{
    //
    public function requickSeopage(){
        $com = (isset($_REQUEST['com'])) ? htmlspecialchars($_REQUEST['com']) : '';
        $act = (isset($_REQUEST['act'])) ? htmlspecialchars($_REQUEST['act']) : '';
        $type = (isset($_REQUEST['type'])) ? htmlspecialchars($_REQUEST['type']) : '';
        $kind = (isset($_REQUEST['kind'])) ? htmlspecialchars($_REQUEST['kind']) : '';
        $val = (isset($_REQUEST['val'])) ? htmlspecialchars($_REQUEST['val']) : '';
        $idc = (isset($_REQUEST['idc'])) ? htmlspecialchars($_REQUEST['idc']) : '';
        $id = (isset($_REQUEST['id'])) ? htmlspecialchars($_REQUEST['id']) : '';
        $curPage = (isset($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
        if(isset($kind)) $dfgallery = ($kind == 'man_list') ? 'gallery_list' : 'gallery';
        else $dfgallery = '';
        switch($act)
	{
		case "capnhat":
			//get_seopage();
            return view('admin.templates.seopage.man.itemadd');
		case "save":
			//save_seopage();
			break;

		default:
			$template = "404";
	}
    }
}

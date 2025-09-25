<?php

namespace App\Http\Controllers;

use App\Models\Floor;
use App\Models\Room;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    public function detail($param='1'){
        $lantai = Floor::findOrFail($param);
        $ruang = Room::where('id_floor', $param)->get()->all();
        $list = Floor::all();
        return view('svg.ground', compact('lantai', 'ruang','list'));
    }
    public function basement(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        $available = Room::where('availability', 'available');
        return view('svg.basement', compact('lantai', 'ruang', 'list', 'available'));
    }
    public function semibasement(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        $available = Room::where('availability', 'available');
        return view('svg.semibasement', compact('lantai', 'ruang', 'list', 'available'));
    }
    public function ground(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        $available = Room::where('availability', 'available');
        return view('svg.ground', compact('lantai', 'ruang', 'list', 'available'));
    }
    public function second(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai2', compact('lantai', 'ruang', 'list'));
    }

    public function third(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai3', compact('lantai', 'ruang', 'list'));
    }

    public function fourth(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai4', compact('lantai', 'ruang', 'list'));
    }

    public function fifth(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai5', compact('lantai', 'ruang', 'list'));
    }
    public function sixth(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai6', compact('lantai', 'ruang', 'list'));
    }
    public function seventh(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai7', compact('lantai', 'ruang', 'list'));
    }
    public function eighth(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai8', compact('lantai', 'ruang', 'list'));
    }
    public function ninth(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai9', compact('lantai', 'ruang', 'list'));
    }
    public function tenth(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai10', compact('lantai', 'ruang', 'list'));
    }
    public function eleventh(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai11', compact('lantai', 'ruang', 'list'));
    }
     public function twelfth(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai12', compact('lantai', 'ruang', 'list'));
    }
     public function thritiet(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai12a', compact('lantai', 'ruang', 'list'));
    }
     public function fourtieth(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantai14', compact('lantai', 'ruang', 'list'));
    }
     public function sb(){
        $lantai = Floor::all();
        $ruang = Room::all();
        $list = Floor::all();
        return view('svg.lantaisb', compact('lantai', 'ruang', 'list'));
    }
}

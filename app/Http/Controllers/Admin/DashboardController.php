<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BloodGroupData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.layouts.template');
    }

    public function BloodGroup(){
        $bloods = BloodGroupData::latest()->get();

        return view('admin.bloodgroup', compact('bloods'));
    }

    public function Editblood($id){
            $bloods_info = BloodGroupData::findOrFail($id);

            return view('admin.editblood', compact('bloods_info'));
        }

        public function Updateblood(Request $request){
            $id = $request->id;

            $request->validate([
                'group' => 'required|unique:blood_group_data'
            ]);

            BloodGroupData::findOrFail($id)->update([
                'group' => $request->group,
            ]);

            return redirect()->route('bloodgroup')->with('message', 'Blood Updated Successfully!');
        }

        public function DeleteBlood($id){
            BloodGroupData::findOrFail($id)->delete();

            return redirect()->route('bloodgroup')->with('message', 'Blood Deleted Successfully!');
        }

        public function Doonerlist(){
            return view('admin.doonerlist');
        }

}

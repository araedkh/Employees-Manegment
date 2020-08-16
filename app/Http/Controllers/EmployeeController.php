<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\File;
use App\Courses;
use App\Experience;
use App\Qualif;
use App\FamilyInfo;

class EmployeeController extends Controller
{

	// Basic Information Controller
    public function index(){

    	$employees = Employee::all();

    	return view('/information',compact('employees'));
    }

    public function save(Request $request){
    	$emp = new Employee;
    	$emp->documentType = $request->input('documentType');
    	$emp->documentNumber = $request->input('documentNumber');
    	$emp->fullName = $request->input('fullName');
    	$emp->name = $request->input('name');
    	$emp->dataOfBirth = $request->input('dataOfBirth');
    	$emp->socialState = $request->input('socialState');
    	$emp->gender = $request->input('gender');
    	$emp->phoneNumber = $request->input('phoneNumber');
    	$emp->wataniaMobile = $request->input('wataniaMobile');
    	$emp->Tel = $request->input('Tel');
    	$emp->country = $request->input('country');
    	$emp->city = $request->input('city');
    	$emp->address = $request->input('address');
    	$emp->jobNumber = $request->input('jobNumber');
    	$emp->startDate = $request->input('startDate');

  		$emp->save();

  		$employees = Employee::all();
        
        return view('/information',compact('employees'));
 
  	}

  	// Personal Image Controller

  	public function createForm(){
    return view('image-upload');
  }

  public function fileUpload(Request $req){
       $req->validate([
        'file' => 'required|mimes:png,jpg,csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $fileModel = new File;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }

   // Courses Controller

   
   

    public function store_course(Request $request){
       $courses = Courses::all();

   	   return view('/employee-courses',compact('courses'));
    	
    	$course = new Courses;
    	$course->course_name = $request->input('course_name');
    	$course->place = $request->input('place');
    	$course->StartDate = $request->input('StartDate');
    	$course->FinishDate = $request->input('FinishDate');
    	$course->detailes = $request->input('detailes');
    	

  		$course->save();
  		$courses = Courses::all();
  		return view('/employee-courses');

  		


}

// Experience Controller



    public function store_Exper(Request $request) {

    	return view('employee-experiences');

    	$this->validate($request, [
            'workPlace' => 'required',
            'jobTitle' => 'required',
            'StartDate' => 'required',
            'FinishDate'=>'required',
            'salary' => 'required',
            'currency'=>'required'
         ]);

    	Experience::create($request->all());

    	return back()->with('success', 'Added successfully.');

    }

    // Qualification Controller

         public function store_quali(Request $rqst){
    	
        return view('/employee-qualif');

    	$qual = new Quali;
    	$qual->qualification = $rqst->input('qualification');
    	$qual->university = $rqst->input('university');
    	$qual->major = $rqst->input('major');
    	$qual->majorHistory = $rqst->input('majorHistory');
    	$qual->detailes = $rqst->input('detailes');
    	

  		$qual->save();

  		$quals = Quali::all();
        
        return view('/employee-qualif',compact('quals'));


}

// Family Information 

public function store_family_info(Request $rst){
    	
        return view('/family-info');

    	$fam_info = new FamilyInfo;
    	$fam_info->fullname = $rst->input('fullname');
    	$fam_info->idNumber = $rst->input('idNumber');
    	$fam_info->relation = $rst->input('relation');
    	$fam_info->DateOfBirth = $rst->input('DateOfBirth');
    	$fam_info->socialstatus = $rst->input('socialstatus');
    	$fam_info->doesHeStudy = $rst->input('does he study ?');
    	$fam_info->doesHeWork  = $rst->input('does he work ?');
    	$fam_info->IDImage = $rst->input('IDImage');
    	

  		$fam_info->save();

  		$info = FamilyInfo::all();
        
        return view('/family-info',compact('info'));


}




}

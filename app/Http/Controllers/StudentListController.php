<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Argument;
use App\Test;
use Carbon\Carbon;

class StudentListController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {



    $this->validate($request, [
      'question' => 'required'
    ]);
    //dd($request->input('question'));
    $question = $request->input('question');
    $dataQuestion = array();
    foreach ($question as $questionKey => $questionValue) {
      array_push($dataQuestion, $questionValue);
    }
    for ($i=0; $i < count($dataQuestion); $i++) {
      $questions = new Test([
        'topic_id' => $request->input('topicID'),
        'questions' => $dataQuestion[$i]

        ]);

        $id = $request->input('topicID');
      $questions->save();
    }


    return view('studentsList', compact('id'));
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {

  }

  function getAllMonths(){
		$month_array = array();
		$posts_dates = Argument::all();
    // dd($posts_dates);
		$posts_dates = json_decode( $posts_dates );

  if (! empty($posts_dates)) {
    foreach ($posts_dates as $topicTime) {
      $month_name = Carbon::parse($topicTime->created_at)->format('M');
      // $month_no = Carbon::parse($topicTime->created_at)->format('m');

        // foreach ($posts_dates as $unformatted_date) {
          // $date = new \DateTime( $unformatted_date->created_at );
          // $date = $unformatted_date->created_at;
          //$month_array[ $month_no ] = $month_name;
          array_push($month_array, $month_name);
          // array_push($month_array, $month_no);
          // $month_no = $date->format('m');
          // $month_name = $date->format('M');
          // $month_array[ $date ] = $date;
        // }
      }
      return $month_array;
    }

	}
	function getMonthlyPostCount( $month ) {
		$monthly_post_count = Argument::whereMonth( 'created_at', $month )->get()->count();
		return $monthly_post_count;
	}

	// function getMonthlyPostData() {
	// 	$monthly_post_count_array = array();
	// 	$month_array = $this->getAllMonths();
	// 	$month_name_array = array();
	// 	if ( ! empty( $month_array ) ) {
	// 		foreach ( $month_array as $month_no => $month_name ){
	// 			$monthly_post_count = $this->getMonthlyPostCount( $month_no );
	// 			array_push( $monthly_post_count_array, $monthly_post_count );
	// 			array_push( $month_name_array, $month_name );
	// 		}
	// 	}
	// 	$max_no = max( $monthly_post_count_array );
	// 	$max = round(( $max_no + 10/2 ) / 10 ) * 10;
	// 	$monthly_post_data_array = array(
	// 		'months' => $month_name_array,
	// 		'post_count_data' => $monthly_post_count_array,
	// 		'max' => $max,
	// 	);
  //   //dd($monthly_post_data_array);
	// 	//return response()->json($monthly_post_data_array);
  //   }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $classroom = \App\ClassModel::find($id);

    $students = \App\Student::where('class_id', $classroom->id)->get();
    return view('studentsList', compact('students', 'id'));
  }

  public function editCustom($id, $sub_id)
  {
    $classroom = \App\ClassModel::find($id);
    $students = \App\Student::where('class_id', $classroom->id)->get();

    // $monthly_post_count_array = array();
		$month_array = $this->getAllMonths();
		$month_name_array = array();
		if ( ! empty( $month_array ) ) {
			foreach ( $month_array as $month_no => $month_name ){
				// $monthly_post_count = $this->getMonthlyPostCount( $month_no );
				// array_push( $monthly_post_count_array, $monthly_post_count );
				array_push( $month_name_array, $month_name );
			}
      // dd($month_name_array);
      // $pizza = explode(" ", $month_name_array);
      // dd($piza);
		}
		// $max_no = max( $monthly_post_count_array );
		// $max = round(( $max_no + 10/2 ) / 10 ) * 10;
		$monthly_post_data_array = array(
			'months' => $month_name_array,
			// 'post_count_data' => $monthly_post_count_array,
			// 'max' => $max,
		);

    $pizza = implode(",", $month_name_array);

    return view('studentsList', compact('students', 'id', 'sub_id', 'pizza'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {

    $values = $request->input('students');
    $valuesSub = $request->input('subjects');
    $subSelect = \App\Subject::where('id', (int)$valuesSub)->first();
    $dataStudent = array();
    foreach ($values as $studKey => $studValue) {
      array_push($dataStudent, (int)$studValue);

    }
    $currentSubject = DB::table('students_subjects')->where('sub_id', (int)$valuesSub)->exists();
    for ($i=0; $i<count($dataStudent); $i++) {
      $currentStudent = DB::table('students_subjects')->where('stud_id', $dataStudent[$i])->exists();
      if ($currentStudent == false) {
        DB::table('students_subjects')
        ->where('id', '[0-9]+')
        ->updateOrInsert([
          'stud_id' => $dataStudent[$i],
          'sub_id' => (int)$valuesSub,
          'absence_hours' => 300/$subSelect->totHours,
          'date' => Carbon::now()->format('Y-m-d')
        ]);
      }
      elseif ($currentStudent == true && $currentSubject == false) {
        DB::table('students_subjects')
        ->where('id', '[0-9]+')
        ->updateOrInsert([
          'stud_id' => $dataStudent[$i],
          'sub_id' => (int)$valuesSub,
          'absence_hours' => 300/$subSelect->totHours,
          'date' => Carbon::now()->format('Y-m-d')
        ]);
      }
      elseif ($currentStudent == true && $currentSubject == true) {
        DB::table('students_subjects')
        ->where('stud_id', $dataStudent[$i])
        ->where('sub_id', (int)$valuesSub)
        ->increment('absence_hours', 200/(float)$subSelect->totHours);
      }
    }
    //media classe
    // DB::table('students_subjects')
    // ->where('id', '[0-9]+')
    // ->updateOrInsert([
    //   'sub_id' => (int)$valuesSub,
    //   'avereage' => (int)$request->input('class_avereage')
    // ]);
    //controllo assenze

    $absPerc = $subSelect->totHours * (20/100);
    $subStudent = DB::table('students_subjects')
    ->where('sub_id', (int)$valuesSub)->get();
    $studAbs = array();
    foreach ($subStudent as $student) {
      if ((float)$student->absence_hours > 20.0) {
        //dd("entratoooo");
        $studName = \App\Student::where('id', $student->stud_id)->first();
        array_push($studAbs, $studName->name);
      }
    }
    $this->validate($request, [
      'dayArgument' => 'required|max:100'
    ]);

    $arguments = new Argument([
      'topic' => $request->get('dayArgument'),
      'sub_id' => $request->get('subjects')
    ]);
    $arguments->save();

    // $argumentData = Argument::where('sub_id', $request->get('subjects'))->get();
    return redirect('/home');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}

<?php

namespace App\Http\Controllers;
use App\Models\Timer;
use App\Models\Seats;
use App\Models\Courses;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


class MainController extends Controller
{
  public function home(){
    $timers =DB::table('timer')
            ->select('id', 'seat_name', 'course_name', 'start','limit_time')
            ->orderBy('created_at','desc')
            ->get();
    $seats =DB::table('seats')
            ->select('id', 'seat_name')
            ->orderBy('created_at','desc')
            ->get();
    $courses =DB::table('courses')
            ->select('id', 'course_name')
            ->orderBy('created_at','desc')
            ->get();
            return view('index', [
              'timers' => $timers,
              'seats' => $seats,
              'courses' => $courses,
            ]);
  }

  public function timer_create(Request $request){
    $new_timer = new Timer();
    $new_timer->fill([
      'seat_name' => $request->seat_name,
      'course_name' => $request->course_name,
      'start' => now(),
      'limit_time' => now()->addMinute(120),
    ]);
    $new_timer->save();


    return redirect('index');
  }

    public function timer_destroy($id){
      DB::table('timer')
            ->where('id', $id)
            ->delete();
      return redirect('index');
    }

  public function seats(){
    $seats =DB::table('seats')
            ->select('id', 'seat_name')
            ->orderBy('created_at','desc')
            ->get();
            return view('seats', ['seats'=>$seats]);
  }

  public function seats_create(Request $request){
    $seat_name = $request->input('seat_name');
    return view('seats_create')->with([
      "seat_name" => $seat_name,
  ]);
  }

  public function seats_store(Request $request){
    $new_seats = new Seats();
    $new_seats->fill([
      'seat_name' => $request->seat_name,
    ]);
    $new_seats->save();

    return redirect('seats');
  }

    public function seats_edit (Request $request){
      $id = $request->input('seat_id');
      $seat_name = $request->input('seat_name');

      return view('seats_update')->with([
        "id" => $id,
        "seat_name" => $seat_name,
  ]);
    }

    public function seats_update (Request $request){
      $id = $request->id;
      $update = $request->seat_name;
      DB::table('seats')
          ->where('id', $id)
          ->update([
              'seat_name' => $update,
              'updated_at' => now(),
          ]);
      return redirect ('seats');
    }

    public function seats_destroy($id){
      DB::table('seats')
            ->where('id', $id)
            ->delete();
      return redirect('seats');
    }

    public function courses(){
      $courses =DB::table('courses')
              ->select('id', 'course_name')
              ->orderBy('created_at','desc')
              ->get();
              return view('courses', ['courses'=>$courses]);
  }

    public function courses_create(Request $request){
      $course_name = $request->input('course_name');
      return view('courses_create')->with([
        "course_name" => $course_name,
    ]);
  }

    public function courses_store(Request $request){
      $new_courses = new Courses();
      $new_courses->fill([
        'course_name' => $request->course_name,
      ]);
      $new_courses->save();

      return redirect('courses');
  }

    public function courses_edit (Request $request){
      $id = $request->input('course_id');
      $course_name = $request->input('course_name');

      return view('courses_update')->with([
        "id" => $id,
        "course_name" => $course_name,
  ]);
    }

    public function courses_update (Request $request){
      $id = $request->id;
      $update = $request->course_name;
      DB::table('courses')
          ->where('id', $id)
          ->update([
              'course_name' => $update,
              'updated_at' => now(),
          ]);
      return redirect ('courses');
    }

    public function courses_destroy($id){
      DB::table('courses')
            ->where('id', $id)
            ->delete();
      return redirect('courses');
    }
}

<?php
use Illuminate\Http\Request;
Use \App\Patient;
Use \App\RDV;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/rdvs', 'RdvController@index');
Route::post('/rdvs', 'RdvController@store');
Route::post('/rdvs/{id}', 'RdvController@update');
Route::delete('/rdvs/{rdv}', 'RdvController@destroy');




/**
 * Display All Tasks
 */
Route::get('/', function () {
    
    $patients = Patient::orderBy('created_at', 'desc')->get();
    $rdv = RDV::orderBy('created_at', 'desc')->get();
    $today= Carbon\Carbon::now()->format('Y-m-d');
    $todayRdv = RDV::where('date', $today)->get();
    return view('dashbord', [
        'patients' => $patients,
        'today' => $today,
        'rdv' => $rdv,
        'todayRdv'=>$todayRdv,

    ]);
});
Route::get('/rdv/pdf/{id}', function ($id) {
    
    $today= Carbon\Carbon::now()->format('Y-m-d');
    $r = RDV::find($id);
    $pdf = PDF::loadView('oneRdv', $r);
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('customers.pdf');
});

Route::get('/rdv/{id}', function ($id) {
    
    $today= Carbon\Carbon::now()->format('Y-m-d');
    $r = RDV::find($id);
    return view('oneRdv', [
        'r'=>$r,
    ]);
});



/**
 * Add A New Task
 */
Route::post('/patient', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'firstName' => 'required|max:255',
        'number' => 'required|max:255',
        'adresse' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // Create The patient...
    $patient = new Patient();
    $patient->name = $request->name;
    $patient->firstName = $request->firstName;
    $patient->mail = $request->mail;
    $patient->adresse = $request->adresse;
    $patient->number = $request->number;


    $patient->save();

})->name('patient');;

/**
 * Delete An Existing Task
 */
Route::delete('/patient/{id}', function ($id) {
    //
});

<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}
    public function postAnalyze(){
        $input = Input::get("choice");
        //dd($input);
        $myarray = array_unique($input);

        foreach($myarray as $key => $value){
            if($value==0){
                unset($myarray[$key]);
            }
        }
        //dd($myarray);

        // Fetching data for each entry:
        $popData = new popModel();
        $mypopData2  = $popData::whereIn("id",$myarray)->get();
       // dd($mypopData2);
        //Sending data to page:
        return \View::make("pages.results")->with("countyData",$mypopData2);

    }
    public function getAnalyze(){
        $popData = new popModel();
        $mypopData2  = $popData::all();
        return \View::make("pages.analyzer")->with("countyData",$mypopData2);
    }

    public function getRandomData(){
        //Get three random groups and pass data to homepage:
        $popData = new popModel();
        $mypopData2  = $popData::all();

        $mypopData=$mypopData2->toArray();

        //Picking 3 sets of 4 Random Keys:
        $set1 = array_rand($mypopData,4);
        $set2 = array_rand($mypopData,4);
        $set3 = array_rand($mypopData,4);

        //dd($set3);
        //Using Keys to get three distinct arrays of data:
        $array1 = array($mypopData[$set1[0]],$mypopData[$set1[1]],$mypopData[$set1[2]],$mypopData[$set1[3]]);
        $array2 = array($mypopData[$set2[0]],$mypopData[$set2[1]],$mypopData[$set2[2]],$mypopData[$set2[3]]);
        $array3 = array($mypopData[$set3[0]],$mypopData[$set3[1]],$mypopData[$set3[2]],$mypopData[$set3[3]]);

       //dd($array3);
        //Pass Data to page.

        return \View::make("pages.homemain")
            ->with("dataArray1",$array1)
            ;

    }

}
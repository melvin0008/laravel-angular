<?php 



class trialController extends \BaseController {

    /**
     * Show the profile for the given user.
     */
    public function admin()
    {
        
    	 $name= TrialModel::getName();
    	 //return ;
         $name=$name[0];
        return View::make('admin.first',compact('name'));
    }
    public function publicsite()
    {
        

        return View::make('public.first');
    }
    public function spacedeck()
    {
        

        return View::make('spacedeck.first');
    }

}
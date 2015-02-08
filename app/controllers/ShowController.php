<?php

class ShowController extends \BaseController
{
    /**
     * Shows a listing of t.v shows in JSON format.
     * 
     * @return Response::json
     */
     public function index()
     {
         $shows = array('Doctor Who', 'Deadliest Catch', 'Alaska Gold', 'Prison Break', 'Broadchurch');

         return Response::json($shows);
     }
} 

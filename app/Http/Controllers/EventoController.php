<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;
class EventoController extends Controller
{
    public function calendario(Request $request)
      
    {
        
    	if($request->ajax())
    	{
    		$data = Evento::whereDate('start', '>=', $request->start)
                       ->whereDate('end',   '<=', $request->end)
                       ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	//return view('driveccd.calendario');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function action(Request $request)
    {
        if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = Evento::create([
                   
    				'title'		=>	$request->title, 
                   
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = Evento::find($request->id)->update([
                    
    				'title'		=>	$request->title,
                    
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = Evento::find($request->id)->delete();

    			return response()->json($event);
    		}
        }
           
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
    public function storevent(Request $request)
    {
        request()->validate(Evento::$rules);
        $evento=Evento::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        // 
        $evento = Evento::all();
        return response()->json($evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $evento = Evento::find($id);
       $evento ->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d');
       $evento ->end = Carbon::createFromFormat('Y-m-d H:i:s', $evento->end)->format('Y-m-d');
       return response()->json($evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        $evento = Evento::find($id)->delete();
        return response()->json($evento);
    }
}

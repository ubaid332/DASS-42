<?php

namespace App\Http\Controllers;

use App\Models\Dass42;
use Illuminate\Http\Request;

class Dass42Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $input = $request->all();
        

        $anxietyScore = $input['Q2A']+$input['Q4A']+$input['Q7A']+$input['Q9A']+$input['Q15A']+$input['Q19A']+$input['Q20A']+$input['Q23A']+$input['Q25A']+$input['Q28A']+$input['Q30A']+$input['Q36A']+$input['Q40A']+$input['Q41A'];
        
        if ($anxietyScore <= 7) {
            $anxietySeverity = 'Normal';
        } elseif ($anxietyScore <= 9) {
            $anxietySeverity = 'Mild';
        } elseif ($anxietyScore <= 14) {
            $anxietySeverity = 'Moderate';
        } elseif ($anxietyScore <= 19) {
            $anxietySeverity = 'Severe';
        } else {
            $anxietySeverity = 'Extreme Anxiety';
        }

        $input['AnxietyScore'] = $anxietyScore;
        $input['AnxietySeverity'] = $anxietySeverity;


        $depressionScore = $input['Q3A']+$input['Q5A']+$input['Q10A']+$input['Q13A']+$input['Q16A']+$input['Q17A']+$input['Q21A']+$input['Q24A']+$input['Q26A']+$input['Q31A']+$input['Q34A']+$input['Q37A']+$input['Q38A']+$input['Q42A'];

        if ($depressionScore <= 9) {
            $depressionSeverity = 'Normal';
        } elseif ($depressionScore <= 13) {
            $depressionSeverity = 'Mild';
        } elseif ($depressionScore <= 20) {
            $depressionSeverity = 'Moderate';
        } elseif ($depressionScore <= 27) {
            $depressionSeverity = 'Severe';
        } else {
            $depressionSeverity = 'Extreme Anxiety';
        }

        $input['DepScore'] = $depressionScore;
        $input['DepSeverity'] = $depressionSeverity;


        $stressScore = $input['Q1A']+$input['Q6A']+$input['Q8A']+$input['Q11A']+$input['Q12A']+$input['Q14A']+$input['Q18A']+$input['Q22A']+$input['Q27A']+$input['Q29A']+$input['Q32A']+$input['Q33A']+$input['Q35A']+$input['Q39A'];

        if ($stressScore <= 14) {
            $stressSeverity = 'Normal';
        } elseif ($stressScore <= 18) {
            $stressSeverity = 'Mild';
        } elseif ($stressScore <= 25) {
            $stressSeverity = 'Moderate';
        } elseif ($stressScore <= 33) {
            $stressSeverity = 'Severe';
        } else {
            $stressSeverity = 'Extreme Anxiety';
        }

        $input['StressScore'] = $stressScore;
        $input['StressSeverity'] = $stressSeverity;


        Dass42::create($input);

        return response()->json([
            'status' => 200,
            'message' => "Record added successfully",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dass42  $dass42
     * @return \Illuminate\Http\Response
     */
    public function show(Dass42 $dass42)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dass42  $dass42
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dass42 $dass42)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dass42  $dass42
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dass42 $dass42)
    {
        //
    }
}
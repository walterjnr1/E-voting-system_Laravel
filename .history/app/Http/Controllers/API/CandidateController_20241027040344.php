<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\API\tblcandidate;
use App\Models\API\tblvoter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\candidateRequest;


class CandidateController extends Controller
{
    public function registerCandidate(CandidateRequest $request)
    {

        $voter = tblvoter::where('voterID', $request->voterID)->first();
        
            $candidate = tblcandidate::create([
            'voterID' => $request->voterID, 
            'candidateID' => "C".rand(10200, 90002),
            'candidateName' => $request->fullname, 
            'count' => 0, 
            'office' => $request->office,
            'party' => $request->party, 
            'status' => "1",
            'election_year' => date('Y'), 

             ]);

            tblvoter::where('voterID', $request->voterID)->first();
            $candidate = tblcandidate::where('voterID', $request->voterID)->first();
           // $candidateID =  $candidate->candidateID;
           // $office =  $candidate->office;
            //$party =  $candidate->party;


            //send email 
            Mail::to($voter->email)->send(new OtpMail($otp, $voter->fullname));


        
       $token = $candidate->createToken('register_candidate')->plainTextToken;
        return response()->json(['success' => true, 'message' => 'Candidate Registration Is Complete', 'token' => $token], 201);
    }
    public function chk_if_candidate(Request $request)
    {
        $voterID = $request->voterID;
        $voterRecord = tblcandidate::where('voterID', $voterID)->first();
        if (!$voterRecord) {
            return response()->json(['success' => false, 'message' => 'Sorry, You are not a Candidate'], 404);
        } else{
            return response()->json(['success' => true, 'message' => 'Candidate exist'], 201);

        }
}

public function getPresidentCandidateDetails(Request $request)
{
    $candidates = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
        ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.name')
        ->where('tblcandidates.office', 'President') 
        ->select('tblcandidates.*','tblvoters.*','tblpartys.*')
        ->get();
    if ($candidates) {
        return response()->json($candidates, 201);
    }
}

public function getGovernorCandidateDetails(Request $request)
{
    $candidates = DB::table('tblcandidates')
    ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
    ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.name')
    ->where('tblcandidates.office', 'Governor') 
    ->select('tblcandidates.*','tblvoters.*','tblpartys.*')
    ->get();
if ($candidates) {
    return response()->json($candidates, 201);
}
}
public function getCandidateDetails(Request $request)
{
    $voterID = $request->input('voterID');

    $candidate_data = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
        ->where('tblcandidates.voterID', $voterID)
        ->select('tblcandidates.*', 'tblvoters.*')
        ->first();
    if ($candidate_data) {
        return response()->json($candidate_data, 201);
    }
}

public function getAllParties()
{
    $parties = DB::table('tblpartys')->select('name', 'logo')->get();
    return response()->json($parties, 201);
}

public function selectGovernor()
{
    $candidates = tblcandidate::where('office', 'Governor')->where('status', 1)->get();
    return response()->json($candidates, 201);
}

public function selectPresident()
{
    $candidates = tblcandidate::where('office', 'President')->where('status', 1)->get();
    return response()->json($candidates, 201);
}
public function searchPresident(Request $request)
{
    $searchQuery = $request->input('q');
    $candidates = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
        ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.name')
        ->where('tblcandidates.office', 'President')
        ->where('tblcandidates.status', 1)
        ->where(function ($q) use ($searchQuery) {
            $q->where('tblcandidates.candidateName', 'LIKE', "%{$searchQuery}%")
            ->orwhere('tblcandidates.candidateID', 'LIKE', "%{$searchQuery}%")
            ->orwhere('tblvoters.voterID', 'LIKE', "%{$searchQuery}%")
            ->orWhere('tblvoters.fullname', 'LIKE', "%{$searchQuery}%")
         ->orWhere('tblpartys.name', 'LIKE', "%{$searchQuery}%");
        })
        ->select('tblcandidates.*', 'tblvoters.*','tblpartys.*')
        ->get();

    return response()->json($candidates, 201);
}
public function searchGovernor(Request $request)
{
    
    $searchQuery = $request->input('q');

    $candidates = DB::table('tblcandidates')
        ->join('tblvoters', 'tblcandidates.voterID', '=', 'tblvoters.voterID')
        ->join('tblpartys', 'tblcandidates.party', '=', 'tblpartys.name')
        ->where('tblcandidates.office', 'Governor')
        ->where('tblcandidates.status', 1)
        ->where(function ($q) use ($searchQuery) {
            $q->where('tblcandidates.candidateName', 'LIKE', "%{$searchQuery}%")
            ->orwhere('tblcandidates.candidateID', 'LIKE', "%{$searchQuery}%")
            ->orwhere('tblvoters.voterID', 'LIKE', "%{$searchQuery}%")
            ->orWhere('tblvoters.fullname', 'LIKE', "%{$searchQuery}%")
            ->orWhere('tblpartys.name', 'LIKE', "%{$searchQuery}%");
        })
        ->select('tblcandidates.*', 'tblvoters.*', 'tblpartys.*')
        ->get();

    return response()->json($candidates, 201);
}
}

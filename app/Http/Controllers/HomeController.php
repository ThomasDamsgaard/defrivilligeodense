<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

use DB;

use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::orderBy('name', 'asc')->get();

        return view('home', compact('members'));
    }

    public function store(Request $request)
    {
        //Serverside validation
        $this->validate(request(), [
          'name' => 'required|max:255',
          'email' => 'required',
          'phone' => 'required',
          'organization' => 'required',
          'size' => 'required',
          'sweatsize' => 'required',
          'points' => 'required'
        ]);

        //Creates a request for the input fields
        $member = new Member;

        Member::create([
          'name' => request('name'),
          'email' => request('email'),
          'phone' => request('phone'),
          'organization' => request('organization'),
          'size' => request('size'),
          'sweatsize' => request('sweatsize'),
          'points' => request('points')
        ]);

        return redirect('/home');
    }

    public function edit($id)
    {
        $member = Member::find($id);

        return view('partials.editMember', compact('member', 'id'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'organization' => 'required',
          'size' => 'required',
          'sweatsize' => 'required',
          'points' => 'required'
        ]);

        $member = Member::find($id);
        $member->name = $request->get('name');
        $member->email = $request->get('email');
        $member->phone = $request->get('phone');
        $member->organization = $request->get('organization');
        $member->size = $request->get('size');
        $member->sweatsize = $request->get('sweatsize');
        $member->points = $request->get('points');

        $member->save();

        return redirect('/home');
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect('/home');
    }

    public function addPoints(Request $request)
    {
        $checked = json_decode($request->checkedUsers, true);
        $points = $request->pointsInput;

        foreach ($checked as $checkedUserId) {
            DB::table('members')
            ->where('id', $checkedUserId)
            ->increment('points', $points);
        }

        return redirect('/home');
    }

    public function pdf(Request $request)
    {
        $checked = json_decode($request->pdfUsers, true);
        $data = array();
        foreach ($checked as $pdfUserId) {
            $data[] = DB::table('members')
            ->where('id', $pdfUserId)
            ->first();
        }

        $pdf = PDF::loadView('pdf_list', compact('data'));
        return $pdf->download('liste.pdf');
    }
}

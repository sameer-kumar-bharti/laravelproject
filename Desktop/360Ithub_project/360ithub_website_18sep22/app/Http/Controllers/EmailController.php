<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Enquiry;
use App\Models\Hiredeveloper;
class EmailController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function contactmail(Request $request){
        $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
        ]);

        // dd($request->all());

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->mobile = $request->mobile;
        $contact->email = $request->email;
        $contact->comments = $request->comments;
        $contact->save();
        /*
            "name" => "Stewart Mathis"
            "mobile" => "1193792623"
            "email" => "moneta@mailinator.com"
            "comments" => "Exercitation error d"
        */
        $data = [
            'name' => $contact->name,
            'mobile' => $contact->mobile,
            'email' => $contact->email,
            'message' => $contact->comments
        ];

        $emailto_one = env('TO_EMAIL_ONE');
        $emailto_two = env('TO_EMAIL_TWO');

        \Mail::to($emailto_one)->cc($emailto_two)->send(new \App\Mail\contactMail($data));

        $notification = array(
            'message' => 'Email successfully sent!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function enquirymail(Request $request){
        $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
        ]);

        // dd($request->all());

        $contact = new Enquiry;
        $contact->name = $request->name;
        $contact->mobile = $request->mobile;
        $contact->email = $request->email;
        $contact->save();
        /*
            "name" => "Stewart Mathis"
            "mobile" => "1193792623"
            "email" => "moneta@mailinator.com"
            "comments" => "Exercitation error d"
        */
        $data = [
            'name' => $contact->name,
            'mobile' => $contact->mobile,
            'email' => $contact->email,
        ];

        $emailto_one = env('TO_EMAIL_ONE');
        $emailto_two = env('TO_EMAIL_TWO');

        \Mail::to($emailto_one)->cc($emailto_two)->send(new \App\Mail\EnquiryMail($data));

        $notification = array(
            'message' => 'Email successfully sent!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function hireemail(Request $request){
        $request->validate([
            'designation'=>'required',
            'hire_developer'=>'required',
            'mobile'=>'required',
            'email'=>'required|email',
            'client_name'=>'required',
            'requisition_type'=>'required',
        ]);

        // dd($request->all());

        $contact = new Hiredeveloper;
        $contact->designation = $request->designation;
        $contact->client_name = $request->client_name;
        $contact->mobile = $request->mobile;
        $contact->email = $request->email;
        $contact->requisition_type = $request->requisition_type;
        $contact->hire_developer = $request->hire_developer;
        $contact->save();
        /*
            "name" => "Stewart Mathis"
            "mobile" => "1193792623"
            "email" => "moneta@mailinator.com"
            "comments" => "Exercitation error d"
        */
        if($contact->requisition_type==1){
            $requisition_type = 'Fresher';
        }elseif($contact->requisition_type==2){
            $requisition_type = 'Experienced';
        }

        if($contact->hire_developer==1){
            $hire_developer = 'Laravel Developers';
        }elseif($contact->hire_developer==2){
            $hire_developer = 'CI Developers';
        }
        elseif($contact->hire_developer==3){
            $hire_developer = 'Web Designer';
        }
        elseif($contact->hire_developer==4){
            $hire_developer = 'PHP Developers';
        }
        $data = [
            'designation' => $contact->designation,
            'client_name' => $contact->client_name,
            'mobile' => $contact->mobile,
            'email' => $contact->email,
            'requisition_type' => $requisition_type,
            'hire_developer' => $hire_developer,
        ];

        $emailto_one = env('TO_EMAIL_ONE');
        $emailto_two = env('TO_EMAIL_TWO');

        \Mail::to($emailto_one)->cc($emailto_two)->send(new \App\Mail\HiredeveloperMail($data));

        $notification = array(
            'message' => 'Email successfully sent!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.hire.index');
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


    public function mongo_developer()
    {
        $Keyword   = 'Mongo DB developer in india';
        $metaDesc  = '360 It hub is one of the best Mongo Db Development Company in India. Hire our Mongo DB developer in india.';
        $pageTitle = 'Mongo DB developer in india';
        $metaTitle = 'Mongo DB developer in india';
        return view('front.hire.mongodbdeveloper',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function java_developer()
    {
        $Keyword   = 'No. #1 Java development company in india - 360 It Hub';
        $metaDesc   = 'At 360 It hub we have a team of Java programmers who have experience in handling various Java projects. Best JAVA development service in india.';
        $pageTitle = 'JAVA development service in India';
        $metaTitle = 'JAVA development service in India';
        return view('front.hire.javadeveloper',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function net_developer()
    {
        //$pageTitle = '.NET Development Company in India';
        $pageTitle = '.NET development company | ASP .NET Development Company in India | 360ithub.com';
        $metaTitle = '.NET Development Company in India';
        $metaDesc = '360 It hub is a reliable .net development company in india offers .net web application. Hire Asp .net developers in India.';
        return view('front.hire.dotnet',compact('pageTitle','metaTitle','metaDesc'));
    }


    public function react_developer()
    {
        //$pageTitle = 'React developer in India';
        $pageTitle = 'Hire React developer in india | 360ithub.com';
        $metaTitle = 'React developer in india';
        $metaDesc = '360 It hub offers React developer in India with extensive knowledge and experience in API development and web service integration.';
        return view('front.hire.reactjsdeveloper',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function ui_developer()
    {
        $pageTitle = 'UI / UX Designing in India';
        $metaTitle = 'Best UI/UX Designing in India | 360ithub.com';
        $Keyword   = 'UI / UX Designing in india';
        $metaDesc = 'Hire best UI/UX designing company in India. 360 It Hub is one of the Best UI / UX Designing in India at low budget. Phone: +91-9513199200. Get a free quote today! 360ithub.com';
        return view('front.hire.uidesign',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function react_application_developer()
    {
        $pageTitle = 'React native mobile application development in India';
        $metaTitle = 'React native mobile application development in India';
        $Keyword = 'React native mobile application development in India';
        return view('front.hire.reactapplication',compact('pageTitle','metaTitle'));
    }

    public function flutter_developer()
    {
        //$pageTitle = 'Flutter mobile application development in India ';
        $pageTitle = 'Flutter mobile application development in india	- 360ithub.com ';
        $Keyword = 'Flutter mobile application development in india	- 360ithub.com ';
        $metaTitle = 'Flutter mobile application development in India ';
        $metaDesc = 'Looking for Flutter developer in india? 360 It hub is a leading Flutter mobile application development company in india.';
        return view('front.hire.flutterdeveloper',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function mern_stack_developer()
    {
        //$pageTitle = 'Best Software Development company in India';
        $pageTitle = 'Best Mern Stack Developer in india | 360ithub.com';
        $metaTitle = 'Best Mern Stack Developer in india | 360ithub.com';
        $Keyword = 'Best Mern Stack Developer in india | 360ithub.com';
        $metaDesc = 'Hire Mern Stack developer in India for reliable website development. Call us now +91 9513777001 to hire best mern stack developer in india.';
        return view('front.hire.mernstackdeveloper',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function digital_developer()
    {
       // $pageTitle = 'Best digital marketing company in India';
        $pageTitle = 'Hire Best digital marketing company in Bengaluru, india - 360 it hub';
        $metaTitle = 'Hire Best digital marketing company in Bengaluru, india - 360 it hub';
        $Keyword = 'Hire Best digital marketing company in Bengaluru, india - 360 it hub';
        $metaDesc = '360ithub.com is one of the best digital marketing company in Bangalore that provides online presence large and small business as well start ups. our services like SMM, SEO, SEM, PPC etc.';
        return view('front.hire.digitatmarketing',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function hybrid_application_developer()
    {
        //$pageTitle = 'Hybrid mobile application development in India';
        $pageTitle = 'Top Hybrid mobile application development Company in india';
        $metaTitle = 'Top Hybrid mobile application development Company in india';
        $Keyword = 'Top Hybrid mobile application development Company in india';
        $metaDesc = '360 It hub is a leading hybrid app development company in India specializing in web development and hybrid app development services.';
        return view('front.hire.hybridapplication',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function native_application_developer()
    {
        //$pageTitle = 'Native mobile application development in India';
        $pageTitle = 'Best Native mobile application development in india | 360ithub.com';
        $metaTitle = 'Best Native mobile application development in india | 360ithub.com';
        $Keyword = 'Best Native mobile application development in india | 360ithub.com';
        $metaDesc = '360 It Hub build great mobile apps that your customers appreciate and that helps to grow your business. Contact Native mobile application development in india';
        return view('front.hire.nativemobileapplication',compact('pageTitle','metaTitle','metaDesc'));
    }

    public function node_developer()
    {
        //$pageTitle = 'Node developer in India';
        $pageTitle = 'Hire Node.js developer in India - 360 It Hub';
        $metaTitle = 'Hire Node.js developer in India - 360 It Hub';
        $Keyword = 'Hire Node.js developer in India - 360 It Hub';
        $metaDesc = 'Want to hire Node.js developer in India? 360 It Hub is the top rated Node.js development company in india. Call us: +91 9513777001';
        return view('front.hire.nodedeveloper',compact('pageTitle','metaTitle','metaDesc'));
    }


}

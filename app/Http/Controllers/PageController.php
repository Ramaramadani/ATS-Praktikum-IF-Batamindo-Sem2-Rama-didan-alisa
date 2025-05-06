<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function onlineStores() {
        return view('pages.online-stores');
    }

    public function segmentation() {
        return view('pages.segmentation');
    }

    public function marketingCRM() {
        return view('pages.marketing-crm');
    }

    public function ourBlog() {
        return view('pages.our-blog');
    }

    public function terms() {
        return view('pages.terms');
    }

    public function license() {
        return view('pages.license');
    }

    public function resources() {
        return view('pages.resources');
    }
    public function contact() {
    return view('pages.contact');
}

public function marketplace() {
    return view('pages.marketplace');
}

}

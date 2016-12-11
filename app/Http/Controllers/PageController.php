<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

	public function index() {
		return view ('pages.home');
	}

	public function about() {
		return view ('pages.about');
	}

	public function membership() {
		return view ('pages.membership');
	}

	public function services() {
		return view ('pages.services');
	}

	public function problem() {
		return view ('pages.problem');
	}

	public function solution() {
		return view ('pages.solution');
	}

	public function impact() {
		return view ('pages.impact');
	}

	public function contact() {
		return view ('pages.contact');
	}

	public function event() {
		return view ('pages.events');
	}

	public function partners() {
		return view ('pages.partners');
	}
}

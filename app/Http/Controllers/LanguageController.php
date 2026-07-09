<?php

namespace App\Http\Controllers;

use App\Http\Requests\LanguageRequest;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(){
        $languages = Language::all();
        return view("Language.index", compact('languages'));
    }

    public function create(){
        return view('Language.create');
    }

    // this is for store Language details
    //create is pre-build function
    public function store(LanguageRequest $request){
        Language::create($request->validated());
        return redirect('language')->with('success', 'Language created successfully');
    }

    // this is for get all the language details
    public function all(){
        return Language::all();
    }

    // this is for get one language data
    public function get($id){
        return Language::findOrFail($id);
    }

    // this is for show the edit view for a language
    public function edit($id) {
        $language = Language::findOrFail($id);
        return view('Language.edit', compact('language'));
    }

    public function update(LanguageRequest $request, $id){
        $language = Language::findOrFail($id);
        $language->update($request->validated());
        return redirect('language')->with('success', 'Language updated successfully');
    }

    public function delete($id){
        $language = Language::findOrFail($id);
        $language->delete();
        return redirect('language')->with('success', 'Language deleted successfully');
    }
}
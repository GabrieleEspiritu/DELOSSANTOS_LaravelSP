<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// Student Routes
Route::group(['prefix' => 'students'], function () {
    // Student List (Index)
    Route::get('/', function () {
        return view('students.index');
    })->name('students.index');
    
    // Add Student Form (Create)
    Route::get('/create', function () {
        return view('students.create');
    })->name('students.create');
    
    // Store Student (POST)
    Route::post('/', function () {
        // TODO: Add student to database
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    })->name('students.store');
    
    // View Student Profile (Show)
    Route::get('/{id}', function ($id) {
        return view('students.show');
    })->name('students.show');
    
    // Edit Student Form (Edit)
    Route::get('/{id}/edit', function ($id) {
        return view('students.edit');
    })->name('students.edit');
    
    // Update Student (PUT)
    Route::put('/{id}', function ($id) {
        // TODO: Update student in database
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    })->name('students.update');
    
    // Delete Student (DELETE)
    Route::delete('/{id}', function ($id) {
        // TODO: Delete student from database
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    })->name('students.destroy');
});
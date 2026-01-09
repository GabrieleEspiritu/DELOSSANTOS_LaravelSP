
@extends('layout')

@section('content')
<div class="flex flex-col items-center justify-center min-h-[70vh] text-center space-y-8">
    
    <div class="space-y-4 animate-fade-in-up">
        <span class="inline-block px-3 py-1 text-xs font-semibold tracking-wider text-pink-600 uppercase bg-pink-100 rounded-full dark:bg-pink-900 dark:text-pink-300">
            Academic Year 2026
        </span>
        <h1 class="text-5xl md:text-7xl font-bold text-gray-900 dark:text-white">
            Welcome to the <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-violet-500">Student Portal</span>
        </h1>
        <p class="max-w-2xl mx-auto text-xl text-gray-600 dark:text-gray-300">
            Manage student records, track academic progress, and organize course schedules in one beautiful, centralized interface.
        </p>
    </div>

    <div class="flex gap-4">
        <a href="{{ route('students.index') }}" 
           class="px-8 py-4 text-lg font-bold text-white transition-all transform bg-primary rounded-full hover:bg-primaryHover hover:scale-105 shadow-lg shadow-pink-500/30">
            View Student List
        </a>
        <a href="{{ route('students.create') }}" 
           class="px-8 py-4 text-lg font-bold text-primary bg-white border-2 border-pink-100 rounded-full hover:border-primary hover:bg-pink-50 dark:bg-darkCard dark:text-white dark:border-gray-700 dark:hover:border-pink-500 transition-all">
            Add New Student
        </a>
    </div>

    <div class="mt-12 opacity-50">
        <div class="grid grid-cols-3 gap-4">
            <div class="h-2 w-24 bg-pink-300 rounded-full"></div>
            <div class="h-2 w-24 bg-violet-300 rounded-full"></div>
            <div class="h-2 w-24 bg-pink-300 rounded-full"></div>
        </div>
    </div>
</div>
@endsection

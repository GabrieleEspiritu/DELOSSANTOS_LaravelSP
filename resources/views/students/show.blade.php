
@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto">
    
    <div class="bg-white dark:bg-darkCard rounded-3xl shadow-2xl overflow-hidden border border-pink-100 dark:border-gray-700">
        <div class="h-32 bg-gradient-to-r from-pink-400 to-rose-400"></div>
        
        <div class="px-8 pb-8 relative">
            <div class="-mt-16 mb-6">
                <div class="w-32 h-32 rounded-full bg-white dark:bg-gray-800 p-2 shadow-lg mx-auto md:mx-0">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Maria" alt="Avatar" class="w-full h-full rounded-full bg-pink-50">
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-start">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Maria Clara</h1>
                    <p class="text-pink-500 font-semibold">Student ID: 2026-0001</p>
                </div> 
                <div class="mt-4 md:mt-0 space-x-3">
                    <a href="{{ route('students.index') }}" class="px-6 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 rounded-full font-semibold hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                        Back to List
                    </a>
                </div>
            </div>

            <hr class="my-6 border-gray-100 dark:border-gray-700">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-1">
                    <span class="text-xs uppercase font-bold text-gray-400 tracking-wider">Email Address</span>
                    <p class="text-lg font-medium text-gray-800 dark:text-gray-200">maria.clara@student.edu</p>
                </div>
                <div class="space-y-1">
                    <span class="text-xs uppercase font-bold text-gray-400 tracking-wider">Course</span>
                    <p class="text-lg font-medium text-gray-800 dark:text-gray-200">BS Information Technology</p>
                </div>
                <div class="space-y-1">
                    <span class="text-xs uppercase font-bold text-gray-400 tracking-wider">Year Level</span>
                    <p class="text-lg font-medium text-gray-800 dark:text-gray-200">3rd Year</p>
                </div>
                <div class="space-y-1">
                    <span class="text-xs uppercase font-bold text-gray-400 tracking-wider">Status</span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 dark:bg-green-900 dark:text-green-300">
                        Active
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
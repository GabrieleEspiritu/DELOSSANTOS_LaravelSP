
@extends('layout')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('students.index') }}" class="text-pink-500 hover:underline text-sm font-semibold">&larr; Back to List</a>
    </div>

    <div class="bg-white dark:bg-darkCard rounded-2xl shadow-xl border border-pink-100 dark:border-gray-700 p-8">
        <div class="mb-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Register Student</h2>
            <p class="text-gray-500 dark:text-gray-400 mt-2">Fill in the information below to add a new record.</p>
        </div>

        <form method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                    <input type="text" name="name" placeholder="e.g. Jose Rizal" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 dark:focus:ring-pink-900 outline-none transition text-gray-700 dark:text-white" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                    <input type="email" name="email" placeholder="student@university.edu" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 dark:focus:ring-pink-900 outline-none transition text-gray-700 dark:text-white" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Course</label>
                        <div class="relative">
                            <select name="course" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 dark:focus:ring-pink-900 outline-none transition appearance-none text-gray-700 dark:text-white cursor-pointer" required>
                                <option value="">Select a course</option>
                                <option value="BS Information Technology">BS Information Technology</option>
                                <option value="BS Computer Science">BS Computer Science</option>
                                <option value="BS Engineering">BS Engineering</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Year Level</label>
                        <div class="relative">
                            <select name="year_level" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 dark:focus:ring-pink-900 outline-none transition appearance-none text-gray-700 dark:text-white cursor-pointer" required>
                                <option value="">Select year level</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year">4th Year</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="w-full py-4 mt-4 bg-primary hover:bg-primaryHover text-white font-bold rounded-lg shadow-lg shadow-pink-500/30 transition-transform transform hover:scale-[1.02]">
                    Save Student Record
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
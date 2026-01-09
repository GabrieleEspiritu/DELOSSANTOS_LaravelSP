
@extends('layout')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('students.index') }}" class="text-pink-500 hover:underline text-sm font-semibold">&larr; Back to List</a>
    </div>

    <div class="bg-white dark:bg-darkCard rounded-2xl shadow-xl border border-pink-100 dark:border-gray-700 p-8 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-2 h-full bg-yellow-400"></div>

        <div class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Edit Student</h2>
            <p class="text-gray-500 dark:text-gray-400 mt-2">Update the record for <span class="text-pink-500 font-semibold">Maria Clara</span>.</p>
        </div>

        <form method="POST" action="{{ route('students.update', 1) }}">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
                    <input type="text" name="name" value="Maria Clara" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 dark:focus:ring-yellow-900 outline-none transition text-gray-700 dark:text-white" required>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
                    <input type="email" name="email" value="maria.clara@student.edu" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 dark:focus:ring-yellow-900 outline-none transition text-gray-700 dark:text-white" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Course</label>
                        <select name="course" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 dark:focus:ring-yellow-900 outline-none transition text-gray-700 dark:text-white" required>
                            <option value="BS Information Technology" selected>BS Information Technology</option>
                            <option value="BS Computer Science">BS Computer Science</option>
                            <option value="BS Engineering">BS Engineering</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Year Level</label>
                        <select name="year_level" class="w-full px-4 py-3 rounded-lg bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 focus:border-yellow-400 focus:ring-2 focus:ring-yellow-200 dark:focus:ring-yellow-900 outline-none transition text-gray-700 dark:text-white" required>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year" selected>3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>
                </div>

                <div class="flex gap-4 pt-4">
                    <button type="submit" class="flex-1 py-3 bg-yellow-500 hover:bg-yellow-600 text-white font-bold rounded-lg shadow-lg shadow-yellow-500/30 transition-transform transform hover:scale-[1.02]">
                        Update Changes
                    </button>
                    <a href="{{ route('students.index') }}" class="flex-1 py-3 text-center bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 font-bold rounded-lg hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                        Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

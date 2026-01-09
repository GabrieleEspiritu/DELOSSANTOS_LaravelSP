
@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
        <div>
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">Student List</h2>
            <p class="text-gray-500 dark:text-gray-400">Manage and view all registered students.</p>
        </div>
        <a href="{{ route('students.create') }}" class="flex items-center px-6 py-3 bg-primary hover:bg-primaryHover text-white rounded-lg font-semibold shadow-lg shadow-pink-500/20 transition-all hover:-translate-y-1">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
            Add New Student
        </a>
    </div>

    <div class="bg-white dark:bg-darkCard rounded-2xl shadow-xl border border-pink-50 dark:border-gray-700 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-pink-50 dark:bg-gray-800 text-pink-700 dark:text-pink-400 text-sm uppercase tracking-wider">
                        <th class="p-6 font-bold border-b dark:border-gray-700">Name</th>
                        <th class="p-6 font-bold border-b dark:border-gray-700">Course</th>
                        <th class="p-6 font-bold border-b dark:border-gray-700">Year Level</th>
                        <th class="p-6 font-bold border-b dark:border-gray-700 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                    <tr class="hover:bg-pink-50/50 dark:hover:bg-gray-700/50 transition duration-150">
                        <td class="p-6 font-medium text-gray-900 dark:text-white">Maria Clara</td>
                        <td class="p-6 text-gray-600 dark:text-gray-300">BS Information Technology</td>
                        <td class="p-6">
                            <span class="px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">
                                3rd Year
                            </span>
                        </td>
                        <td class="p-6 text-right space-x-2">
                            <a href="{{ route('students.show', 1) }}" class="inline-flex items-center px-3 py-1.5 bg-blue-50 text-blue-600 hover:bg-blue-100 rounded-md transition text-sm font-semibold dark:bg-blue-900/30 dark:text-blue-300">View</a>
                            <a href="{{ route('students.edit', 1) }}" class="inline-flex items-center px-3 py-1.5 bg-yellow-50 text-yellow-600 hover:bg-yellow-100 rounded-md transition text-sm font-semibold dark:bg-yellow-900/30 dark:text-yellow-300">Edit</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-pink-50/50 dark:hover:bg-gray-700/50 transition duration-150">
                        <td class="p-6 font-medium text-gray-900 dark:text-white">Juan Cruz</td>
                        <td class="p-6 text-gray-600 dark:text-gray-300">BS Computer Science</td>
                        <td class="p-6">
                            <span class="px-3 py-1 text-xs font-semibold text-purple-700 bg-purple-100 rounded-full dark:bg-purple-900 dark:text-purple-300">
                                4th Year
                            </span>
                        </td>
                        <td class="p-6 text-right space-x-2">
                            <a href="{{ route('students.show', 2) }}" class="inline-flex items-center px-3 py-1.5 bg-blue-50 text-blue-600 hover:bg-blue-100 rounded-md transition text-sm font-semibold dark:bg-blue-900/30 dark:text-blue-300">View</a>
                            <a href="{{ route('students.edit', 2) }}" class="inline-flex items-center px-3 py-1.5 bg-yellow-50 text-yellow-600 hover:bg-yellow-100 rounded-md transition text-sm font-semibold dark:bg-yellow-900/30 dark:text-yellow-300">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="p-4 border-t border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-center text-sm text-gray-500">
            Showing 2 of 2 students
        </div>
    </div>
</div>
@endsection

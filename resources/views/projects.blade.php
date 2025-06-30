@extends('app')

@section('content')
<section id="projects" class="py-16 bg-transparent-section animate-fade-in">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">
                My <span class="text-violet-500">Projects</span>
            </h2>
            <div class="w-20 h-1 bg-violet-500 mx-auto "></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                <img src="img/tokobuku.png" alt="Project 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Toko Imaji</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        A full-featured e-commerce platform built with PHP and MYSQL.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs px-3 py-1 rounded-full">PHP</span>
                        <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs px-3 py-1 rounded-full">MYSQL</span>
                        <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs px-3 py-1 rounded-full">Bootstrap</span>
                    </div>
                    <div class="flex space-x-3">
                        <!-- <a href="#" class="text-violet-500 hover:underline">View Project</a> -->
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                <img src="img/takoyaki.png" alt="Project 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Takoyakin</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        My first Website that i made, it's a E-Commers website about selling a Takoyaki.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs px-3 py-1 rounded-full">HTML</span>
                        <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs px-3 py-1 rounded-full">CSS</span>
                        <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs px-3 py-1 rounded-full">JS</span>
                    </div>
                    <div class="flex space-x-3">
                        <a href="https://produktif-tako.vercel.app/" class="text-violet-500 hover:underline">View Project</a>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                <img src="img/porto.png" alt="Project 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Personal Website</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        A responsive portfolio website built with modern web technologies.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs px-3 py-1 rounded-full">TailwindCSS</span>
                        <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs px-3 py-1 rounded-full">AlpineJS</span>
                    </div>
                    <div class="flex space-x-3">
                        <a href="#" class="text-violet-500 hover:underline">View Project</a>
                    </div>
                </div>
            </div>
            <!-- Project 4 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                <img src="img/musik.png" alt="Project 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Music Verse</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        A personal music website that has my own taste of music.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs px-3 py-1 rounded-full">TailwindCSS</span>
                        <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs px-3 py-1 rounded-full">AlpineJS</span>
                    </div>
                    <div class="flex space-x-3">
                        <!-- <a href="#" class="text-violet-500 hover:underline">View Project</a> -->
                    </div>
                </div>
            </div>
            <!-- Project 5 -->
            <div class="bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:-translate-y-2">
                <img src="img/note.png" alt="Project 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2 text-gray-800 dark:text-white">Who's Note?</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Note or diary.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 text-xs px-3 py-1 rounded-full">Laravel</span>
                        <span class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 text-xs px-3 py-1 rounded-full">TailwindCSS</span>
                        <span class="bg-indigo-100 dark:bg-indigo-900 text-indigo-800 dark:text-indigo-200 text-xs px-3 py-1 rounded-full">AlpineJS</span>
                    </div>
                    <div class="flex space-x-3">
                        <!-- <a href="#" class="text-violet-500 hover:underline">View Project</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
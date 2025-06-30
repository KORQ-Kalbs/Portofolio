@extends('app')

@section('content')
<section id="about" class="py-16 bg-transparent-section animate-fade-in">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">
                About <span class="text-violet-500">Me</span>
            </h2>
            <div class="w-20 h-1 bg-violet-500 mx-auto"></div>
        </div>
        
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/3 mb-8 md:mb-0 flex justify-center">
                <img src="img/about.jpg" alt="blank"  class="rounded-lg shadow-xl w-64 h-auto md:w-full max-w-xs">
            </div>
            <div class="md:w-2/3 md:pl-12">
                <h3 class="text-2xl font-semibold mb-4 text-gray-800 dark:text-white">
                    Who I Am
                </h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    I'm a passionate junior web developer with a strong foundation in modern web technologies. My journey in programming began with a curiosity about how websites work, and it has grown into a dedicated pursuit of creating elegant, efficient digital solutions, i'am also curious about game develop.
                </p>
                
                <div class="mb-8">
                    <h4 class="text-xl font-semibold mb-4 text-gray-800 dark:text-white">My Experience</h4>
                    <div class="space-y-4">
                        <div class="border-l-4 border-violet-500 pl-4 py-2">
                            <h5 class="font-medium">High School Students</h5>
                            <p class="text-sm text-gray-500 dark:text-gray-400">2024 - Present</p>
                        </div>
                        <div class="border-l-4 border-violet-500 pl-4 py-2">
                            <h5 class="font-medium"><!-- ini bisa diubah --></h5>
                            <p class="text-sm text-gray-500 dark:text-gray-400"><!-- ini bisa diubah --></p>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="inline-flex items-center text-violet-500 font-medium ease-in-out hover:[text-shadow:10px_5px_20px_rgba(168,85,247,1)] transition duration-300 ">
                    Download CV
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="skills" class="py-16 bg-gray-800 animate-fade-in    bg-section-transparent">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4 text-gray-800 dark:text-white">
                My <span class="text-violet-500">Skills</span>
            </h2>
            <div class="w-20 h-1 bg-violet-500 mx-auto"></div>
        </div>

        <div class="flex gap-5 mb-4">
          <a id="techBtn" class="relative cursor-pointer text-xl font-semibold text-white rounded transition duration-300 hover:text-violet-500 hover:neon-glow hover:[text-shadow:0_0_10px_rgba(168,85,247,0.8)] after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-violet-500 after:w-0 hover:after:w-full after:transition-all after:duration-300">
             Tech
          </a>
          <a id="toolsBtn"  class="relative cursor-pointer text-xl font-semibold text-white rounded transition duration-300 hover:text-violet-500 hover:neon-glow hover:[text-shadow:0_0_10px_rgba(168,85,247,0.8)] after:content-[''] after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:bg-violet-500 after:w-0 hover:after:w-full after:transition-all after:duration-300">
             Tools
          </a>
        </div>
      
        <div id="techContent" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-8 animate-fade-in">
            <!-- Skill 1 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">

             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" alt="HTML" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">HTML</h3>

                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Advance</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 98%">
                   </div>
                 </div>
            </div>
            
            <!-- Skill 2 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">

             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg" alt="CSS" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">CSS</h3>

                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Advance</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 96%">
                   </div>
                 </div>
            </div>
            
            <!-- Skill 3 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">

             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="TailwindCSS" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">TailwindCSS</h3>

                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Advance</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 95%">
                   </div>
                 </div>
            </div>
            
            <!-- Skill 4 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">

             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Bootstrap</h3>

                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Advance</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 90%">
                   </div>
                 </div>
            </div>
            
            <!-- Skill 5 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
                <div class="w-16 h-16 mx-auto mb-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-full h-full">
                </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">PHP</h3>
                <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Advance</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 89%">
                   </div>
                 </div>
            </div>

            <!-- Skill 6 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
                <div class="w-16 h-16 mx-auto mb-4">
                    
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" alt="Laravel" class="w-full h-full">
                </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Laravel</h3>
                <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Intermediate</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 75%">
                   </div>
                 </div>
            </div>

            <!-- Skill 7 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
                <div class="w-16 h-16 mx-auto mb-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-plain.svg" alt="JavaScript" class="w-full h-full">
                </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">JavaScript</h3>
                <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Intermediate</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 70%">
                   </div>
                 </div>
            </div>

            <!-- Skill 8 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">

             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-original-wordmark.svg" alt="NodeJS" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">NodeJS</h3>

                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Intermediate</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 60%">
                   </div>
                 </div>
            </div>

            <!-- Skill 9 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">

             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/alpinejs/alpinejs-original-wordmark.svg" alt="AlpineJS" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">AlpineJS</h3>

                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Intermediate</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 55%">
                   </div>
                 </div>
            </div>

            <!-- Skill 10 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
                <div class="w-16 h-16 mx-auto mb-4">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="w-full h-full">
                </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Vue.js</h3>
                <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Beginner</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 35%">
                   </div>
                 </div>
            </div>

            <!-- Skill 11 -->
            <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">

             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg" alt="ReactJS" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">React</h3>

                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2">Beginner</p>
                 <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                   <div class="bg-violet-500 h-2.5 rounded-full transform scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-700" style="width: 15%">
                   </div>
                 </div>
            </div>
        </div>  

    <div id="toolsContent" class="hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-8 animate-fade-in">
        <!-- Tools 1 -->
        <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="VScode" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">VSCode</h3>
                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2"><!-- isi apa aja --></p>
        </div>

        <!-- Tools 2 -->
        <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg" alt="Github" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Github</h3>
                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2"><!-- isi apa aja --></p>
        </div>

        <!-- Tools 3 -->
        <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/composer/composer-original.svg" alt="Composer" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">Composer</h3>
                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2"><!-- isi apa aja --></p>
        </div>

        <!-- Tools 4 -->
        <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/npm/npm-original-wordmark.svg" alt="Npm" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">NPM</h3>
                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2"><!-- isi apa aja --></p>
        </div>

        <!-- Tools 5 -->
        <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mariadb/mariadb-original.svg" alt="MariaDB" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">MariaDB</h3>
                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2"><!-- isi apa aja --></p>
        </div>

        <!-- Tools 6 -->
        <div class="bg-black p-6 rounded-lg shadow-md text-center transition-transform duration-300 hover:scale-105 hover:shadow-[0_0_15px_5px_rgba(168,85,247,0.8)] group">
             <div class="w-16 h-16 mx-auto mb-4">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" alt="MySQL" class="w-full h-full">
             </div>
                <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-white">MySQL</h3>
                 <!-- Hover -->
                 <p class="text-sm text-violet-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300 mb-2"><!-- isi apa aja --></p>
        </div>
       
    </div>
</section>
@endsection 
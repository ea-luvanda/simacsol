<x-layouts.appguest>
    <x-slot name="title">Home</x-slot>
    

    <!-- Hero Section -->
    <div id="home" class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto flex md:flex-row flex-col">
            <div class="flex relative z-10 pb-8 bg-white lg:max-w-2xl lg:w-full ">
                <main class="my-auto max-w-7xl px-4 sm:px-6 md:px-8">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-normal text-gray-800 sm:text-5xl md:text-6xl">
                            <span class="block ">Karibu</span>
                            <span class="block font-extrabold text-indigo-600">Simac <span class="text-gray-600 font-light">School of Life</span> </span>
                            
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                           Jifunze Maarifa yatakayokuinua kiuchumi, Tatua changamoto ya Ajira.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('jiunge') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                    Jiunge Sasa
                                </a>
                                
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="#mawasiliano" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                                    Wasiliana Nasi
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

            <div class="relative z-10 pb-8 bg-white  lg:max-w-2xl lg:w-full">
                <main class="mt-6 lg:mt-0 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div x-data="{ 
                        currentIndex: 0,
                        images: [
                            {
                                desktop: '../public/img/hero1.png',
                                mobile: '../public/img/hero1.png',
                                pill: 'Elimu Bora',
                                pillPosition: 'top-4 left-4'
                            },
                            {
                                desktop: '../public/img/hero2.png',
                                mobile: '../public/img/hero2.png',
                                pill: 'Elimu Kwa Vitendo',
                                pillPosition: 'bottom-4 left-4'
                            },
                            {
                                desktop: '../public/img/hero3.png',
                                mobile: '../public/img/hero3.png',
                                pill: 'Kazi Mbali Mbali',
                                pillPosition: 'top-20 right-10'
                            }
                        ],
                        init() {
                            setInterval(() => {
                                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                            }, 4000); // Increased duration for smoother feel
                        }
                    }" class="relative">
                        <div class="relative h-[400px] md:h-[500px]"> 
                            <!-- Desktop Image -->
                            <template x-for="(image, index) in images" :key="index">
                                <img :src="image.desktop" 
                                     :alt="'Slide ' + (index + 1)"
                                     class="absolute inset-0 w-full h-full object-cover md:max-w-[500px] lg:max-w-[600px] xl:max-w-[650px] hidden md:block"
                                     :class="currentIndex === index ? 'opacity-100 z-10 scale-100' : 'opacity-0 z-0 scale-95'"
                                     x-show="currentIndex === index"
                                     x-transition:enter="transform transition ease-out duration-700"
                                     x-transition:enter-start="opacity-0 scale-95"
                                     x-transition:enter-end="opacity-100 scale-100"
                                     x-transition:leave="transform transition ease-in duration-700"
                                     x-transition:leave-start="opacity-100 scale-100"
                                     x-transition:leave-end="opacity-0 scale-95">
                            </template>

                            <!-- Mobile Image -->
                            <template x-for="(image, index) in images" :key="index">
                                <img :src="image.mobile"
                                     :alt="'Slide ' + (index + 1)"
                                     class="absolute inset-0 w-full h-full object-cover md:hidden block max-w-[343px] sm:max-w-[400px] mx-auto"
                                     :class="currentIndex === index ? 'opacity-100 z-10 scale-100' : 'opacity-0 z-0 scale-95'"
                                     x-show="currentIndex === index"
                                     x-transition:enter="transform transition ease-out duration-700"
                                     x-transition:enter-start="opacity-0 scale-95"
                                     x-transition:enter-end="opacity-100 scale-100"
                                     x-transition:leave="transform transition ease-in duration-700"
                                     x-transition:leave-start="opacity-100 scale-100"
                                     x-transition:leave-end="opacity-0 scale-95">
                            </template>

                            <!-- Floating Pills -->
                            <template x-for="(image, index) in images" :key="index">
                                <div x-show="currentIndex === index"
                                     :class="['absolute bg-orange-600 text-white px-4 py-2 rounded-full shadow-lg transform transition-all duration-700 z-20', image.pillPosition]"
                                     x-text="image.pill"
                                     x-transition:enter="transform transition ease-out duration-700"
                                     x-transition:enter-start="opacity-0 translate-y-4"
                                     x-transition:enter-end="opacity-100 translate-y-0"
                                     x-transition:leave="transform transition ease-in duration-700"
                                     x-transition:leave-start="opacity-100 translate-y-0"
                                     x-transition:leave-end="opacity-0 translate-y-4">
                                </div>
                            </template>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div id="kuhusu" class="bg-white relative   flex items-center  n justify-center overflow-hidden z-40">
        
        <div class="relative mx-auto h-full px-4  pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
            <div class="flex flex-col items-center justify-between lg:flex-row py-16">
                <div class=" relative ">
                    
                    <div class="lg:max-w-xl lg:pr-5 relative z-1">
                        <p class="flex text-2xl uppercase text-g1 text-indigo-600 ">
                            Kuhusu Sisi
                        </p>
                        <h2 class="mb-6 max-w-lg text-4xl font-light leading-snug tracking-tight text-g1 sm:text-7xl sm:leading-snug">
                             Suluhisho la
                            <span class="my-1 text-indigo-600  inline-block border-b-8 border-g4 bg-white px-4 font-bold text-g4 animate__animated animate__flash">Ajira</span>
                        </h2>
                        <p class="text-xl text-gray-900">
                            SimacSol(School of Life) ni taasisi iliyojikita katika kutatua changamoto ya Ajira.
                        </p>   
                        <div class="flex flex-col space-y-1 text-xl  mt-2">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 mr-2 text-orange-600">
                                        <path d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z" />
                                        <path d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z" />
                                        <path d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-bold text-gray-500">Elimu na Ujasiriamali</h3>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 mr-2 text-indigo-600">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />   
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-bold text-gray-500">Mafunzo Kazini</h3>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 mr-2 text-green-600">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />   
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-bold text-gray-500">Kutafuta Kazi/Waajiri </h3>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="mt-10 flex flex-col items-center md:flex-row">
                            <a href="{{ route('jiunge') }}" class="mb-3 inline-flex h-12 w-full items-center justify-center rounded bg-indigo-600 px-6 font-medium tracking-wide text-white shadow-md transition hover:bg-blue-800 focus:outline-none md:mr-4 md:mb-0 md:w-auto">
                                Jiunge sasa</a>
                            <a href="#" aria-label="" class="group inline-flex items-center font-semibold text-g1">
                                Jifunze zaidi
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 h-6 w-6 transition-transform group-hover:translate-x-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="relative hidden lg:ml-32 lg:block lg:w-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="my-6 mx-auto h-10 w-10 animate-bounce rounded-full bg-white p-2 lg:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                    </svg>
                    <div class="abg-orange-400 mx-auto w-fit overflow-hidden rounded-[6rem] rounded-br-none rounded-tl-none">
                        <img src="{{ asset('img/pros.jpg') }}" class="w-[400px] h-[400px] object-cover"    >
                    </div>
                </div>
            </div>
        </div> 
        <div class="hidden text-9xl varien absolute top-6 left-1/4 text-g/10 z-40    ">
            About Us
        </div>
        <div class=" absolute -bottom-24 left-10 z-5  opacity-10 "> 
            
        </div>
        
        <div class=" absolute -bottom-0 left-3/4 z-0  opacity-10 "> 
            <svg width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" class="w-48 z-0  h-full -rotate-90   object-fill fill-red-300 text-red-300">
                <path d="M32 225h12.993A4.004 4.004 0 0 1 49 220.997V138.01c0-4.976.724-5.04 1.614-.16l12.167 66.708c.397 2.177 2.516 3.942 4.713 3.942h8.512a3.937 3.937 0 0 1 3.947-4S79 127.5 80 129s14.488 52.67 14.488 52.67c.559 2.115 2.8 3.83 5.008 3.83h8.008a3.993 3.993 0 0 1 3.996-3.995v-43.506c0-4.97 1.82-5.412 4.079-.965l10.608 20.895c1.001 1.972 3.604 3.571 5.806 3.571h9.514a3.999 3.999 0 0 1 3.993-4.001v-19.49c0-4.975 2.751-6.074 6.155-2.443l6.111 6.518c1.51 1.61 4.528 2.916 6.734 2.916h7c2.21 0 5.567-.855 7.52-1.92l9.46-5.16c1.944-1.06 5.309-1.92 7.524-1.92h23.992a4.002 4.002 0 0 0 4.004-3.992v-7.516a3.996 3.996 0 0 0-4.004-3.992h-23.992c-2.211 0-5.601.823-7.564 1.834l-4.932 2.54c-4.423 2.279-12.028 3.858-16.993 3.527l2.97.198c-4.962-.33-10.942-4.12-13.356-8.467l-11.19-20.14c-1.07-1.929-3.733-3.492-5.939-3.492h-7c-2.21 0-4 1.794-4 4.001v19.49c0 4.975-1.14 5.138-2.542.382l-12.827-43.535c-.625-2.12-2.92-3.838-5.127-3.838h-8.008c-2.207 0-3.916 1.784-3.817 4.005l1.92 42.998c.221 4.969-.489 5.068-1.585.224l-15.13-66.825c-.488-2.155-2.681-3.902-4.878-3.902h-8.512a3.937 3.937 0 0 0-3.947 4s.953 77-.047 75.5-13.937-92.072-13.937-92.072C49.252 34.758 47.21 33 45 33H31.999" fill-rule="evenodd"></path>
            </svg>
        </div> 
        <div class=" absolute top-10 left-3/4 z-0  opacity-10 "> 
            
            <svg fill="#000000" width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" class="w-96 z-0  h-full    object-fill fill-blue-300 text-blue-300">
                <path d="M230.704 99.2a4.004 4.004 0 0 0-4.01-3.995h-50.981c-2.215 0-5.212-1.327-6.693-2.964L155.289 77.08c-17.795-19.65-41.628-16.256-53.234 7.58l-38.736 79.557C60.42 170.172 52.705 175 46.077 175H29.359a3.996 3.996 0 0 0-3.994 3.995v10.01A4 4 0 0 0 29.372 193h24.7c8.835 0 19.208-6.395 23.174-14.293l43.645-86.914c3.964-7.894 12.233-9.228 18.473-2.974l17.184 17.219c3.123 3.13 9.242 5.667 13.647 5.667H226.7a4.005 4.005 0 0 0 4.004-3.994v-8.512z" fill-rule="evenodd"></path>
            </svg>
        </div> 
    
    </div>
                        
    
    <!-- Features Section -->
     <br id="mtaala">
    <div id="" class="mt-4 py-12 bg-indigo-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-indigo-900 sm:text-4xl">
                    Mtaala
                </h2>
                <p class="mt-4 text-lg text-gray-700">
                    Tunatoa mafunzo mengi yanayolenga kukuinua kiuchumi.
                </p>
            </div>
            <div class="flex flex-row overflow-x-auto gap-4">
                
                        
                <div class="group flex-shrink-0 mb-4 w-80 relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40  mx-auto mt-8">
                    <img src="{{ asset('img/kilimo.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Kilimo</h3>
                    <div class="z-10 gap-y-1 hidden text-sm leading-6 text-gray-300">Masomo mbali mbali ya kilimo chenye tija kutoka kwa wabobezi na wataalamu.</div>
                </div>
                <div class="group flex-shrink-0 mb-4 w-80 relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40  mx-auto mt-8">
                    <img src="{{ asset('img/ufundi.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Ufundi</h3>
                    </div>
                <div class="group flex-shrink-0 mb-4 w-80 relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40  mx-auto mt-8">
                    <img src="{{ asset('img/upishi.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Upishi</h3>
                </div>
                <div class="group flex-shrink-0 mb-4 w-80 relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40  mx-auto mt-8">
                    <img src="{{ asset('img/sanaa.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Sanaa</h3>
                </div>
                <div class="group flex-shrink-0 mb-4 w-80 relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40  mx-auto mt-8">
                    <img src="{{ asset('img/ujasiriamali.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Ujasiriamali</h3>
                </div>
                <div class="group flex-shrink-0 mb-4 w-80 relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40  mx-auto mt-8">
                    <img src="{{ asset('img/usaidizi.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Usaidizi</h3>
                </div>
                <div class="group flex-shrink-0 mb-4 w-80 relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40  mx-auto mt-8">
                    <img src="{{ asset('img/nyingine.jpg') }}" alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover group-hover:scale-110 transition duration-300">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                    <h3 class="z-10 mt-3 text-3xl font-bold text-white">Nyingine ...</h3>
                </div>

  
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="mawasiliano" class="bg-white py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Wasiliana Nasi
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Tuko tayari kukusaidia, wasiliana nasi kupitia njia zifuatazo
                </p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Contact Information -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Mawasiliano</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-bold text-indigo-900">Simu</p>
                                <p class="mt-1 text-gray-600">+255 754 301 349</p>
                                <p class="text-gray-600">+255 765 359 460</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-bold text-indigo-900">Barua pepe</p>
                                <p class="mt-1 text-gray-600">info@simacsol.com</p>
                                <p class="mt-1 text-gray-600">jescajo@yahoo.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-lg font-bold text-indigo-900">Mahali</p>
                                <p class="mt-1 text-gray-600">Ipogolo, Iringa</p>
                                <p class="text-gray-600">Tanzania</p>
                            </div>
                        </div>

                        <!-- Contact Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 mt-8">
                            <a href="tel:+255754301349" class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 transition duration-300">
                                <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                Piga Simu
                            </a>
                            <a href="https://wa.me/255754301349" target="_blank" class="inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-green-600 hover:bg-green-700 transition duration-300">
                                <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="h-[400px] rounded-lg overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3309.601880966453!2d35.69709607413803!3d-7.79060667731369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDcnMjYuMiJTIDM1wrA0MSc1OC44IkU!5e1!3m2!1sen!2sus!4v1739760325414!5m2!1sen!2sus"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        class="hover:scale-105 transition duration-300">   
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    
</x-layouts.appguest>

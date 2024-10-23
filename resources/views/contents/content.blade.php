<div class="flex justify-center relative">
    <div class="relative">
        <img src="{{ asset('img/ferrari-9.jpg') }}" alt="Landing Page Image" class="size-full cropped-image overlay-image">
        <div class="absolute inset-0 bg-black opacity-20 p-4 md:p-8 lg:p-12"></div> <!-- Overlay with padding -->
        
        <!-- Wrapper untuk teks agar berada di atas gambar -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center z-10 text-white">
            <h1 class="uppercase text-6xl">a one-two in cota</h1>
            <p class="text-xl flex items-center">
                discover more
                <span class="ml-2"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-white">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <polyline points="10 16 14 12 10 8" stroke="currentColor" stroke-width="2" fill="none" />
                    </svg>
                </span>    
            </p>                
        </div>
    </div>
</div>

<div class="flex justify-center relative">
    <div class="relative">
        <img src="{{ asset('img/ferrari.jpg') }}" alt="Landing Page Image" class="size-full cropped-image overlay-image">
        <div class="absolute inset-0 bg-black opacity-20 p-4 md:p-8 lg:p-12"></div> <!-- Overlay with padding -->
        
        <!-- Wrapper untuk teks agar berada di atas gambar -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center z-10 text-white">
            <h1 class="uppercase text-5xl">ferrari f80: the new suppercar</h1>
            <p class="text-xl flex items-center">
                discover more
                <span class="ml-2"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-white">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <polyline points="10 16 14 12 10 8" stroke="currentColor" stroke-width="2" fill="none" />
                    </svg>
                </span>    
            </p> 
        </div>
    </div>
</div>  

<!--video slider start-->
<section class="relative h-screen overflow-hidden">
<div class="carousel relative w-full h-full">
    <div class="carousel-item absolute inset-0 active">
        <video class="w-full h-full object-cover" autoplay loop muted>
            <source src="{{ asset('vid/Introducing the Ferrari F80 (online-video-cutter.com).mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white mt-20">
            <h2 class="text-3xl mb-4">Sport Cars</h2>
            <h1 class="text-6xl uppercase" style="font-weight: 600;">Start Your Engine</h1>
            <h2 class="text-2xl uppercase mt-8 flex items-center">
                discover ferrari line up 
                <span class="ml-2"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-white">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <polyline points="10 16 14 12 10 8" stroke="currentColor" stroke-width="2" fill="none" />
                    </svg>
                </span>
            </h2>
        </div>
        
    </div>
    <div class="carousel-item absolute inset-0">
        <video class="w-full h-full object-cover" autoplay loop muted>
            <source src="{{ asset('vid/Ferrari F8 Tributo - Official Video (online-video-cutter.com).mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white mt-20">
            <h2 class="text-3xl mb-4">Racing</h2>
            <h1 class="text-6xl uppercase" style="font-weight: 600;" >Squderia Ferrari</h1>
            <h2 class="text-2xl mt-8 flex items-center">DISCOVER 
                <span class="ml-2"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-white">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <polyline points="10 16 14 12 10 8" stroke="currentColor" stroke-width="2" fill="none" />
                    </svg>
                </span>    
            </h2>
        </div>
    </div>
    <div class="carousel-item absolute inset-0">
        <video class="w-full h-full object-cover" autoplay loop muted>
            <source src="{{ asset('vid/LaFerrari - Official video (online-video-cutter.com).mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white mt-20">
            <h2 class="text-3xl mb-4">collection</h2>
            <h1 class="text-6xl uppercase" style="font-weight: 600;">fall / winter collection</h1>
            <h2 class="text-2xl uppercase mt-8 flex items-center">discover the new selection 
                <span class="ml-2"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-white">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <polyline points="10 16 14 12 10 8" stroke="currentColor" stroke-width="2" fill="none" />
                    </svg>
                </span>
            </h2>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">
        <div class="flex space-x-8">
            <button class="w-2 h-2 bg-white rounded-full" onclick="goToSlide(0)"></button>
            <button class="w-2 h-2 bg-gray-400 rounded-full" onclick="goToSlide(1)"></button>
            <button class="w-2 h-2 bg-gray-400 rounded-full" onclick="goToSlide(2)"></button>
        </div>
    </div>
</div>
</section>

<div class="relative">
<div class="flex items-center justify-between ml-72 mr-72 w-[70%] mt-10">
    <div class="w-1/2 text-left pr-8">
        <h1 class="text-3xl font-semibold text-gray-900 mr-10 mb-6">TAILOR MADE FERRARI
            ROMA SPIDER: REFINED AND ELEGANT TECHNIQUES BRING AN INNOVATIVE CAR TO LIFE</h1>
        <p class="text-black">Ferrari presents a unique version of the Roma Spider created by the Tailor Made department: the car will be on display at the Enzo Ferrari Museum in Modena as of today as part of the 'Ferrari One of a Kind' exhibition, dedicated to the exclusive world of personalisation for the Maranello-based manufacturer.</p>
        <a href="#" class="inline-block mt-6 text-black flex item-center">Read More 
            <span class="ml-2"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-black">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                    <polyline points="10 16 14 12 10 8" stroke="currentColor" stroke-width="2" fill="none" />
                </svg>
            </span>
        </a>
    </div>

    <div class="w-1/2 pl-4">
        <div class="carousel-item-2 active">
            <img src="{{ asset('img/ferrari-3.jpg') }}" alt="Ferrari GTO 1" class="shadow-lg w-full">
        </div>
    </div>
</div>


<div>
    <div class="absolute top-1/2 left-32 z-0" id="prevBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-black">
            <polyline points="14 16 10 12 14 8" stroke="currentColor" stroke-width="2" fill="none" />
        </svg>
    </div>
    <div class="absolute top-1/2 right-32 z-0 transform -translate-y-1/2" id="nextBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-black">
            <polyline points="10 16 14 12 10 8" stroke="currentColor" stroke-width="2" fill="none" />
        </svg>
    </div>
</div>
</div>

<div class="flex flex-wrap">
<!-- 1 Banner Item -->
<div class="w-full md:w-1/2 bg-gradient-to-r from-black to-gray-900 text-white">
    <a href="https://www.ferrari.com/en-EN/magazine/articles/legacy-tour-2024-celebrating-the-gto?from=GWpost_MAGAZINE" target="_self" class="block h-full">
        <div class="relative w-full aspect-square overflow-hidden">
            <!-- Gambar sebagai background -->
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 transform hover:scale-150" style="background-image: url('{{ asset('img/ferrari-6.jpg') }}');"></div>
            <!-- Teks di bawah tanpa overlay -->
            <div class="absolute bottom-0 w-full p-4 text-center">
                <h5 class="text-sm opacity-80">collection</h5>
                <h3 class="text-2xl uppercase mt-2">Evolving Volumes</h3>
                <div class="mt-4">
                    <span class="inline-flex items-center space-x-2 text-lg font-semibold hover:underline">
                        <span>EXPLORE</span>
                        <svg viewBox="0 0 8 16" class="w-2 h-4" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>

<!-- 2 Banner Item -->
<div class="w-full md:w-1/2 bg-gradient-to-r from-black to-gray-900 text-white">
    <a href="https://www.ferrari.com/en-EN/magazine/articles/legacy-tour-2024-celebrating-the-gto?from=GWpost_MAGAZINE" target="_self" class="block h-full">
        <div class="relative w-full aspect-square overflow-hidden">
            <!-- Gambar sebagai background -->
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 transform hover:scale-150" style="background-image: url('{{ asset('img/ferrari-4.jpg') }}');"></div>
            <!-- Teks di bawah tanpa overlay -->
            <div class="absolute bottom-0 w-full p-4 text-center">
                <h5 class="text-sm opacity-80">Magazine</h5>
                <h3 class="text-2xl uppercase mt-2">Celebrating the GTO</h3>
                <div class="mt-4">
                    <span class="inline-flex items-center space-x-2 text-lg font-semibold hover:underline">
                        <span>DISCOVER MORE</span>
                        <svg viewBox="0 0 8 16" class="w-2 h-4" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </a>
</div> 

{{-- 3 Banner Item --}}
<div class="w-full md:w-1/2 bg-gradient-to-r from-black to-gray-900 text-white">
    <a href="https://www.ferrari.com/en-EN/magazine/articles/legacy-tour-2024-celebrating-the-gto?from=GWpost_MAGAZINE" target="_self" class="block h-full">
        <div class="relative w-full aspect-square overflow-hidden">
            <!-- Gambar sebagai background -->
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 transform hover:scale-150" style="background-image: url('{{ asset('img/ferrari-5.jpg') }}');"></div>
            <!-- Teks di bawah tanpa overlay -->
            <div class="absolute bottom-0 w-full p-4 text-center">
                <h5 class="text-sm opacity-80">Finali Mondiali 2024</h5>
                <h3 class="text-2xl uppercase mt-2">Imola</h3>
                <div class="mt-4">
                    <span class="inline-flex items-center space-x-2 text-lg font-semibold hover:underline">
                        <span>DISCOVER MORE</span>
                        <svg viewBox="0 0 8 16" class="w-2 h-4" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>

{{-- 4 Banner Item --}}
<div class="w-full md:w-1/2 bg-gradient-to-r from-black to-gray-900 text-white">
    <a href="https://www.ferrari.com/en-EN/magazine/articles/legacy-tour-2024-celebrating-the-gto?from=GWpost_MAGAZINE" target="_self" class="block h-full">
        <div class="relative w-full aspect-square overflow-hidden">
            <!-- Gambar sebagai background -->
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 transform hover:scale-150" style="background-image: url('{{ asset('img/ferrari-7.jpg') }}');"></div>
            <!-- Teks di bawah tanpa overlay -->
            <div class="absolute bottom-0 w-full p-4 text-center">
                <h5 class="text-sm opacity-80">Ferrari Approved</h5>
                <h3 class="text-2xl uppercase mt-2">Pre-owned</h3>
                <div class="mt-4">
                    <span class="inline-flex items-center space-x-2 text-lg font-semibold hover:underline">
                        <span>DISCOVER MORE</span>
                        <svg viewBox="0 0 8 16" class="w-2 h-4" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>  

{{-- 5 Banner Item --}}
<div class="w-full md:w-1/2 bg-gradient-to-r from-black to-gray-900 text-white">
    <a href="https://www.ferrari.com/en-EN/magazine/articles/legacy-tour-2024-celebrating-the-gto?from=GWpost_MAGAZINE" target="_self" class="block h-full">
        <div class="relative w-full aspect-square overflow-hidden">
            <!-- Gambar sebagai background -->
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 transform hover:scale-150" style="background-image: url('{{ asset('img/ferrari-10.jpg') }}');"></div>
            <!-- Teks di bawah tanpa overlay -->
            <div class="absolute bottom-0 w-full p-4 text-center">
                <h5 class="text-sm opacity-80">Ferrari Museum</h5>
                <h3 class="text-2xl uppercase mt-2">One ofa kind</h3>
                <div class="mt-4">
                    <span class="inline-flex items-center space-x-2 text-lg font-semibold hover:underline">
                        <span>DISCOVER MORE</span>
                        <svg viewBox="0 0 8 16" class="w-2 h-4" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>

{{-- 6 Banner Item --}}
<div class="w-full md:w-1/2 bg-gradient-to-r from-black to-gray-900 text-white">
    <a href="https://www.ferrari.com/en-EN/magazine/articles/legacy-tour-2024-celebrating-the-gto?from=GWpost_MAGAZINE" target="_self" class="block h-full">
        <div class="relative w-full aspect-square overflow-hidden">
            <!-- Gambar sebagai background -->
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 transform hover:scale-150" style="background-image: url('{{ asset('img/ferrari-8.jpg') }}');"></div>
            <!-- Teks di bawah tanpa overlay -->
            <div class="absolute bottom-0 w-full p-4 text-center">
                <h5 class="text-sm opacity-80">Sports Car</h5>
                <h3 class="text-2xl uppercase mt-2">Past Models</h3>
                <div class="mt-4">
                    <span class="inline-flex items-center space-x-2 text-lg font-semibold hover:underline">
                        <span>DISCOVER MORE</span>
                        <svg viewBox="0 0 8 16" class="w-2 h-4" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.268 9.547L0 16l4-8-4-8 7.268 6.453C7.715 6.82 8 7.377 8 8c0 .623-.285 1.18-.732 1.547z"></path>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>
   

<div class="bg-gray-800 py-20 w-full">
    <div class="text-center">
        <div class="text-2xl font-semibold mb-2 text-white">Newsletter</div>
        <div class="text-white mb-4">Stay up to date with the latest news from the world of Ferrari.</div>
        <div>
            <button class="bg-red-600 text-white font-semibold py-3 px-6 text-lg rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" 
                type="button"
                data-event-module-slug="footer" 
                data-event-type="CTA" 
                data-event-label="newsletter" 
                data-eventcat="GW_NWSL" 
                data-eventtit="newsletter" 
                data-eventlbl="open">
                Subscribe
            </button>
        </div>
    </div>
</div>

<style>
.carousel-item {
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.carousel-item.active {
    opacity: 1;
}
</style>

<script>
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-item');
const totalSlides = slides.length;
let slideInterval;

// Function to show the active slide
function showSlide(index) {
slides.forEach((slide, i) => {
slide.classList.remove('active');
if (i === index) {
    slide.classList.add('active');
}
});
updateDots(index);
currentSlide = index;
}

// Function to update the dot indicator
function updateDots(index) {
const dots = document.querySelectorAll('button');
dots.forEach((dot, i) => {
dot.classList.remove('bg-white');
dot.classList.add('bg-gray-400');
if (i === index) {
    dot.classList.remove('bg-gray-400');
    dot.classList.add('bg-white');
}
});
}

// Function to go to specific slide
function goToSlide(index) {
clearInterval(slideInterval);
showSlide(index);
startAutoSlide();
}

// Start auto sliding
function startAutoSlide() {
slideInterval = setInterval(() => {
currentSlide = (currentSlide + 1) % totalSlides;
showSlide(currentSlide);
}, 5000); // Auto slide setiap 5 detik
}

// Start the carousel
startAutoSlide();
</script>

    
</body>
</html>

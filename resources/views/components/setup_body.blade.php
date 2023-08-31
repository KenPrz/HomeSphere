<div class="flex flex-col justify-center items-center h-auto w-full bg-white rounded-3xl shadow-lg p-5 md:p-10 mt-32 md:mt-32 mx-5 md:mx-32 mb-10 md:mb-64">
    <div class="text-xl md:text-2xl font-bold my-6 md:my-12">
        <h1>Start Your Home Automation Journey</h1>
    </div>
    <div class="text-lg md:text-xl font-semibold mb-6 md:mb-12">
        <h2>Choose your home automation setup</h2>
    </div>
    <div class="flex flex-col md:flex-row w-full md:w-4/5 h-auto md:h-72 justify-center md:justify-between">
        <button onclick="toggleElementVisibility('createHomeModal')" class="w-full md:w-2/3 m-2 md:m-3 h-16 md:h-1/2 bg-blue-900 hover:bg-blue-800 text-white text-lg md:text-xl font-extrabold py-2 rounded-3xl transition-colors flex items-center justify-center">
            <span class="mr-2">Create Home</span>
            <img src="{{ asset('img-assets/vectors/House.svg') }}" alt="arrow" class="h-7 md:h-9 w-auto">
        </button>
        <button onclick="toggleElementVisibility('joinHomeModal')"class="w-full md:w-2/3 m-2 md:m-3 h-16 md:h-1/2 bg-green-400 hover:bg-green-300 text-white text-lg md:text-xl py-2 rounded-3xl transition-colors flex items-center justify-center">
            <span class="mr-2">Join Home</span>
            <img src="{{ asset('img-assets/vectors/join_home.svg') }}" alt="arrow" class="h-7 md:h-9 w-auto">
        </button>
    </div>
    <div class="text-sm md:text-md font-bold mt-4 md:mt-0">
        <p>Not sure? <a class="text-blue-800 hover:underline" href="#">Learn More</a></p>
    </div>
</div>

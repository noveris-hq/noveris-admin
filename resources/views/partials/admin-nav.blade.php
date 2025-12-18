<nav class="bg-gray-600 dark:bg-gray-800 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('dashboard') }}" class="text-xl font-bold">Noveris Admin</a>
            </div>
             <div class="flex items-center space-x-4">
                 <!-- <a href="{{ url('/dashboard') }}" class="hover:bg-blue-700 px-3 py-2 rounded-md text-sm font-medium">Admin -->
                 <!--     Panel</a> -->
                 <a href="{{ route('profile') }}" class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Min profil</a>
                 <form method="POST" action="{{ route('logout') }}" class="inline ">
                     @csrf
                     <button type="submit"
                         class="hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium hover:cursor-pointer">Logga ut</button>
                 </form>
             </div>
        </div>
    </div>
</nav>

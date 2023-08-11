<div class="flex flex-col items-center justify-center">
    <div class="header">
        <h1 class="text-xl font-bold">My Profile</h1>
    </div>
    @if ($user->profile_image)
        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image"
            class="h-48 w-48 rounded-full p-4">
    @else
        <img src="{{ asset('img-assets/default_avatar.png') }}" alt="Default Image"
            class="h-48 w-48 rounded-full p-4">
    @endif
    @error('image')
        <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror
</div>
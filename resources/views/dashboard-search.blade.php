<x-app-layout>
    <x-slot name="header" class="d-flex justify-content-between">
        <div class="d-flex">
            @if(isset(Auth::user()->avatar))
                <img class="user-dashboard-avatars" src="{{ asset('storage/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar) }}" alt="">
            @endif
            <div class="user-dashboard-name">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ \Illuminate\Support\Facades\Auth::user()->name }}
                </h2>

                <p class="user-dashboard-locality-and-school">
                    <span class="user-dashboard-locality">{{\Illuminate\Support\Facades\Auth::user()->locality}}</span>
                    <span class="user-dashboard-school">{{\Illuminate\Support\Facades\Auth::user()->school}}</span>
                    <span class="user-dashboard-class">{{\Illuminate\Support\Facades\Auth::user()->class}}</span>
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">

                @if(isset($user))
                    <div class="d-flex mb-2">
                        @if(isset(Auth::user()->avatar))
                            @if(isset($user->avatar))
                                <img class="user-dashboard-avatars" src="{{ asset('storage/avatars/'.$user->avatar) }}" alt="" style="width: 70px; height: 70px;">
                            @endif
                        @endif
                        <div class="user-dashboard-name">
                            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                <a href="{{route('profileSingle', $user->id)}}">
                                    {{ $user->name }}
                                </a>
                            </h2>

                            <p class="user-dashboard-locality-and-school">
                                <span class="user-dashboard-locality">{{$user->locality}}</span>
                                <span class="user-dashboard-school">{{$user->school}}</span>
                                <span class="user-dashboard-class">{{$user->class}}</span>
                            </p>
                        </div>
                    </div>
                @else
                    <div class="d-flex mb-2">
                        <h2>Ничего не найдено</h2>
                    </div>
                @endif

                <div class="d-flex">

                    <a class="nav-link" href="{{route('dashboard')}}">Назад</a>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header" class="d-flex justify-content-between">
        <div class="d-flex">
            @if(isset(Auth::user()->avatar))
                <img class="user-dashboard-avatars" src="{{ asset('storage/avatars/'.\Illuminate\Support\Facades\Auth::user()->avatar) }}" alt="">
            @endif
            <div class="user-dashboard-name">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ $user->name }}
                </h2>

                <p class="user-dashboard-locality-and-school">
                    <span class="user-dashboard-locality">{{$user->locality}}</span>
                    <span class="user-dashboard-school">{{$user->school}}</span>
                    <span class="user-dashboard-class">{{$user->class}}</span>
                </p>
            </div>
        </div>
        

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">

                <div class="tabs">
                    <div class="tab d-flex">
                        <button class="tablinks" onclick="openCity(event, 'Tail')">Фаьлг-дувцар</button>
                        <button class="tablinks" onclick="openCity(event, 'Poesy')">Байт</button>
                        <button class="tablinks" onclick="openCity(event, 'Kic')">Киц</button>
                    </div>






                        <!-- Tab content -->
                        <div id="Tail" class="tabcontent active">
                            @if(isset($posts))
                                @foreach($posts as $post)
                                    <div class="dashboard-post bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                        <div class="dashboard-post-img">
                                            <img src="{{ asset('storage/images/'.$post->image_main) }}" alt="">
                                        </div>
                                        <div class="dashboard-post-text">
                                            <h2>{{$post->title}}</h2>
                                            <p>{{$post->lead}}</p>
                                        </div>
                                    </div>
                              @endforeach
                                    <div>
                                        {{$posts->links('pagination::semantic-ui')}}
                                    </div>
                            @endif
                        </div>



                    <div id="Poesy" class="tabcontent">
                        @if(isset($poesyItems))
                            @foreach($poesyItems as $poesy)
                                <div class="dashboard-post bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <h2>{{$poesy->title}}</h2>
                                    <p>{!! $poesy->content !!}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    @if(isset($kicash))
                    <div id="Kic" class="tabcontent dashboard-kicash ">

                            <div class="d-flex flex-column">
                                <div class="dashboard-kicash-all">
                                    @foreach($kicash as $kic)
                                        <div class="dashboard-kica bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                            <h2>{{$kic->title}}</h2>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mt-2 d-flex justify-content-center">
                                    {{$kicash->links("pagination::bootstrap-4")}}
                                </div>
                            </div>
                    </div>


                    @endif
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

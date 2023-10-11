
@extends('layouts.app')

@section('content')
    <div className="container bg-gray-900">
        <div class="container mx-auto shadow-lg rounded-lg">
            <!-- headaer -->
            <div class="px-5 py-5 flex justify-between items-center bg-white border-b-2">
                <div class="font-semibold text-2xl">Anophel Chat Room</div>
                <div class="w-1/2">
                    <input
                        type="text"
                        name=""
                        id=""
                        placeholder="search IRL"
                        class="rounded-2xl bg-gray-100 py-3 px-5 w-full"
                    />
                </div>
                <div class="relative flex items-center p-3">
                    <div class="h-10 w-10 rounded-full  p-0.5 shadow-lg shadow-zinc-800/5 ring-1  backdrop-blur bg-zinc-800/90 ring-white/10">
                        <a aria-label="Home" class="pointer-events-auto">
                            <img sizes="2.25rem" src="https://avatars.githubusercontent.com/u/53135000?v=4" alt="https://avatars.githubusercontent.com/u/53135000?v=4" width="512" height="512" decoding="async" data-nimg="1" class="rounded-full bg-zinc-100 object-cover h-9 w-9"></a></div>
                    <span class="absolute w-3 h-3 bg-green-600 rounded-full top-3"></span>
                </div>

            </div>
            <!-- end header -->
            <!-- Chatting -->
            <div class="flex flex-row justify-between bg-white">
                <!-- chat list -->
                <div class="flex flex-col w-2/5 border-r-2 overflow-y-auto">
                    <!-- search compt -->
                    <div class="border-b-2 py-4 px-2">
                        <input
                            type="text"
                            placeholder="search chatting"
                            class="py-2 px-2 border-2 border-gray-200 rounded-2xl w-full"
                        />
                    </div>
                    <!-- end search compt -->
                    <!-- user list -->
                    <div
                        class="flex flex-row py-4 px-2 justify-center items-center border-b-2"
                    >
                        <div class="w-1/4">
                            <img
                                src="https://avatars.githubusercontent.com/u/53135000?v=4"
                                class="object-cover h-12 w-12 rounded-full"
                                alt=""
                            />
                        </div>
                        <div class="w-full">
                            <div class="text-lg font-semibold">Ali</div>
                            <span class="text-gray-500">Pick me at 9:00 Am</span>
                        </div>
                    </div>
                    <div class="flex flex-row py-4 px-2 items-center border-b-2">
                        <div class="w-1/4 relative flex items-center">
                            <img
                                src="https://avatars.githubusercontent.com/u/53135000?v=4"
                                class="object-cover h-12 w-12 rounded-full"
                                alt=""
                            />
                            <span class="absolute w-3 h-3 bg-green-600 rounded-full -top-0.5"></span>
                        </div>
                        <div class="w-full">
                            <div class="text-lg font-semibold">Mohammad Abdorrahmani</div>
                            <span class="text-gray-500">Hi Mohammad, Welcome</span>
                        </div>
                    </div>


                    <!-- end user list -->
                </div>
                <!-- end chat list -->
                <!-- message -->
                <div class="w-full px-5 flex flex-col justify-between">
                    <div class="flex flex-col mt-5">
                        <chat-messages :messages="messages"></chat-messages>

                    </div>
{{--                        form--}}

                    <div class="py-5">
                        <chat-form v-on:messagesent="addMessage"
                                   :user="{{ Auth::user() }}"></chat-form>

                    </div>
                </div>
                <!-- end message -->
                <div class="w-2/5 border-l-2 px-5">
                    <div class="flex flex-col">
                        <div class="font-semibold text-xl py-4">Anophel Group</div>
                        <img
                            src="https://anophel.com/build/assets/anophel.com-31a2ac80.png"
                            class="object-cover rounded-xl h-64"
                            alt=""
                        />
                        <div class="font-semibold py-4">Created 22 Sep 2021</div>
                        <div class="font-light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt,
                            perspiciatis!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



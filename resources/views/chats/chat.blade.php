
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
                        <div class="flex justify-end mb-4">
                            <div
                                class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white"
                            >
                                Welcome to group everyone !
                            </div>
                            <img
                                src="https://avatars.githubusercontent.com/u/53135000?v=4"
                                class="object-cover h-8 w-8 rounded-full"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-start mb-4">
                            <img
                                src="https://avatars.githubusercontent.com/u/53135000?v=4"
                                class="object-cover h-8 w-8 rounded-full"
                                alt=""
                            />
                            <div
                                class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white"
                            >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                                at praesentium, aut ullam delectus odio error sit rem. Architecto
                                nulla doloribus laborum illo rem enim dolor odio saepe,
                                consequatur quas?
                            </div>
                        </div>
                        <div class="flex justify-end mb-4">
                            <div>
                                <div
                                    class="mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white"
                                >
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Magnam, repudiandae.
                                </div>

                                <div
                                    class="mt-4 mr-2 py-3 px-4 bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl text-white"
                                >
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Debitis, reiciendis!
                                </div>
                            </div>
                            <img
                                src="https://avatars.githubusercontent.com/u/53135000?v=4"
                                class="object-cover h-8 w-8 rounded-full"
                                alt=""
                            />
                        </div>
                        <div class="flex justify-start mb-4">
                            <img
                                src="https://avatars.githubusercontent.com/u/53135000?v=4"
                                class="object-cover h-8 w-8 rounded-full"
                                alt=""
                            />
                            <div
                                class="ml-2 py-3 px-4 bg-gray-400 rounded-br-3xl rounded-tr-3xl rounded-tl-xl text-white"
                            >
                                happy holiday guys!
                            </div>
                        </div>
                    </div>
                    <div class="py-5">
                        <div class="flex items-center justify-between w-full p-3 border-t border-gray-300">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-500" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                </svg>
                            </button>

                            <input type="text" placeholder="Message"
                                   class="block w-full py-2 pl-4 mx-3 bg-gray-100 rounded-full outline-none focus:text-gray-700"
                                   name="message" required />
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                </svg>
                            </button>
                            <button type="submit">
                                <svg class="w-5 h-5 text-gray-500 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
                                </svg>
                            </button>
                        </div>
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



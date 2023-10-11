<template>
    <ul class="chat">
        <li class="left clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
                </div>
                <p>
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul>

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
</template>

<script>
export default {
    props: ['messages']
};
</script>

<x-layout.guest>
    <div class="">
        <div class="flex flex-row min-h-screen bg-neutral-200">
            <div class="w-[35rem] bg-white p-5 rounded-md flex-col flex gap-y-5 ">
                <div class="text-xl font-semibold tracking-wider text-teal-500">Create Post</div>
                <form action="/create-post" method="POST" class="flex-col flex gap-y-5">
                    @csrf
                    <input name="title" type="text" placeholder="Post Title"
                           class="border rounded-md py-2 px-1 text-xs focus:border-0">
                    <input name="body" placeholder="body content"
                           class="border rounded-md py-2 px-1 text-xs focus:border-0">
                    <button class="max-w-max bg-blue-500 text-white font-semibold px-2 py-3 rounded-md text-xs">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout.guest>

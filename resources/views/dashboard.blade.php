<x-layouts.app>
    <div>dashboard</div>
    <a href="{{ route('logout') }}">Logout</a>

    <div class="border border-gray-700 w-7/12 mx-auto p-3 space-y-3 rounded-md">
        <span>Create New</span>
        <form action="/create-post" method="POST">
            @csrf
            <div class=" space-y-3">
                <input type="text" name="title" placeholder="Title" class="border border-blue-200">
                <textarea class="border border-blue-200" name="body" placeholder="Body"></textarea>
                <button class="bg-zinc-200 rounded-md p-1">Save Post</button>
            </div>
        </form>

    </div>

    <div class="w-full flex flex-col h-auto">
        <div class="text-2xl">
            All Posts
        </div>
        <div class="w-full h-auto">
            @foreach($posts as $post)
                <div class="flex flex-col border border-amber-100 rounded-lg w-1/2">
                    <div class="">{{$post->title}}</div>
                    <div class="">{{$post->body}}</div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>

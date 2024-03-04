<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .post-card {
            transition: transform 0.3s ease-in-out;
        }

        .post-card:hover {
            transform: scale(1.02);
        }
    </style>
</head>

<body class="bg-gradient-to-r from-blue-500 to-purple-600">
    <div class="container mx-auto mt-10">
        <!-- Heading -->
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-8 text-white">3 PM To 4 PM</h1>

        <!-- Content -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="col-span-1 bg-white rounded-lg shadow-lg p-6 ml-4">
                <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-800">About Myself</h2>
                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam libero, est
                    reprehenderit aliquam voluptatibus totam in odit mollitia alias eaque quam minus temporibus maiores
                    soluta quo doloremque dolorem quae sunt!Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ullam libero, est reprehenderit aliquam voluptatibus totam in
                    odit mollitia alias eaque quam minus temporibus maiores soluta quo doloremque dolorem quae
                    sunt!Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam libero, est reprehenderit
                    aliquam voluptatibus totam in
                    odit mollitia alias eaque quam minus temporibus maiores soluta quo doloremque dolorem quae
                    sunt!Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam libero, est reprehenderit
                    aliquam voluptatibus totam in
                    odit mollitia alias eaque quam minus temporibus maiores soluta quo doloremque dolorem quae sunt!</p>
            </div>

            <div class="col-span-2 grid grid-cols-1 md:grid-cols-3 gap-4 pr-4">
                @foreach($posts as $post)
                <div class="bg-white rounded-lg shadow-lg p-6 post-card">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-auto rounded-lg">
                    <div class="mt-4">
                        <h2 class="text-xl font-semibold text-gray-800">{{ $post->title }}</h2>
                        <p class="text-gray-600">{{ $post->description }}</p>
                        <p class="text-gray-500">Posted by: <span class="font-semibold text-blue-500">{{
                                $post->user->name }}</span></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination Links -->
        <div class="container mx-auto mt-8 text-center px-6">
            {{ $posts->links() }}
        </div>
    </div>

    <!-- GitHub Repo Link -->
    <div class="container mx-auto mt-8 text-center mb-6">
        <a href="https://github.com/saakiiib"
            class="text-lg md:text-xl text-green-600 hover:text-green-800 inline-block bg-white py-2 px-4 rounded-lg shadow-lg transition duration-300">GitHub
            Repo</a>
    </div>
</body>

</html>
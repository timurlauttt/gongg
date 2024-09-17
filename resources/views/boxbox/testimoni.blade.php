<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimonial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tracking-wide { letter-spacing: 0.05em; }
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
    </style>
</head>

<body class="bg-gray-100">
    @extends('layouts.navbar')
    @extends('layouts.footer')

    <!-- Layout mirip FAQ -->
    <div class="h-screen max-w-5xl px-2 py-3 mx-auto mt-32 tracking-wide md:px-4 md:mt-26">
        <!-- Title -->
        <div class="flex justify-center text-3xl text-gray-800">Testimoni</div>

        <!-- Testimonial Section -->
        <div class="testimonial-grid py-8 text-lg leading-6 text-gray-800">
            <!-- Testimonial 1 -->
            <div class="relative p-6 bg-gray-600 text-white rounded-xl hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold tracking-wide capitalize">Review title</h1>
                    <div class="stars flex gap-2">
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                    </div>
                </div>
                <p class="mt-4 tracking-widest">
                    There is no word to refer to this platform. It’s very helpful for those who love to be future builders.
                </p>
                <div class="flex items-center gap-2 mt-4">
                    <div class="avatar w-12 h-12 shadow rounded-full overflow-hidden">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSSugC5bvVZjZwI4zQTUk9KRJF8Pfw4ePLXQ1uKhX0QaeptdJg5RwIct3JvOnOajfiH4nKGPZx5LzIyLUjzmmRZB4Nm2RHWE2o51VHLEg" alt="" class="object-cover w-full h-full">
                    </div>
                    <div class="flex-1">
                        <h2 class="font-bold text-lg tracking-wide">David J Malan</h2>
                        <span class="font-light text-sm text-gray-300">University Teacher</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="relative p-6 bg-gray-600 text-white rounded-xl hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold tracking-wide capitalize">Review title</h1>
                    <div class="stars flex gap-2">
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                    </div>
                </div>
                <p class="mt-4 tracking-widest">
                    There is no word to refer to this platform. It’s very helpful for those who love to be future builders.
                </p>
                <div class="flex items-center gap-2 mt-4">
                    <div class="avatar w-12 h-12 shadow rounded-full overflow-hidden">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSSugC5bvVZjZwI4zQTUk9KRJF8Pfw4ePLXQ1uKhX0QaeptdJg5RwIct3JvOnOajfiH4nKGPZx5LzIyLUjzmmRZB4Nm2RHWE2o51VHLEg" alt="" class="object-cover w-full h-full">
                    </div>
                    <div class="flex-1">
                        <h2 class="font-bold text-lg tracking-wide">David J Malan</h2>
                        <span class="font-light text-sm text-gray-300">University Teacher</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="relative p-6 bg-gray-600 text-white rounded-xl hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold tracking-wide capitalize">Review title</h1>
                    <div class="stars flex gap-2">
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                    </div>
                </div>
                <p class="mt-4 tracking-widest">
                    There is no word to refer to this platform. It’s very helpful for those who love to be future builders.
                </p>
                <div class="flex items-center gap-2 mt-4">
                    <div class="avatar w-12 h-12 shadow rounded-full overflow-hidden">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSSugC5bvVZjZwI4zQTUk9KRJF8Pfw4ePLXQ1uKhX0QaeptdJg5RwIct3JvOnOajfiH4nKGPZx5LzIyLUjzmmRZB4Nm2RHWE2o51VHLEg" alt="" class="object-cover w-full h-full">
                    </div>
                    <div class="flex-1">
                        <h2 class="font-bold text-lg tracking-wide">David J Malan</h2>
                        <span class="font-light text-sm text-gray-300">University Teacher</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="relative p-6 bg-gray-600 text-white rounded-xl hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold tracking-wide capitalize">Review title</h1>
                    <div class="stars flex gap-2">
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                    </div>
                </div>
                <p class="mt-4 tracking-widest">
                    There is no word to refer to this platform. It’s very helpful for those who love to be future builders.
                </p>
                <div class="flex items-center gap-2 mt-4">
                    <div class="avatar w-12 h-12 shadow rounded-full overflow-hidden">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSSugC5bvVZjZwI4zQTUk9KRJF8Pfw4ePLXQ1uKhX0QaeptdJg5RwIct3JvOnOajfiH4nKGPZx5LzIyLUjzmmRZB4Nm2RHWE2o51VHLEg" alt="" class="object-cover w-full h-full">
                    </div>
                    <div class="flex-1">
                        <h2 class="font-bold text-lg tracking-wide">David J Malan</h2>
                        <span class="font-light text-sm text-gray-300">University Teacher</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 5 -->
            <div class="relative p-6 bg-gray-600 text-white rounded-xl hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold tracking-wide capitalize">Review title</h1>
                    <div class="stars flex gap-2">
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                    </div>
                </div>
                <p class="mt-4 tracking-widest">
                    There is no word to refer to this platform. It’s very helpful for those who love to be future builders.
                </p>
                <div class="flex items-center gap-2 mt-4">
                    <div class="avatar w-12 h-12 shadow rounded-full overflow-hidden">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSSugC5bvVZjZwI4zQTUk9KRJF8Pfw4ePLXQ1uKhX0QaeptdJg5RwIct3JvOnOajfiH4nKGPZx5LzIyLUjzmmRZB4Nm2RHWE2o51VHLEg" alt="" class="object-cover w-full h-full">
                    </div>
                    <div class="flex-1">
                        <h2 class="font-bold text-lg tracking-wide">David J Malan</h2>
                        <span class="font-light text-sm text-gray-300">University Teacher</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial 6 -->
            <div class="relative p-6 bg-gray-600 text-white rounded-xl hover:shadow-2xl">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold tracking-wide capitalize">Review title</h1>
                    <div class="stars flex gap-2">
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                        <i class="bi bi-star text-2xl text-yellow-400"></i>
                    </div>
                </div>
                <p class="mt-4 tracking-widest">
                    There is no word to refer to this platform. It’s very helpful for those who love to be future builders.
                </p>
                <div class="flex items-center gap-2 mt-4">
                    <div class="avatar w-12 h-12 shadow rounded-full overflow-hidden">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSSugC5bvVZjZwI4zQTUk9KRJF8Pfw4ePLXQ1uKhX0QaeptdJg5RwIct3JvOnOajfiH4nKGPZx5LzIyLUjzmmRZB4Nm2RHWE2o51VHLEg" alt="" class="object-cover w-full h-full">
                    </div>
                    <div class="flex-1">
                        <h2 class="font-bold text-lg tracking-wide">David J Malan</h2>
                        <span class="font-light text-sm text-gray-300">University Teacher</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

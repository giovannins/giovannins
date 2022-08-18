<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $_ENV['APP_NAME'] }} About</title>
</head>

<body class="bg-zinc-800 text-white">
    @include('layouts.navbar')

    <main>
        <div class="p-3 mx-2 sm:mx-4">
            <div class="flex flex-col sm:flex-row ">
                <div class="basis-1/2 border rounded p-6 m-1">
                    <h1 class="text-4xl">About me</h1>
                    <div class="text-lg p-2 text-justify">
                        <p class="p-2">
                            Hello, I am Giovanni Neves Sadauscas, {{ $age }}, if you want to use an acronym,
                            GNS.
                        </p>
                        <p class="p-2">
                            I am passionate about software and open-source systems. <span title="What a defeat">Yes, I
                                use
                                Linux (BTW, I use Arch)</span>
                        </p>
                        <p class="p-2">

                        </p>
                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="border rounded p-6 m-1">
                        <h1 class="text-3xl">Useful links</h1>
                        <div class="md:text-lg text-base p-2 text-justify">
                            <p class="p-2">
                                <i class="fa-brands fa-linkedin"></i>
                                <a href="https://www.linkedin.com/in/giovanni-neves-sadauscas/" target="_blank"
                                    class="text-blue-300 hover:underline" title="Social media for professionals">
                                    LinkedIn
                                </a>
                            </p>
                            <p class="p-2">
                                <i class="fa-brands fa-gitlab"></i>
                                <a href="https://gitlab.com/giovanni_ns" target="_blank"
                                    class="text-blue-300 hover:underline" title="Here is where I save my code">
                                    GitLab
                                </a>
                            </p>
                            <p class="p-2">
                                <i class="fa-solid fa-at"></i>
                                <a href="mailto:giovannins@giovannins.xyz" class="text-blue-300 hover:underline"
                                    title="Very creative">
                                    giovannins@giovannins.xyz
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 mx-2 sm:mx-4">
            <div class="flex flex-col sm:flex-row">
                <div class="basis-2/3">
                    <div class="border rounded p-6 m-1">
                        <h1 class="text-4xl">Professional experience</h1>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>

@extends('layout')
@section('content')
    <main>
        <div class="p-3 mx-2 sm:mx-4">
            <div class="flex flex-col sm:flex-row ">
                <div class="basis-1/2 border rounded p-6 m-1">
                    <h1 class="text-4xl">About me</h1>
                    <div class="text-lg p-2">
                        <p class="p-2">
                            Hello, I am Giovanni Neves Sadauscas, {{ $age }}, if you want to use an acronym,
                            GNS.
                        </p>
                        <p class="p-2">
                            I am passionate about software and open-source systems. <span title="What a defeat">Yes, I
                                use
                                Linux (by the way, I used to use Arch! Now I use OpenSUSE)</span>
                        </p>
                        <p class="p-2">

                        </p>
                    </div>
                </div>
                <div class="basis-1/4">
                    <div class="border rounded p-4 m-1">
                        <h1 class="text-3xl">Useful links</h1>
                        <div class="md:text-lg text-base p-2">
                            <p class="p-2">
                                <i class="fa-brands fa-linkedin"></i>
                                <a href="https://www.linkedin.com/in/giovanni-neves-sadauscas/" target="_blank"
                                    class="text-blue-400 hover:underline hover:text-blue-600 transition"
                                    title="Social media for professionals">
                                    LinkedIn
                                </a>
                            </p>
                            <p class="p-2">
                                <i class="fa-brands fa-gitlab"></i>
                                <a href="https://gitlab.com/giovanni_ns" target="_blank"
                                    class="text-blue-400 hover:underline hover:text-blue-600 transition"
                                    title="Here is where I save my code">
                                    GitLab
                                </a>
                            </p>
                            <p class="p-2">
                                <i class="fa-solid fa-at"></i>
                                <a href="mailto:giovannins@giovannins.xyz"
                                    class="text-blue-400 hover:underline hover:text-blue-600 transition"
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
                    <div class="border rounded md:p-6 p-3 m-1">
                        <h1 class="text-4xl">Professional experience</h1>
                        <h2 class="text-base text-gray-400">where I worked, that I used to do</h2>

                        <div class="flex flex-col p-3">
                            <div class="border rounded md:p-6 p-3 m-1 w-full">
                                <h3 class="text-lg"><a href="https://www.partnervision.com.br/"
                                        class="hover:text-blue-600 transition" target="_blank">
                                        Partnervision
                                    </a>
                                    <span class="text-xs ml-2">current</span>
                                </h3>
                                <article>
                                    <p class=p-2>
                                        I now work at Partnervision as a PTC software implementer and PTC Windchill
                                        consultant.
                                    </p>
                                    <ul class="list-disc list-inside m-3">
                                        <li class="p-1">
                                            Support, installation, implementation, migration and technical consultant for
                                            PLM Windchill;
                                        </li>
                                        <li class="p-1">
                                            Internal software development using NextJS and PostgreSQL technologies;
                                            <p class="lg:indent-12 indent-6 text-gray-400">
                                                Forecast dashboard for sales improvement and focus using the MEDDIC
                                                method.
                                            </p>
                                        </li>
                                        <li class="p-1">
                                            Creation of custom CSS for PTC Thingworx and Vulforia.
                                        </li>
                                    </ul>
                                </article>
                            </div>
                            <div class="border rounded md:p-6 p-3 m-1 w-full">
                                <h3 class="text-lg"><a href="https://www.guerreirosgames.com.br/"
                                        class="hover:text-blue-600 transition" target="_blank">Guerreiros
                                        Games</a></h3>
                                <article>
                                    <p class=p-2>
                                        Developing PHP API handle the Android Application
                                    </p>
                                    <ul class="list-disc list-inside m-3">
                                        <li class="p-1">
                                            Administrative system in PHP with MySQL;
                                            <p class="lg:indent-12 indent-6 text-gray-400">System for user control and order of services.</p>
                                        </li>
                                        <li class="p-1">
                                            API development in PHP;
                                            <p class="lg:indent-12 indent-6 text-gray-400">Access and creation of work orders.</p>
                                        </li>
                                        <li class="p-1">
                                            Java Android Development.
                                            <p class="lg:indent-12 indent-6 text-gray-400">Application to manage the administrative panel.</p>
                                        </li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

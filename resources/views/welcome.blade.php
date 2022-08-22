@extends('layout')
@section('content')
    <main>
        <div class="p-3 mx-2 sm:mx-4">
            <div class="flex flex-col sm:flex-row">
                <div class="basis-1/2 border rounded p-6 m-1">
                    <h1 class="text-4xl">Welcome!</h1>
                    <div class="text-xl p-2 text-justify">
                        <p class="p-2">
                            This is my personal website, here you can see some of the things I do and I also have my
                            blog
                            which you can
                            read, if you wish, obviously.
                        </p>
                        <p class="p-2">
                            If you want more information about me, on the "about" page you can find more details and
                            some
                            interesting links
                        </p>
                    </div>
                </div>
                <div class="basis-1/2">
                </div>
            </div>
        </div>
        <div class="p-3 mx-2 sm:mx-4">
            <div class="flex flex-col sm:flex-row">
                <div class="basis-2/3 border rounded p-6 m-1">
                    <h1 class="text-4xl">My configuration</h1>
                    <h2 class="text-2xl text-gray-400">This is my computer hardware configuration and Linux
                        configuration
                    </h2>

                    <div class="flex flex-col sm:flex-row">
                        <div class="basis-1/3">
                            <div class="border rounded p-4 m-1">
                                <h3 class="text-xl">Computer hardware</h3>
                                <ul class="list-disc list-inside mt-3">
                                    <li class="p-1">MoBo: Generic LGA 2011</li>
                                    <li class="p-1">CPU: <a
                                            href="https://www.intel.com/content/www/us/en/products/sku/75269/intel-xeon-processor-e52650-v2-20m-cache-2-60-ghz/specifications.html"
                                            target="_blank">
                                            Xeon 2650 v2
                                        </a>
                                    </li>
                                    <li class="p-1">RAM: 4x4GBs DDR3 1866MHz</li>
                                    <li class="p-1">ROM: 1 SSD (120GBs) + 3 HHD (500GBs) </li>
                                    <li class="p-1">GPU: <a
                                            href="https://www.techpowerup.com/gpu-specs/quadro-600.c1318"
                                            target="_blank">NVIDIA Quadro 600</a></li>
                                    <li class="p-1">PSU: <a href="https://www.pcyes.com.br/electro-v2-white-600w/"
                                            target="_blank">
                                            PCYES Electro v2 650W
                                        </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="basis-1/3">
                            <div class="border rounded p-4 m-1">
                                <h3 class="text-xl">Linux config</h3>
                                <ul class="list-disc list-inside mt-3">
                                    <li class="p-1">OS: Arch Linux</li>
                                    <li class="p-1">DE: KDE Plasma</li>
                                    <li class="p-1">WM: KWin</li>
                                    <li class="p-1">Shell: Bash</li>
                                    <li class="p-1">Theme: Breeze-Dark</li>
                                    <li class="p-1">Icons: Breeze-Dark</li>
                                    <li class="p-1">Terminal: Konsole</li>
                                    <li class="p-1">Terminal Font: Hack Nerd Font 11</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
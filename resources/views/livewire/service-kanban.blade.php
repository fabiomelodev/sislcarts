<div class="w-8/12">

                <div class="grid grid-cols-3 gap-4">

                    <div>
                        <div class="border shadow-lg rounded-lg flex justify-between items-center bg-yellow-500 p-2">
                            <h2 class="font-bold text-center text-white">
                                Em Espera
                            </h2>

                            <p class="shadow-lg rounded-lg text-xs font-semibold text-white bg-white/50 p-2">
                                0
                            </p>
                        </div>

                        <div class="flex flex-col gap-2 mt-4">
                            <!-- loop -->
                            @foreach($this->collectionsOnBold as $collectionOnBold)
                                <div class="border-t border-yellow-500 shadow-lg rounded-lg flex bg-white p-4">

                                    <div class="w-10/12">
                                        <h4 class="text-lg font-semibold text-gray-800">
                                            {{ $collectionOnBold->budget->typeService->name }}
                                        </h4>

                                        <p class="text-sm text-gray-600">
                                            Valor: R$ 100,00
                                        </p>

                                        <p class="text-xs hover:underline text-gray-500 cursor-pointer mt-2">
                                            Ver detalhes
                                        </p>
                                    </div>

                                    <div class="w-2/12 flex justify-end">

                                        <ul class="flex flex-col gap-2">
                                            <li>
                                                <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>
                                            </li>

                                            <li>
                                                <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                            <!-- end loop -->
                        </div>
                    </div>

                    <div>
                        <div class="border shadow-lg rounded-lg flex justify-between items-center bg-green-500 p-2">
                            <h2 class="font-bold text-center text-white">
                                Em Execução
                            </h2>

                            <p class="shadow-lg rounded-lg text-xs font-semibold text-white bg-white/50 p-2">
                                0
                            </p>
                        </div>

                        <div class="flex flex-col gap-2 mt-4">
                            <!-- loop -->
                            @for($i = 0; $i < 3; $i++)
                                <div class="border-t border-green-500 shadow-lg rounded-lg flex bg-white p-4">

                                    <div class="w-10/12">
                                        <h4 class="text-lg font-semibold text-gray-800">
                                            Nome do serviço
                                        </h4>

                                        <p class="text-sm text-gray-600">
                                            Valor: R$ 100,00
                                        </p>

                                        <p class="text-xs hover:underline text-gray-500 cursor-pointer mt-2">
                                            Ver detalhes
                                        </p>
                                    </div>

                                    <div class="w-2/12 flex justify-end">

                                        <ul class="flex flex-col gap-2">
                                            <li>
                                                <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>
                                            </li>

                                            <li>
                                                <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endfor
                            <!-- end loop -->
                        </div>
                    </div>

                    <div>
                        <div class="border shadow-lg rounded-lg flex justify-between items-center bg-blue-500 p-2">
                            <h2 class="font-bold text-center text-white">
                                Concluído
                            </h2>

                            <p class="shadow-lg rounded-lg text-xs font-semibold text-white bg-white/50 p-2">
                                0
                            </p>
                        </div>

                        <div class="flex flex-col gap-2 mt-4">
                            <!-- loop -->
                            @for($i = 0; $i < 3; $i++)
                                <div class="border-t border-blue-500 shadow-lg rounded-lg flex bg-white p-4">

                                    <div class="w-10/12">
                                        <h4 class="text-lg font-semibold text-gray-800">
                                            Nome do serviço
                                        </h4>

                                        <p class="text-sm text-gray-600">
                                            Valor: R$ 100,00
                                        </p>

                                        <p class="text-xs hover:underline text-gray-500 cursor-pointer mt-2">
                                            Ver detalhes
                                        </p>
                                    </div>

                                    <div class="w-2/12 flex justify-end">

                                        <ul class="flex flex-col gap-2">
                                            <li>
                                                <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>
                                            </li>

                                            <li>
                                                <svg class="w-4 h-4 fill-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endfor
                            <!-- end loop -->
                        </div>
                    </div>
                </div>
            </div>

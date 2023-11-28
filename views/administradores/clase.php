<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="https://kit.fontawesome.com/2efb80128a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="min-h-screen bg-gray-50/50">
        <aside
            class="bg-gradient-to-br from-gray-800 to-gray-900 -translate-x-80 fixed inset-0 z-50h-[calc(100vh-32px)] w-72  transition-transform duration-300 xl:translate-x-0">
            <div class="relative border-b border-white/20">
                <a class="flex items-end gap-4 py-4 px-5" href="#/">
                    <img src="../../images/logo.jpg" alt="logo universidad" style="width: 50px; border-radius:100%">
                    <h6
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-relaxed text-white">
                        Universidad</h6>
                </a>

            </div>
            <div class="relative border-b border-white/20 py-4">
                <h3 class="ml-8 tracking-normal font-sans text-xl font-semibold leading-relaxed text-white uppercase">
                    Admin</h3>
                <p class="ml-8 tracking-normal font-sans text-lg font-semibold leading-relaxed text-white">
                    Aministrador</p>
            </div>
            <div class="m-4">
                <ul class="mb-4 flex flex-col gap-1">
                    <li>
                        <p
                            class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium uppercase text-white ml-4 my-3">
                            Menú Administración</p>
                    </li>
                    <li>
                        <a class="" href="/administradores/permisos">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-1 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <i class="fa-solid fa-user-gear text-base" style="color: #ffffff;"></i>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    permisos</p>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a class="" href="/administradores/maestros">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-1 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <i class="fa-solid fa-chalkboard-user text-base" style="color: #ffffff;"></i>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    maestros</p>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a class="" href="/administradores/alumnos">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-1 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <i class="fa-solid fa-graduation-cap text-base" style="color: #ffffff;"></i>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    alumnos</p>
                            </button>
                        </a>
                    </li>
                    <li>
                        <a class="" href="/administradores/clases">
                            <button
                                class="middle none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-1 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">

                                <i class="fa-solid fa-desktop text-base" style="color: #ffffff;"></i>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    clases</p>
                            </button>
                        </a>
                    </li>




                </ul>

            </div>
        </aside>
        <div class="p-4 xl:ml-72">
            <nav
                class="block w-full max-w-full bg-transparent text-white shadow-none rounded-xl transition-all px-0 py-1">
                <div class="flex flex-col-reverse justify-between gap-6 md:flex-row md:items-center">
                    <div class="capitalize">
                        <nav aria-label="breadcrumb" class="w-max">
                            <ol
                                class="flex flex-wrap items-center w-full bg-opacity-60 rounded-md bg-transparent p-0 transition-all">
                                <li
                                    class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                    <a href="#">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                            Home</p>
                                    </a>

                                </li>
                                <li
                                    class="flex items-center text-blue-gray-900 antialiased font-sans text-sm font-normal leading-normal cursor-pointer transition-colors duration-300 hover:text-light-blue-500">
                                    <a href="#">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-900 font-normal opacity-50 transition-all hover:text-blue-500 hover:opacity-100">
                                            Administrador</p>
                                    </a>

                                </li>

                            </ol>
                        </nav>

                    </div>
                    <div class="flex items-center">
                        <button
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                            type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" stroke-width="3" class="h-6 w-6 text-blue-gray-500">
                                    <path fill-rule="evenodd"
                                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>
                        <a href="#">
                            <button
                                class="middle none font-sans font-bold center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 hidden items-center gap-1 px-4 xl:flex"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                                    <path fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd"></path>
                                </svg>Sign In </button>
                            <button
                                class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30 grid xl:hidden"
                                type="button">
                                <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                                        <path fill-rule="evenodd"
                                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </button>
                        </a>
                        <button
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                            type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                                    <path fill-rule="evenodd"
                                        d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>
                        <button aria-expanded="false" aria-haspopup="menu" id=":r2:"
                            class="relative middle none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                            type="button">
                            <span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true" class="h-5 w-5 text-blue-gray-500">
                                    <path fill-rule="evenodd"
                                        d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </nav>
            <div class="mt-12">

                <div class="w-[95%] mx-auto flex justify-between items-center">
                    <h3
                        class="block antialiased tracking-normal font-sans text-lg capitalize font-semibold leading-relaxed mb-5">
                        lista de alumnos</h3>
                    <button type="" onclick='openModalInsert()'
                        class="bg-blue-500 text-white font-bold py-2 px-4 capitalize rounded mb-5  hover:bg-blue-400"><i
                            class="fa-solid fa-user-plus" style="color: #ffffff;"></i> agregar
                        clase</button>

                </div>
                <div class="w-[95%] mx-auto">
                    <div
                        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2 ">
                        <div
                            class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                            <div>
                                <h6
                                    class="block antialiased tracking-normal font-sans text-base capitalize font-semibold leading-relaxed  mb-1">
                                    información de alumnos</h6>

                            </div>

                        </div>
                        <div class="p-6  px-0 pt-0 pb-2">
                            <table class="w-full min-w-[840px] table-auto ">
                                <thead>
                                    <tr>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                #</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                clase</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                maestro</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                alumnos inscritos</p>
                                        </th>

                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                acciones</p>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $numeracion = 1;
                                    foreach ($clases as $clase) {
                                    ?>
                                    <tr class=" hover:bg-[#c3dff9]">
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <p class="block antialiased font-sans text-xs text-blue-gray-900 font-bold">
                                                <?= $numeracion++ ?></p>
                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <p
                                                class="block antialiased font-sans text-xs capitalize  text-blue-gray-900 font-bold">
                                                <?= $clase["nombre_clase"] ?></p>
                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <?php
                                                if ($clase["nombre_maestro"] == NULL || $clase["nombre_maestro"] == "Sin Asignacion ") { ?>
                                            <p
                                                class="inline-block py-[2px] px-[6px] rounded-md antialiased font-sans text-xs capitalize  font-bold bg-[#fcbf14]">
                                                Sin asignación</p>
                                            <?php     } else {
                                                ?>
                                            <p
                                                class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                                <?= $clase["nombre_maestro"] ?></p>
                                            <?php      }
                                                ?>

                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">

                                            <?php
                                                if ($clase["cantidad_alumnos"] == 0) { ?>
                                            <p
                                                class="inline-block py-[2px] px-[6px] rounded-md antialiased font-sans text-xs capitalize  font-bold bg-[#fcbf14]">
                                                Sin alumnos</p>
                                            <?php     } else {
                                                ?>
                                            <p
                                                class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                                <?= $clase["cantidad_alumnos"] ?></p>
                                            <?php      }
                                                ?>
                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <a href="#"
                                                onclick='openModal("<?= $clase["id_clase"] ?>" ,"<?= $clase["id_maestro"] ?>" , "<?= $clase["nombre_clase"] ?>","<?= $clase["nombre_maestro"] ?>","<?= $clase["id_relacion"] ?>" )'>
                                                <i
                                                    class="fa-solid fa-pen-to-square text-[18px] text-[#19d8e6] hover:text-[#6db4b9]"></i>
                                            </a>
                                            <a href="#" class="ml-3">
                                                <i
                                                    class="fa-regular fa-trash-can text-[18px] hover:text-red-900 text-[#dc667a]"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed top-0 left-0 w-full h-full items-center justify-center hidden bg-black bg-opacity-50"
        onclick="closeModal()">
        <div class="bg-white p-8 rounded-2xl shadow-md shadow-zinc-700 w-[500px]" onclick="event.stopPropagation();">

            <h2 class="text-2xl font-bold mb-4 capitalize">editar clase</h2>
            <form action="/administradores/updateClase" method="post">

                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input type="text" name="id_clase" id="id_clase" hidden>
                    <input type="text" name="id_maestro" id="id_maestro" hidden>
                    <input type="text" name="id_relacion" id="id_relacion" hidden>
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="nombre_clase" value="" id="nombre_clase">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        nombre de la clase</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10  my-8">
                    <label for="maestroAsignado"
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Maestro
                        Asignado:</label>
                    <select id="maestroAsignado" name="maestroAsignado"
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500">
                        <option value="" class="capitalize py-2 bg-transparent  focus:bg-slate-500 text-gray-700"
                            id="nombreMaestro"></option>
                        <?php
                        foreach ($maestros as $maestro) { ?>
                        <option value="<?= $maestro["id_maestro"] ?>"> <?= $maestro["nombre_maestro"] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="flex justify-end gap-4">
                    <button class="bg-gray-600 text-white font-bold py-2 px-4 rounded mt-4 hover:bg-gray-400"
                        onclick="closeModal()">Cerrar
                    </button>
                    <button type="submit"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4 hover:bg-blue-400">Guardar
                        Cambios</button>
                </div>
            </form>

        </div>
    </div>

    <!-- MODAL 2 INSERTAR MAESTRO -->
    <div id="modalInsert"
        class="fixed top-0 left-0 w-full h-full items-center justify-center hidden bg-black bg-opacity-50"
        onclick="closeModalInsert()">
        <div class="bg-white p-8 rounded-2xl shadow-md shadow-zinc-700 w-[500px]" onclick="event.stopPropagation();">

            <h2 class="text-2xl font-bold mb-4 capitalize">agregar clase</h2>
            <form action="/administradores/insertClase" method="post">

                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer capitalize w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="nombre_clase" value="" id="nombre_clase">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        nombre de la clase</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10  my-8">
                    <label for="maestroAsignado"
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Maestro
                        Asignado:</label>
                    <select id="maestroAsignado" name="maestroAsignado"
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500">
                        <option value="38" class="capitalize py-2 bg-transparent  focus:bg-slate-500 text-gray-700"
                            id="nombreMaestro">Sin Asignacion</option>
                        <?php
                        foreach ($maestros as $maestro) { ?>
                        <option value="<?= $maestro["id_maestro"] ?>"> <?= $maestro["nombre_maestro"] ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="flex justify-end gap-4">
                    <button class="bg-gray-600 text-white font-bold py-2 px-4 rounded mt-4 hover:bg-gray-400"
                        onclick="closeModal()">Cerrar
                    </button>
                    <button type="submit"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded mt-4 hover:bg-blue-400">Guardar
                        Cambios</button>
                </div>
            </form>

        </div>
    </div>

    <script>
    function openModal(idClase, isMaestro, nombreClase, nombreMaestro, idRelacion) {
        const id_clase = document.getElementById('id_clase');
        const id_maestro = document.getElementById('id_maestro');
        const nombre_clase = document.getElementById('nombre_clase');
        const nombre_maestro = document.getElementById('nombreMaestro');
        const id_relacion = document.getElementById('id_relacion');
        const sinAsignacion = "Sin Asignación";

        document.getElementById('modal').classList.remove('hidden');
        document.getElementById('modal').classList.add('flex');
        console.log(nombreMaestro.length);

        id_clase.value = idClase;
        id_maestro.value = isMaestro;
        id_relacion.value = idRelacion;
        nombre_clase.value = nombreClase;
        nombre_maestro.value = isMaestro;
        if (nombreMaestro == "") {
            console.log(sinAsignacion)
            nombre_maestro.innerHTML = sinAsignacion;
        } else {
            nombre_maestro.innerText = nombreMaestro;
        }

        // nombre_maestro.innerText = "Sin asignación";

    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    // modal insert maestro
    function openModalInsert() {


        document.getElementById('modalInsert').classList.remove('hidden');
        document.getElementById('modalInsert').classList.add('flex');


    }

    function closeModalInsert() {
        document.getElementById('modalInsert').classList.add('hidden');
    }

    function closeModalInsert() {
        document.getElementById('modalInsert').classList.add('hidden');
    }
    </script>
</body>

</html>
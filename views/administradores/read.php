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
            <?php
            if ($_SESSION["rol"]) { ?>
            <div class="relative border-b border-white/20 py-4">
                <h3 class="ml-8 tracking-normal font-sans text-xl font-semibold leading-relaxed text-white uppercase">
                    <?= $_SESSION["rol"] ?></h3>
                <p class="ml-8 tracking-normal font-sans text-lg font-semibold leading-relaxed text-white">
                    <?= $_SESSION["nombre"] . " " . $_SESSION["apellido"] ?></p>
            </div>
            <?php    } ?>
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
                <div class=" flex-col-reverse gap-6 md:flex-row md:items-center flex justify-end">

                    <div class="flex items-center">

                        <a class="" href="/cerrarSession">
                            <button
                                class="middle hover:text-red-700 none font-sans font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-black hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                                type="button">
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <p
                                    class="block antialiased font-sans text-base leading-relaxed text-inherit font-medium capitalize">
                                    Cerrar sesion</p>
                            </button>
                        </a>

                    </div>
                </div>
            </nav>
            <div class="mt-12">

                <div class="w-[95%] mx-auto">
                    <h3
                        class="block antialiased tracking-normal font-sans text-lg capitalize font-semibold leading-relaxed mb-5">
                        lista de permisos</h3>
                </div>
                <div class="w-[95%] mx-auto">
                    <div
                        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2 ">
                        <div
                            class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                            <div>
                                <h6
                                    class="block antialiased tracking-normal font-sans text-base capitalize font-semibold leading-relaxed  mb-1">
                                    información de permisos</h6>

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
                                                Email / Usuario</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                permisos</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                estado</p>
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
                                    foreach ($usuarios as $usuario) {
                                    ?>
                                    <tr class=" hover:bg-[#c3dff9]">
                                        <td class="py-2 px-5 border-b border-blue-gray-50">

                                            <p class="block antialiased font-sans text-xs text-blue-gray-900 font-bold">
                                                <?= $numeracion++ ?></p>

                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">

                                            <p
                                                class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                                <?= $usuario["correo_electronico"] ?></p>

                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50 ">

                                            <?php
                                                if ($usuario["rol"] == "ADMIN") { ?>
                                            <p
                                                class="inline-block py-[2px] px-[6px] rounded-md antialiased font-sans text-xs capitalize  font-bold bg-[#fcbf14]">
                                                <?= $usuario["rol"] ?></p>
                                            </p>
                                            <?php  } elseif ($usuario["rol"] == "MAESTRO") {  ?>
                                            <p
                                                class="inline-block py-[2px] px-[6px] rounded-md antialiased font-sans text-xs capitalize text-white font-bold bg-[#239eb3]">
                                                <?= $usuario["rol"] ?></p>
                                            </p>
                                            <?php  } elseif ($usuario["rol"] == "ALUMNO") {  ?>
                                            <p
                                                class="inline-block py-[2px] px-[6px] rounded-md antialiased font-sans text-xs capitalize text-white font-bold bg-[#6f7378]">
                                                <?= $usuario["rol"] ?></p>
                                            </p>
                                            <?php  }   ?>
                                        </td>

                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <?php
                                                if ($usuario["activo"]) { ?>
                                            <p
                                                class="inline-block py-[2px] px-[6px] rounded-md antialiased font-sans text-xs capitalize text-white font-bold bg-[#53b164]">
                                                Activo</p>
                                            <?php  } else {  ?>
                                            <p
                                                class="inline-block py-[2px] px-[6px] rounded-md antialiased font-sans text-xs capitalize text-white font-bold bg-[#ce464c]">
                                                Inactivo</p>
                                            <?php  }   ?>

                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">

                                            <a href="#"
                                                onclick='openModal("<?= $usuario["correo_electronico"] ?>" , "<?= $usuario["rol"] ?>" , "<?= $usuario["activo"] ?>" , "<?= $usuario["id_usuario"] ?>")'>
                                                <i class="fa-solid fa-pen-to-square text-[18px]"
                                                    style="color: #19d8e6;"></i>
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
            <div class="text-blue-gray-600">
                <footer class="py-2">
                    <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
                        <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">© 2023,
                            made with

                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed top-0 left-0 w-full h-full items-center justify-center hidden bg-black bg-opacity-50"
        onclick="closeModal()">
        <div class="bg-white p-8 rounded-2xl shadow-md shadow-zinc-700 w-[500px]" onclick="event.stopPropagation();">

            <h2 class="text-2xl font-bold mb-4 capitalize">editar permiso</h2>
            <form action="/administradores/update" method="post">

                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input type="text" name="id" value="" hidden id="id">
                    <input type="text" name="rol_antiguo" value="" hidden id="rol_antiguo">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="email" value="" id="valueEmail">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Email de Usuario</label>
                </div>

                <div class="my-8">
                    <label for="rol"
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">Cliente
                        ID:</label>
                    <select id="rol" name="rol"
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500">
                        <option value="" selected class="capitalize py-2 bg-slate-500  focus:bg-slate-500 text-white"
                            id="valueRol"></option>
                        <?php

                        foreach ($roles as $rol) { ?>
                        <option value="<?= $rol["rol"] ?>"> <?= $rol["rol"] ?> </option>
                        <?php } ?>


                    </select>
                </div>
                <div>
                    <p class="font-semibold text-base my-3">Modificar el estado del Usuario</p>
                </div>

                <div class="space-x-4">
                    <label>
                        <input type="radio" name="estado" value="1" id="activo"> Activo
                    </label>
                    <label>
                        <input type="radio" name="estado" value="0" id="inactivo"> Inactivo
                    </label>
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
    function openModal(mail, rol, estado, id) {
        const email = document.getElementById('valueEmail');
        const erol = document.getElementById('valueRol');
        const ide = document.getElementById('id');
        const rol_antiguo = document.getElementById('rol_antiguo');
        const activo = document.getElementById('activo');
        const inactivo = document.getElementById('inactivo');

        document.getElementById('modal').classList.remove('hidden');
        document.getElementById('modal').classList.add('flex');

        email.value = mail;
        erol.value = rol;
        erol.innerText = rol;
        ide.value = id;
        rol_antiguo.value = rol;

        if (estado == 1) {
            activo.checked = true;
        } else if (estado == 0) {
            inactivo.checked = true;
        }


    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }
    </script>
</body>

</html>
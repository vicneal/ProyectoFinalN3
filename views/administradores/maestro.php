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

                <div class="w-[95%] mx-auto flex justify-between items-center">
                    <h3
                        class="block antialiased tracking-normal font-sans text-lg capitalize font-semibold leading-relaxed mb-5">
                        lista de maestros</h3>
                    <button type="" onclick='openModalInsert()'
                        class="bg-blue-500 text-white font-bold py-2 px-4 capitalize rounded mb-5  hover:bg-blue-400"><i
                            class="fa-solid fa-user-plus" style="color: #ffffff;"></i> agregar
                        maestro</button>

                </div>
                <div class="w-[95%] mx-auto">
                    <div
                        class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2 ">
                        <div
                            class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                            <div>
                                <h6
                                    class="block antialiased tracking-normal font-sans text-base capitalize font-semibold leading-relaxed  mb-1">
                                    información de maestros</h6>

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
                                                nombre</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                email</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                dirección</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                fecha. de nacimiento</p>
                                        </th>
                                        <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                            <p
                                                class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                                clase asiganada</p>
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
                                    foreach ($maestros as $maestro) {
                                    ?>
                                    <tr class=" hover:bg-[#c3dff9]">
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <p class="block antialiased font-sans text-xs text-blue-gray-900 font-bold">
                                                <?= $numeracion++ ?></p>
                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <p
                                                class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                                <?= $maestro["nombre"] ?> <?= $maestro["apellido"] ?></p>
                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <p
                                                class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                                <?= $maestro["correo_electronico"] ?></p>
                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <p
                                                class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                                <?= $maestro["direccion"] ?></p>
                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">
                                            <p
                                                class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                                <?= $maestro["fecha_nacimiento"] ?></p>
                                        </td>
                                        <td class="py-2 px-5 border-b border-blue-gray-50">

                                            <?php
                                                if ($maestro["clase_asignada"] !== "Sin Asignación" && $maestro["clase_asignada"] !== Null) { ?>
                                            <p
                                                class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                                <?= $maestro["clase_asignada"] ?></p>
                                            <?php   } else {  ?>
                                            <p
                                                class="inline-block py-[2px] px-[6px] rounded-md antialiased font-sans text-xs capitalize  font-bold bg-[#fcbf14]">
                                                Sin asignación</p>
                                            <?php   } ?>
                                        </td>

                                        <td class="py-2 px-5 border-b border-blue-gray-50 ">
                                            <a href="#"
                                                onclick='openModal("<?= $maestro["id_usuario"] ?>" ,"<?= $maestro["id_maestro"] ?>" ,"<?= $maestro["id_relacion"] ?>","<?= $maestro["correo_electronico"] ?>" , "<?= $maestro["nombre"] ?>" , "<?= $maestro["apellido"] ?>" , "<?= $maestro["direccion"] ?>" , "<?= $maestro["fecha_nacimiento"] ?>" , "<?= $maestro["clase_asignada"] ?>" )'>
                                                <i
                                                    class="fa-solid fa-pen-to-square text-[18px] text-[#19d8e6] hover:text-[#6db4b9]"></i>
                                            </a>
                                            <a href="/administradores/deleteMaestro?id=<?= $maestro["id_usuario"] ?>"
                                                class="ml-3">
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

            <h2 class="text-2xl font-bold mb-4 capitalize">editar maestro</h2>
            <form action="/administradores/updateMaestro" method="post">

                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input type="text" hidden id="id_usuario" name="id_usuario">
                    <input type="text" hidden id="id_maestro" name="id_maestro">
                    <input type="text" hidden id="id_relacion_maestro_clase" name="id_relacion_maestro_clase">
                    <input type="text" hidden id="emailEnvio" name="email">
                    <input
                        class="peer  w-full h-full  text-gray-800 font-sans font-normal bg-slate-300 outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="" value="" id="email" disabled>
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Correo Electronico</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="nombre" value="" id="nombre">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Nombre(s)</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="apellido" value="" id="apellido">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Apellido(s)</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="direccion" value="" id="direccion">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Dirección</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="fecha" value="" id="fecha" type="date">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Fecha Nacimiento</label>
                </div>

                <!-- aca se realizara el campo clase asignada -->
                <div class="my-8 flex justify-start items-center gap-3">
                    <p>Asignar clase</p>
                    <select id="claseAsignada" name="claseAsignada"
                        class="peer  w-2/5 h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500">
                        <!-- <option value="6" class="capitalize py-2 bg-slate-500  focus:bg-slate-500 text-white"
                            id="clase">Sin Asignación
                        </option> -->
                        <option value="6" selected class="capitalize py-2 bg-slate-500  focus:bg-slate-500 text-white"
                            id="claseEdit">
                        </option>
                        <?php

                        foreach ($asignaturas as $asignatura) { ?>
                        <option value="<?= $asignatura["id_clase"] ?>"> <?= $asignatura["nombre"] ?> </option>
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

            <h2 class="text-2xl font-bold mb-4 capitalize">editar maestro</h2>
            <form action="/administradores/insertMaestro" method="post">

                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="email" value="" id="">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Ingresar Email</label>

                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="dni" value="" id="">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Ingresar DNI</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="nombre" value="" id="">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Ingresar Nombre(s)</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="apellido" value="" id="">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Ingresar Apellido(s)</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="direccion" value="" id="">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Ingresar Dirección</label>
                </div>
                <div class="relative w-full min-w-[200px] h-10 my-8">
                    <input
                        class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-4 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                        placeholder=" " name="fecha" value="" id="" type="date">
                    <label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                        Ingresar Fecha Nacimiento</label>
                </div>

                <!-- aca se realizara el campo clase asignada -->
                <div class="my-8 flex justify-start items-center gap-3">
                    <p>Asignar clase</p>
                    <select id="claseAsignada" name="claseAsignada"
                        class="peer  w-2/5 h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-blue-500">
                        <option value="6" selected class="capitalize py-2 bg-slate-500  focus:bg-slate-500 text-white"
                            id="claseInsert">Selecciona Clase
                        </option>
                        <?php

                        foreach ($asignaturas as $asignatura) { ?>
                        <option value="<?= $asignatura["id_clase"] ?>"> <?= $asignatura["nombre"] ?> </option>
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
    function openModal(idUser, isMaestro, idRelacionMaestro_clase, mail, nom, ape, dir, fecNacimiento, claseAsignada) {
        const id_usuario = document.getElementById('id_usuario');
        const id_maestro = document.getElementById('id_maestro');
        const id_relacion_maestro_clase = document.getElementById('id_relacion_maestro_clase');
        const email = document.getElementById('email');
        const emailEnvio = document.getElementById('emailEnvio');
        const nombre = document.getElementById('nombre');
        const apellido = document.getElementById('apellido');
        const direcion = document.getElementById('direccion');
        const fecha_nacimiento = document.getElementById('fecha');
        const clase = document.getElementById('claseEdit');


        document.getElementById('modal').classList.remove('hidden');
        document.getElementById('modal').classList.add('flex');

        id_usuario.value = idUser;
        id_maestro.value = isMaestro;

        email.value = mail;
        emailEnvio.value = mail;
        nombre.value = nom;
        apellido.value = ape;
        direcion.value = dir;
        fecha_nacimiento.value = fecNacimiento;

        id_relacion_maestro_clase.value = idRelacionMaestro_clase
        clase.value = idRelacionMaestro_clase;
        clase.innerText = claseAsignada;


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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <section class="h-screen w-full ">
        <div class=" h-full  w-full ">
            <div class="g-6 flex h-full flex-wrap items-center justify-center lg:justify-between">

                <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12 bg-[#fff5d2] h-screen flex items-center">
                    <img src="../images/logo.jpg" class="w-full" alt="logo Universidad" />
                </div>


                <div class="md:w-8/12 lg:ml-6 lg:w-5/12 ">
                    <form class="w-2/4 mx-auto" action="/home" method="post">

                        <div>
                            <h2 class="text-3xl uppercase font-semibold my-5">Login</h2>
                        </div>
                        <div class="relative w-full min-w-[200px] h-10  mb-6">
                            <input
                                class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-400 placeholder-shown:border-t-blue-gray-400 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-5 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                                placeholder=" " name="email" value="" id="">
                            <label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                                Email Address</label>
                        </div>


                        <div class="relative w-full min-w-[200px] h-10  mb-6">
                            <input
                                class="peer  w-full h-full bg-transparent text-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-5 rounded-[7px] border-blue-gray-200 focus:border-blue-500"
                                placeholder=" " name="pass" value="" type="password">
                            <label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal peer-placeholder-shown:text-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-blue-gray-400 peer-focus:text-blue-500 before:border-blue-gray-200 peer-focus:before:border-blue-500 after:border-blue-gray-200 peer-focus:after:border-blue-500">
                                Password</label>
                        </div>


                        <button type="submit"
                            class="inline-block w-full rounded bg-[#3b5998] px-7 pb-2.5 pt-3 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            Sign in
                        </button>


                    </form>
                    <table class="w-3/4  table-auto  mt-9">
                        <thead>
                            <tr>

                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                    <p
                                        class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                        Email / Usuario</p>
                                </th>
                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                    <p
                                        class="block antialiased font-sans text-[13px]  capitalize text-blue-gray-400 font-bold">
                                        password</p>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($usuariosDefecto as $usuario) {
                            ?>
                            <tr class=" hover:bg-[#c3dff9]">
                                <td class="py-2 px-5 border-b border-blue-gray-50">

                                    <p class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                        <?= $usuario["correo_electronico"] ?></p>

                                </td>
                                <td class="py-2 px-5 border-b border-blue-gray-50">

                                    <p class="block antialiased font-sans text-xs  text-blue-gray-900 font-bold">
                                        <?= $usuario["dni"] ?></p>

                                </td>

                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
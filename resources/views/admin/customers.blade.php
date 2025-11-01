<x-app-layout>
    <h1 class="text-xl font-medium mb-3">Clientes</h1>
    <div class="bg-gray-100 w-full rounded-md shadow-md shadow-slate-300 p-6">

        <div class="shrink max-w-full px-4 w-full mb-6">
            <div class="flex flex-wrap flex-row -mx-4">
                <div class="shrink max-w-full px-4 w-full">
                <div class="md:flex md:justify-between">
                    <div>
                        <a href="#" class="py-2 px-4 mb-3 block lg:inline-block text-center rounded-sm leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-hidden focus:ring-0">
                            Novo 
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="inline-block ms-1 bi bi-plus-lg" viewBox="0 0 16 16">
                                <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"></path>
                            </svg>
                        </a>
                    </div>

                    <div>
                        <div id="bulk-actions">
                            <label class="flex flex-wrap flex-row">
                            <select id="bulk_actions" name="bulk_actions" class="inline-block leading-5 relative py-2 ps-3 pe-8 mb-3 rounded-sm bg-white border border-gray-200 overflow-x-auto focus:outline-hidden focus:border-gray-300 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600 select-caret appearance-none">
                                <option value="">Ações</option>
                                <option value="activate">Ativar</option>
                                <option value="blocked">Bloquear</option>
                            </select>        
                            <input type="submit" id="bulk_apply" class="ms-2 py-2 px-4 inline-flex items-center justify-center gap-2 mb-3 rounded-sm leading-5 border hover:bg-indigo-600 hover:text-white dark:bg-gray-900/40 dark:border-gray-800 dark:hover:bg-gray-900 focus:outline-hidden focus:ring-0 cursor-pointer" value="Aplicar">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w-full mb-6 overflow-x-auto">
                    <forms action="">
                        <table class="table-sorter table-bordered w-full text-start text-gray-600 dark:text-gray-400 bg-white">
                            <thead>
                                <tr class="bg-gray-300 dark:bg-gray-900/40">
                                    <th data-sortable="false"><input id="check_all" type="checkbox" class="form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></th>
                                    <th class="min-w-40">Nome / Razão Social</th>
                                    <th>E-mail</th>
                                    <th class="hidden lg:table-cell">Celular</th>
                                    <th>Status</th>
                                    <th class="text-center hidden lg:table-cell">Último evento</th>
                                    <th data-sortable="false">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Ari Budin
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Pending</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.9</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar2.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Youna
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Active</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.91</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Ari Budin
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Pending</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.9</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar2.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Youna
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Active</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.91</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Ari Budin
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Pending</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.9</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar2.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Youna
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Active</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.91</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Ari Budin
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Pending</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.9</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar2.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Youna
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Active</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.91</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Ari Budin
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Pending</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.9</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar2.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Youna
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Active</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.91</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Ari Budin
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Pending</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.9</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar2.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Youna
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Active</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.91</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Ari Budin
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-yellow-700 bg-yellow-100 rounded-full">Pending</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.9</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" class="checkedall form-checkbox size-4 text-indigo-500 border border-gray-300 rounded-sm dark:bg-gray-700 dark:border-gray-700"></td>
                                <td>
                                <a href="#">
                                    <div class="flex flex-wrap flex-row items-center">
                                    <div class="self-center"><img class="h-8 w-8 rounded-full" src="../src/img/avatar/avatar2.png"></div>
                                    <div class="leading-5 dark:text-gray-300 flex-1 ms-2 mb-1">  
                                        Youna
                                    </div>
                                    </div>
                                </a>
                                </td>
                                <td>example@gmail.com</td>
                                <td class="hidden lg:table-cell">27/05/2022</td>
                                <td class="table-cell">
                                <span class="text-sm px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Active</span>
                                </td>
                                <td class="text-center hidden lg:table-cell">43.252.106.91</td>
                                <td class="text-center">
                                <a href="javascript:;" class="inline-block me-2 hover:text-red-500" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                </a>
                                <a href="javascript:;" class="inline-block me-2 hover:text-green-500" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                    </svg>
                                </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <!-- select all -->
                        <script type="text/javascript">
                            const selectall = document.querySelector("#check_all");
                            if ( selectall != null) {
                            selectall.addEventListener("click", function(){
                                if (document.querySelector("#check_all").checked == true) {
                                var ele=document.querySelectorAll('.checkedall');  
                                for(var i=0; i<ele.length; i++){  
                                    if(ele[i].type=='checkbox')  
                                        ele[i].checked=true;  
                                }  
                                } else {
                                var ele=document.querySelectorAll('.checkedall');  
                                for(var i=0; i<ele.length; i++){  
                                    if(ele[i].type=='checkbox')  
                                        ele[i].checked=false;  
                                        
                                }  
                                }
                            });
                            }            
                        </script>
                    </forms>
                </div>
                </div>
            </div>
        </div>
        
        {{-- <form class="valid-form flex flex-wrap flex-row -mx-4">
            <div class="form-group shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                <label for="inputName" class="inline-block mb-2">Nome / Razão Social</label>
                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputName" required>
            </div>
            <div class="form-group shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                <label for="inputEmail4" class="inline-block mb-2">E-mail</label>
                <input type="email" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputEmail4" required>
            </div>
            <div class="form-group shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                <label for="inputCellphone" class="inline-block mb-2">Celular</label>
                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputCellphone" required>
            </div>
            <div class="form-group shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                <label for="inputPhone" class="inline-block mb-2">Telefone</label>
                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputPhone">
            </div>

            <div class="form-group shrink max-w-full px-4 w-full md:w-1/6 mb-4">
                <label for="inputCep" class="inline-block mb-2">CEP</label>
                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputCep" required>
            </div>
            <div class="form-group shrink max-w-full px-4 w-full md:w-4/6 mb-4">
                <label for="inputAddress" class="inline-block mb-2">Endereço</label>
                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputAddress" required>
            </div>
            <div class="form-group shrink max-w-full px-4 w-full md:w-1/6 mb-4">
                <label for="inputNumber" class="inline-block mb-2">Número</label>
                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputNumber">
            </div>
            
            <div class="form-group shrink max-w-full px-4 w-full md:w-1/6 mb-4">
                <label for="inputState" class="inline-block mb-2">Estado</label>
                <select id="inputState" class="inline-block w-full leading-5 relative py-2 ps-3 pe-8 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 select-caret appearance-none dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" required>
                <option>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="form-group shrink max-w-full px-4 w-full md:w-1/2 mb-4">
                <label for="inputCity" class="inline-block mb-2">Cidade</label>
                <input type="text" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0 dark:text-gray-300 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" id="inputCity" required>
            </div>
            
            <div class="form-group shrink max-w-full md:w-1/6 px-4 w-full pt-8">
                <button type="submit" class="py-2 px-4 inline-block text-center rounded-sm leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-hidden focus:ring-0">Salvar</button>
            </div>
        </form> --}}

    </div>
</x-app-layout>
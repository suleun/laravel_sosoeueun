<template>
    <div>
        <!-- Change the size of the container "max-w-full", ideally to w-1/6-->
        <div class="container max-w-full ml-8 mt-6 text-base font-sans">

            <div
                class="flex flex-col w-full border border-gray-400 shadow-lg overflow-hidden m-auto pb-4">
                <div class="justify-around flex flex-row items-baseline">
                    <h1 class="underline text-lg mt-2 ml-3">To do list</h1>
                </div>
                <label class="custom-label flex mt-2 ml-3">
                    <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                        <input type="checkbox" class="hidden" checked="checked">
                            <svg
                                class="hidden w-4 h-4 text-green-600 pointer-events-none"
                                viewBox="0 0 172 172">
                                <g
                                    fill="none"
                                    stroke-width="none"
                                    stroke-miterlimit="10"
                                    font-family="none"
                                    font-weight="none"
                                    font-size="none"
                                    text-anchor="none"
                                    style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path
                                    d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                    fill="currentColor"
                                    stroke-width="1"/></g>
                            </svg>
                        </div>
                        <span class="select-none">
                            Paint walls</span>
                    </label>

                    <label class="custom-label flex mt-2 ml-3">
                        <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                            <input type="checkbox" class="hidden" checked="checked">
                                <svg
                                    class="hidden w-4 h-4 text-green-600 pointer-events-none"
                                    viewBox="0 0 172 172">
                                    <g
                                        fill="none"
                                        stroke-width="none"
                                        stroke-miterlimit="10"
                                        font-family="none"
                                        font-weight="none"
                                        font-size="none"
                                        text-anchor="none"
                                        style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path
                                        d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                        fill="currentColor"
                                        stroke-width="1"/></g>
                                </svg>
                            </div>
                            <span class="select-none">
                                Cleaning</span>
                        </label>

                        <label class="custom-label flex mt-2 ml-3">
                            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                                <input type="checkbox" class="hidden" checked="checked">
                                    <svg
                                        class="hidden w-4 h-4 text-green-600 pointer-events-none"
                                        viewBox="0 0 172 172">
                                        <g
                                            fill="none"
                                            stroke-width="none"
                                            stroke-miterlimit="10"
                                            font-family="none"
                                            font-weight="none"
                                            font-size="none"
                                            text-anchor="none"
                                            style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path
                                            d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                            fill="currentColor"
                                            stroke-width="1"/></g>
                                    </svg>
                                </div>
                                <span class="select-none">Finish project</span>
                            </label>

                            <label class="custom-label flex mt-2 ml-3">
                                <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                                    <input type="checkbox" class="hidden" checked="checked">
                                        <svg
                                            class="hidden w-4 h-4 text-green-600 pointer-events-none"
                                            viewBox="0 0 172 172">
                                            <g
                                                fill="none"
                                                stroke-width="none"
                                                stroke-miterlimit="10"
                                                font-family="none"
                                                font-weight="none"
                                                font-size="none"
                                                text-anchor="none"
                                                style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path
                                                d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                fill="currentColor"
                                                stroke-width="1"/></g>
                                        </svg>
                                    </div>
                                    <span class="select-none">Make dinner</span>
                                </label>

                                <label class="custom-label flex mt-2 ml-3">
                                    <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
                                        <input type="checkbox" class="hidden" checked="checked">
                                            <svg
                                                class="hidden w-4 h-4 text-green-600 pointer-events-none"
                                                viewBox="0 0 172 172">
                                                <g
                                                    fill="none"
                                                    stroke-width="none"
                                                    stroke-miterlimit="10"
                                                    font-family="none"
                                                    font-weight="none"
                                                    font-size="none"
                                                    text-anchor="none"
                                                    style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path
                                                    d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z"
                                                    fill="currentColor"
                                                    stroke-width="1"/></g>
                                            </svg>
                                        </div>
                                        <span class="select-none">
                                            Read a book</span>
                                    </label>

                                </div>

                            </div>

                        </div>

                    </template>
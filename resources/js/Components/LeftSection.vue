<template>
    <div class="w-full lg:w-3/6 xl:w-2/6 flex flex-col justify-start items-stretch  bg-gray-50  rounded-md lg:rounded-none lg:rounded-l-md p-3">
        <div class="flex-auto flex flex-col">
            <div class="flex-auto flex flex-row">
                <div class="w-full p-1">
                    <div class="w-full flex items-center p-1">
                        <input
                            type="text"
                            placeholder="Search"
                            class="search-input mr-2 bg-gray-600 bg-opacity-10 placeholder-gray-500 text-gray-400 text-sm py-1 px-10 rounded-md outline-none w-full focus:outline-none focus:ring"
                        />
                        <button class="flex flex-col justify-center items-center p-2 rounded-full focus:ring-2 hover:bg-gray-300 hover:bg-opacity-30 focus:outline-none" aria-label="Add">
                            <svg class="fill-current h-4 w-4" viewBox="0 0 25 25">
                                <path d="M11 11v-11h1v11h11v1h-11v11h-1v-11h-11v-1h11z"/>
                            </svg>
                        </button>
                    </div>
                    <ul class="overflow-y-auto">
                        <li class="my-2 p-2 flex flex-row cursor-pointer rounded-lg hover:bg-gray-300 hover:bg-opacity-50">
                            <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-997145684-1547233351.jpg?crop=1xw:1xh;center,top&resize=480:*" class="h-12 w-12 rounded-full mr-4" alt="">
                            <div class="w-full flex flex-col justify-center">
                                <div class="flex flex-row justify-between items-center">
                                    <h2 class="text-xs font-bold">Benjamin Julien</h2>
                                    <div class="text-xs flex flex-row">
                                        <svg class="w-4 h-4 text-blue-600 fill-current mr-1" viewBox="0 0 19 14">
                                            <path fill-rule="nonzero" d="M4.96833846,10.0490996 L11.5108251,2.571972 C11.7472185,2.30180819 12.1578642,2.27443181 12.428028,2.51082515 C12.6711754,2.72357915 12.717665,3.07747757 12.5522007,3.34307913 L12.4891749,3.428028 L5.48917485,11.428028 C5.2663359,11.6827011 4.89144111,11.7199091 4.62486888,11.5309823 L4.54038059,11.4596194 L1.54038059,8.45961941 C1.2865398,8.20577862 1.2865398,7.79422138 1.54038059,7.54038059 C1.7688373,7.31192388 2.12504434,7.28907821 2.37905111,7.47184358 L2.45961941,7.54038059 L4.96833846,10.0490996 L11.5108251,2.571972 L4.96833846,10.0490996 Z M9.96833846,10.0490996 L16.5108251,2.571972 C16.7472185,2.30180819 17.1578642,2.27443181 17.428028,2.51082515 C17.6711754,2.72357915 17.717665,3.07747757 17.5522007,3.34307913 L17.4891749,3.428028 L10.4891749,11.428028 C10.2663359,11.6827011 9.89144111,11.7199091 9.62486888,11.5309823 L9.54038059,11.4596194 L8.54038059,10.4596194 C8.2865398,10.2057786 8.2865398,9.79422138 8.54038059,9.54038059 C8.7688373,9.31192388 9.12504434,9.28907821 9.37905111,9.47184358 L9.45961941,9.54038059 L9.96833846,10.0490996 L16.5108251,2.571972 L9.96833846,10.0490996 Z"></path>
                                        </svg>
                                        <span class="text-gray-400">
                            10:45
                          </span>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <p class="text-xs text-gray-500">On projection apartments unsatiable...</p>
                                    <span class="text-sm bg-blue-500 rounded-full w-5 h-5 text-center text-white font-bold">4</span>
                                </div>
                            </div>
                        </li>
                        <li class="my-2 p-2 flex flex-row bg-blue-500 rounded-lg cursor-pointer">
                            <img src="https://t.aimg.sk/magaziny/Ts0fWXOKR12frPTjZ3a8UA~Prav-burger-dom-ca-buchta.png?t=LzB4MzU6NTg2eDM2NS85MjB4NzYwL3NtYXJ0L2ZpbHRlcnM6Zm9ybWF0KGpwZWcp&h=aSkfJNypYaRvL4kRNsFH8g&e=2145916800&v=5" class="h-12 w-12 rounded-full mr-4" alt="">
                            <div class="w-full flex flex-col justify-center text-white">
                                <div class="flex flex-row justify-between">
                                    <h2 class="text-xs  font-bold">Food porn group</h2>
                                    <span class="text-xs">10:45</span>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <p class="text-xs">There are many variations of passages...</p>
                                </div>
                            </div>
                        </li>
                        <li class="my-2 p-2 flex flex-row cursor-pointer rounded-lg hover:bg-gray-300 hover:bg-opacity-50">
                            <img class="w-12 h-12 mr-4 rounded-full" src="https://www.telegraph.co.uk/multimedia/archive/03249/archetypal-female-_3249633c.jpg" alt="" />
                            <div class="w-full flex flex-col justify-center">
                                <div class="flex flex-row justify-between">
                                    <h2 class="text-xs font-bold">Angela Vang</h2>
                                    <div class="text-xs flex flex-row">
                                        <svg class="w-4 h-4 text-blue-600 fill-current mr-1" viewBox="0 0 20 20">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path>
                                        </svg>
                                        <span class="text-gray-400">
                            10:45
                          </span>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <p class="text-xs text-gray-500">Sudden looked elinor off gay estate...</p>
                                </div>
                            </div>
                        </li>
                        <li class="my-2 p-2 flex flex-row cursor-pointer rounded-lg hover:bg-gray-300 hover:bg-opacity-50">
                            <img class="w-12 h-12 mr-4 rounded-full" src="https://wallstreetinsanity.com/wp-content/uploads/This-Survey-Shows-Us-How-Different-Men-And-Women-View-The-Perfect-Female-Face-.jpg" alt="" />
                            <div class="w-full flex flex-col justify-center">
                                <div class="flex flex-row justify-between">
                                    <h2 class="text-xs font-bold">Olivia</h2>
                                    <div class="text-xs flex flex-row">
                          <span class="text-gray-400">
                            10:45
                          </span>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <p class="text-xs text-gray-500">Breakfast agreeable incommode depar...</p>
                                </div>
                            </div>
                        </li>
                        <li class="my-2 p-2 flex flex-row cursor-pointer rounded-lg hover:bg-gray-300 hover:bg-opacity-50">
                            <img class="w-12 h-12 mr-4 rounded-full" src="https://www.statnews.com/wp-content/uploads/2018/01/AdobeStock_107381486-645x645.jpeg" alt="" />
                            <div class="w-full flex flex-col justify-center">
                                <div class="flex flex-row justify-between">
                                    <h2 class="text-xs font-bold">Yaeko Lindblom</h2>
                                    <div class="text-xs flex flex-row">
                                        <svg class="w-4 h-4 text-blue-600 fill-current mr-1" viewBox="0 0 19 14">
                                            <path fill-rule="nonzero" d="M4.96833846,10.0490996 L11.5108251,2.571972 C11.7472185,2.30180819 12.1578642,2.27443181 12.428028,2.51082515 C12.6711754,2.72357915 12.717665,3.07747757 12.5522007,3.34307913 L12.4891749,3.428028 L5.48917485,11.428028 C5.2663359,11.6827011 4.89144111,11.7199091 4.62486888,11.5309823 L4.54038059,11.4596194 L1.54038059,8.45961941 C1.2865398,8.20577862 1.2865398,7.79422138 1.54038059,7.54038059 C1.7688373,7.31192388 2.12504434,7.28907821 2.37905111,7.47184358 L2.45961941,7.54038059 L4.96833846,10.0490996 L11.5108251,2.571972 L4.96833846,10.0490996 Z M9.96833846,10.0490996 L16.5108251,2.571972 C16.7472185,2.30180819 17.1578642,2.27443181 17.428028,2.51082515 C17.6711754,2.72357915 17.717665,3.07747757 17.5522007,3.34307913 L17.4891749,3.428028 L10.4891749,11.428028 C10.2663359,11.6827011 9.89144111,11.7199091 9.62486888,11.5309823 L9.54038059,11.4596194 L8.54038059,10.4596194 C8.2865398,10.2057786 8.2865398,9.79422138 8.54038059,9.54038059 C8.7688373,9.31192388 9.12504434,9.28907821 9.37905111,9.47184358 L9.45961941,9.54038059 L9.96833846,10.0490996 L16.5108251,2.571972 L9.96833846,10.0490996 Z"></path>
                                        </svg>
                                        <span class="text-gray-400">
                            10:45
                          </span>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <p class="text-xs text-gray-500">New the her nor case that lady paid...</p>
                                    <span class="text-sm bg-blue-500 rounded-full w-5 h-5 text-center text-white font-bold">1</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LeftSection"
}
</script>

<style scoped>
    .search-input {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' d='M18.109,17.776l-3.082-3.081c-0.059-0.059-0.135-0.077-0.211-0.087c1.373-1.38,2.221-3.28,2.221-5.379c0-4.212-3.414-7.626-7.625-7.626c-4.212,0-7.626,3.414-7.626,7.626s3.414,7.627,7.626,7.627c1.918,0,3.665-0.713,5.004-1.882c0.006,0.085,0.033,0.17,0.098,0.234l3.082,3.081c0.143,0.142,0.371,0.142,0.514,0C18.25,18.148,18.25,17.918,18.109,17.776zM9.412,16.13c-3.811,0-6.9-3.089-6.9-6.9c0-3.81,3.089-6.899,6.9-6.899c3.811,0,6.901,3.09,6.901,6.899C16.312,13.041,13.223,16.13,9.412,16.13z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: left 0.75rem center;
        background-size: 0.9rem 1.25rem;
    }
</style>

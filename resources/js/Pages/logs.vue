<template>
    <app-layout>
        <!--        <template #header>-->
        <!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">-->
        <!--                Manage Post - (Laravel 8 Inertia JS CRUD with Jetstream & Tailwind CSS - ItSolutionStuff.com)-->
        <!--            </h2>-->
        <!--        </template>-->
        <div >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    <!--                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert" v-if="$page.flash.message">-->
                    <!--                        <div class="flex">-->
                    <!--                            <div>-->
                    <!--                                <p class="text-sm">{{ $page.flash.message }}</p>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
<!--                    <button @click="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Post</button>-->
                    <form @submit.prevent="guardar">
<!--                        <div class="flex flex-wrap -mx-3 mb-6">-->
<!--                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">-->
<!--                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">-->
<!--                                    First Name-->
<!--                                </label>-->
<!--                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jane">-->
<!--                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>-->
<!--                            </div>-->
<!--                            <div class="w-full md:w-1/2 px-3">-->
<!--                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">-->
<!--                                    Last Name-->
<!--                                </label>-->
<!--                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="flex flex-wrap -mx-3 mb-6">-->
<!--                            <div class="w-full px-3">-->
<!--                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">-->
<!--                                    Password-->
<!--                                </label>-->
<!--                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">-->
<!--                                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                    Titulo
                                </label>
                                <input v-model="dato.titulo"  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Titulo" required>
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="descripcion">
                                    Descipcion
                                </label>
                                <input v-model="dato.descripcion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="descripcion" type="text" placeholder="Descripcion">
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Archivo
                                </label>
                                <input  class="text-xs appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="file" required>
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                    Guardar
                                </label>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" > Guardar</button>

                            </div>
                        </div>
                    </form>
                    <table class="table-fixed w-full">
                        <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 w-20">No.</th>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Body</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="row in data">
                            <td class="border px-4 py-2">{{ row.id }} asdas</td>
                            <td class="border px-4 py-2">{{ row.title }}</td>
                            <td class="border px-4 py-2">{{ row.body }}</td>
                            <td class="border px-4 py-2">
                                <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
<!--                    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isOpen">-->
<!--                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">-->

<!--                            <div class="fixed inset-0 transition-opacity">-->
<!--                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; This element is to trick the browser into centering the modal contents. &ndash;&gt;-->
<!--                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​-->
<!--                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">-->
<!--                                <form>-->
<!--                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">-->
<!--                                        <div class="">-->
<!--                                            <div class="mb-4">-->
<!--                                                <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>-->
<!--                                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Title" v-model="form.title">-->
<!--                                                <div v-if="$page.errors.title" class="text-red-500">{{ $page.errors.title[0] }}</div>-->
<!--                                            </div>-->
<!--                                            <div class="mb-4">-->
<!--                                                <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Body:</label>-->
<!--                                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" v-model="form.body" placeholder="Enter Body"></textarea>-->
<!--                                                <div v-if="$page.errors.body" class="text-red-500">{{ $page.errors.body[0] }}</div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">-->
<!--                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">-->
<!--                              <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="!editMode" @click="save(form)">-->
<!--                                Save-->
<!--                              </button>-->
<!--                            </span>-->
<!--                                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">-->
<!--                              <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="editMode" @click="update(form)">-->
<!--                                Update-->
<!--                              </button>-->
<!--                            </span>-->
<!--                                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">-->

<!--                              <button @click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">-->
<!--                                Cancel-->
<!--                              </button>-->
<!--                            </span>-->
<!--                                    </div>-->
<!--                                </form>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script>
import AppLayout from './../Layouts/AppLayout'
import Welcome from './../Jetstream/Welcome'
export default {
    components: {
        AppLayout,
        Welcome,
    },
    props: ['data', 'errors'],
    data() {
        return {
            editMode: false,
            isOpen: false,
            form: {
                title: null,
                body: null,
            },
            dato:{},
        }
    },
    mounted() {
      //   console.log('aa');
      // console.log(this.data);
    },
    methods: {
        guardar(){
          // console.log('aa');
          //   this.$inertia.post('/posts', data)
          //   this.reset();
          //   this.closeModal();
          //   this.editMode = false;
            this.$inertia.post('/logs', this.dato).then(res=>{
                // console.log(res);
            });
        },
        openModal: function () {
            this.isOpen = true;
        },
        closeModal: function () {
            this.isOpen = false;
            this.reset();
            this.editMode=false;
        },
        reset: function () {
            this.form = {
                title: null,
                body: null,
            }
        },
        save: function (data) {
            this.$inertia.post('/posts', data)
            this.reset();
            this.closeModal();
            this.editMode = false;
        },
        edit: function (data) {
            this.form = Object.assign({}, data);
            this.editMode = true;
            this.openModal();
        },
        update: function (data) {
            data._method = 'PUT';
            this.$inertia.post('/posts/' + data.id, data)
            this.reset();
            this.closeModal();
        },
        deleteRow: function (data) {
            if (!confirm('Are you sure want to remove?')) return;
            data._method = 'DELETE';
            this.$inertia.post('/posts/' + data.id, data)
            this.reset();
            this.closeModal();
        }
    }
}
</script>

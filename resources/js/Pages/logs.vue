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
                                    Descripcion
                                </label>
                                <input v-model="dato.descripcion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="descripcion" type="text" placeholder="Descripcion">
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                    Archivo
                                </label>
                                <input  class="text-xs appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="file" @change="getImage" required>
                            </div>
                            <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
                                    Guardar
                                </label>
                                <button  :disabled="d" type="submit" class="btn btn-success btn-block" id="botonguardar" > Guardar</button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                        <tr>
                        <th>#</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Usuario</th>
                        <th>Fecha Hora</th>
                        <th>Archivo</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    </div>
<!--                    <table class=" w-full">-->
<!--                        <thead>-->
<!--                        <tr class="bg-gray-100">-->
<!--                            <th class="px-2 py-2">#</th>-->
<!--                            <th class="px-2 py-2">Titulo</th>-->
<!--                            <th class="px-2 py-2">Descripcion</th>-->
<!--                            <th class="px-2 py-2">Usuario</th>-->
<!--                            <th class="px-2 py-2">Fecha Hora</th>-->
<!--                            <th class="px-2 py-2">Archivo</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                        <tr v-for="(i,index) in datos" :key="index">-->
<!--                            <td class="border px-2 py-1">{{ index+1 }}</td>-->
<!--                            <td class="border px-2 py-1">{{ i.titulo }}</td>-->
<!--                            <td class="border px-2 py-1">{{ i.descripcion }}</td>-->
<!--                            <td class="border px-2 py-1">{{ i.user.name }}</td>-->
<!--                            <td class="border px-2 py-1">{{ i.created_at | moment("YYYY/MM/DD hh:mm:ss") }}</td>-->
<!--                            <td class="border px-2 py-1">-->
<!--                                <a v-if="i.archivo!=''" :href="i.archivo" target="_blank">Descargar Archivo</a>-->
<!--                            </td>-->
<!--&lt;!&ndash;                            <td class="border px-2 py-1">&ndash;&gt;-->
<!--&lt;!&ndash;                                <button @click="edit(row)" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Edit</button>&ndash;&gt;-->
<!--&lt;!&ndash;                                <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>&ndash;&gt;-->
<!--&lt;!&ndash;                            </td>&ndash;&gt;-->
<!--                        </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->


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
            datos:[],
            imagen:null,
            dataTables:null,
            d:false,
        }
    },
    mounted() {
      //   console.log('aa');
      // console.log(this.data);


        this.dataTables=$('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy',
                'csv',
                // 'excel',
                'pdf',
                'print'
            ]
        } );
        this.misdatos();
    },
    methods: {
        misdatos(){


            this.dataTables.clear().draw();
            axios.get('/logs/create').then(res=>{
                // console.log(res.data);
                this.datos=res.data;
                let con=0;

                this.datos.forEach(r=>{
                    // console.log(r);
                    con++;

                    this.dataTables.row.add([
                        con,
                        r.titulo,
                        r.descripcion,
                        r.user.name,
                        moment(r.created_at).format('YYYY-MM-DD hh:mm:ss'),
                        "<a href='"+r.archivo+"' target='__black'>Archivo</a>",
                    ]).draw(false);
                })
            });
        },
        getImage(event){
            //Asignamos la imagen a  nuestra data
            this.imagen = event.target.files[0];
            // console.log(this.imagen);
        },
        guardar(){
          // console.log('aa');
          //   this.$inertia.post('/posts', data)
          //   this.reset();
          //   this.closeModal();
          //   this.editMode = false;
          //   this.data=[];
          //   let form=new FormData();
            // data.append('titutlo',);
            // this.dato.archivo=this.file;
            this.d=true;
            $('#botonguardar').html(
                "<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>");
            var data = new  FormData();
            data.append('archivo', this.imagen);
            data.append('titulo', this.dato.titulo);
            // if ()
            if (this.dato.descripcion!=undefined)
                data.append('descripcion', this.dato.descripcion);
            else
                data.append('descripcion','');
            axios.post('/logs', data).then(res=>{
                // console.log(res.data);
                // this.data=(res.data);
                // this.$alert("Guardado correctamente");
                this.$fire({
                    title:"Guardado",
                    text:"Correctamente",
                    type:"success",
                    timer:2000
                });
                this.d=false;
                $('#botonguardar').html("Guardar");
                this.dato={};
                this.misdatos();

            });
        },
        // openModal: function () {
        //     this.isOpen = true;
        // },
        // closeModal: function () {
        //     this.isOpen = false;
        //     this.reset();
        //     this.editMode=false;
        // },
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

<template>
    <div>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the official DataTables.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des produits</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTale" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom du produit</th>
                                <th>Image du produit</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nom du produit</th>
                                <th>Image du produit</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            <tr v-for="product in products" :key="product.id">
                                <td>{{ product.name }}</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <router-link :to="{name: 'edit', params: { id: product.id }}" class="btn btn-success">Edit</router-link>
                                        <button class="btn btn-danger" @click="deleteProduct(product.id)">Delete</button>
                                    </div>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import "datatables.net-dt/js/dataTables.dataTables"
import "datatables.net-dt/css/jquery.dataTables.min.css"

export default {
    data() {
        return {
            products: []
        }
    },
     created() {
        axios.get('http://localhost:8000/api/admin/products/')
            .then(response => {
                this.products = response.data;
                console.log(response.data);
            });
    },
    methods: {
        deleteProduct(id) { 
            this.axios
                .delete(`http://localhost:8000/api/admin/products/${id}`)
                .then(response => {
                    let i = this.products.map(data => data.id).indexOf(id);
                    this.products.splice(i, 1)
                });
        },
        forceUpdate(){
            this.$forceUpdate();
        }
    },
   
    name: 'Tables',
    mounted(){
        $('#dataTable').DataTable();
    }
}
</script>
<template>
    <div>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the official DataTables.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Zone</th>
                                <th>Responsable de la zone</th>
                                <th>Nombre de Merc.</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Zone</th>
                                <th>Responsable de la zone</th>
                                <th>Nombre de Merc.</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>

                             <tr v-for="area in areas" :key="product.id">
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
    name: 'Tables',
    mounted(){
        $('#dataTable').DataTable();
    }
}
</script>
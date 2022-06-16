<template>
    <div>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Points de vente</h1>
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des points de vente</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>PDV</th>
                                <th>Contact Responsable</th>
                                <th>PLV</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 <th>PDV</th>
                                <th>Contact Responsable</th>
                                <th>PLV</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr v-for="pos in poss" :key="pos.id">
                                <td>{{ pos.manager_name }}</td>
                                <td>{{ pos.manager_contact }}</td>
                                <td>{{ pos.plv }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <router-link :to="{name: 'EditPos', params: { id: pos.id }}" class="btn btn-success">Edit</router-link>
                                        <button class="btn btn-danger" @click="deletePos(pos.id)">Delete</button>
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
            poss: []
        }
    },
     created() {
        axios.get('/pos')
            .then(response => {
                this.poss = response.data;
                console.log(response.data);
            });
    },/*,
    methods: {
        deleteProduct(id) { 
            axios.delete(`http://localhost:8000/api/admin/products/${id}`)
                .then(response => {
                    let i = this.products.map(data => data.id).indexOf(id);
                    this.products.splice(i, 1)
                });
        },
        forceUpdate(){
            this.$forceUpdate();
        }
    },*/


    name: 'Tables',
    mounted(){
        $('#dataTable').DataTable();
    }
}
</script>
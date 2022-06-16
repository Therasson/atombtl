<template>
    <div>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Merchandiser</h1>
        
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des Merchandiser</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenoms</th>
                                <th>Nom du responsable.</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                 <th>Nom</th>
                                <th>Prenoms</th>
                                <th>Nom du responsable.</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                           
                            <tr v-for="mechandiser in mechandisers" :key="mechandiser.id">
                                <td>{{ mechandiser.first_name }}</td>
                                <td>{{ mechandiser.last_name }}</td>
                                <td>Edinburgh</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <router-link :to="{name: 'EditMerchandiser', params: { id: merchandiser.id }}" class="btn btn-success">Edit</router-link>
                                        <button class="btn btn-danger" @click="deleteArea(merchandiser.id)">Delete</button>
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
            merchandiser: []
        }
    },
     created() {
        axios.get('/merchandisers')
            .then(response => {
                this.merchandisers = response.data;
                console.log(response.data);
            });
    },

    name: 'Tables',
    mounted(){
        $('#dataTable').DataTable();
    }
}
</script>
<template>
  <div>
    <h1 class="h3 mb-1 text-gray-800">Créer un point de vente</h1>
    <p class="mb-4">
      Bootstrap's default utility classes can be found on the official page.
      The custom utilities below were created to extend this theme past the
      default utility classes built into Bootstrap's framework.
    </p>

    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Overflow Hidden -->
        <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
              Ajouter un point de vente
            </h6>
          </div>
          <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Sélectionnez le secteur</label>
                   <select class='form-control' v-model='sector' @change='getSupervisor()'>
                      <option value='0' >Select Country</option>
                      <option v-for='data in sectors' :value='data.id'>{{ data.name }}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nom du Gérant</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Contact PDV</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label>PLV présent</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Représentant FC</label>
                    <input type="text" class="form-control" >
                </div>
               
                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
          </div>
        </div>

      </div>

      
    </div>
  </div>
</template>

<script>
export default {
    data(){
            return {
              user: 0,
                users: [],
                country: 0,
                countries: [],
                state: 0,
                states: []
            }
        },
        methods:{
            getSupervisor: function(){
                axios.get('/get_countries')
                    .then(function (response) {
                        this.countries = response.data;
                    }.bind(this));
            },
        },
        created: function(){
            this.getSupervisor()
        }
}
</script>
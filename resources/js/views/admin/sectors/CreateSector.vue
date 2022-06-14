<template>
  <div>
    <h1 class="h3 mb-1 text-gray-800">Créer une zone</h1>
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
              Ajouter une nouvelle zone
            </h6>
          </div>
          <div class="card-body">
            <form>
                <div class="form-group">
                    <label>Nom du responsable de zone</label>
                    <!-- <select class="form-control" v-model='country' @change='getSupervisor()'>
                      <option value='0' >Selectionnez le chez de zone</option>
                      <option v-for='supervisors in supervisor' :value='data.id'>{{ data.name }}</option>
                    </select> -->
                   <select class='form-control' v-model='user' @change='getSupervisor()'>
                                <option value='0' >Select Country</option>
                                <option v-for='data in countries' :value='data.id'>{{ data.name }}</option>
                            </select>
                </div>
                <div class="form-group">
                    <label>Nom de la zone</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
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
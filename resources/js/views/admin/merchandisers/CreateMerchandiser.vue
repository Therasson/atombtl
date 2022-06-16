<template>
  <div>
    <h1 class="h3 mb-1 text-gray-800">Merchandiser</h1>

    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Overflow Hidden -->
        <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
              Ajouter un merchandiser
            </h6>
          </div>
          <div class="card-body">
            <form>
               
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" >
                </div>

                <div class="form-group">
                    <label>Prénoms</label>
                    <input type="text" class="form-control" >
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" >
                </div>

                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="text" class="form-control" >
                </div>

                <div class="form-group">
                    <label>Confirmez le mot de passe</label>
                    <input type="text" class="form-control" >
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
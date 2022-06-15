<template>
  <div>
    <h1 class="h3 mb-1 text-gray-800">Ajouter un produit</h1>
    <!-- <p class="mb-4">
      Bootstrap's default utility classes can be found on the official page.
      The custom utilities below were created to extend this theme past the
      default utility classes built into Bootstrap's framework.
    </p> -->

    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Overflow Hidden -->
        <div class="card mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
              Ajouter un produit
            </h6>
          </div>
          <div class="card-body">
            <form @submit.prevent.stop="storeProduct">
                <div class="form-group">
                    <label>Nom du produit</label>
                    <input type="text" class="form-control" v-model='form.name'>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" @change="setImage($event)">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" v-model='form.description'></textarea>
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
          form: {
            product:0,
            name: '',
            image:'',
            description: '',
            etat: ''
          }
        }
    },
    methods:{
        /*getSupervisor: function(){
            axios.get('/get_countries')
                .then(function (response) {
                    this.countries = response.data;
                }.bind(this));
        },*/

        setImage: function(event){
          this.form.image= event.target.files[0]
        },

        storeProduct: function(){
          let formData = new FormData()
          formData.append('name', this.form.name)
          formData.append('image', this.form.image)
          formData.append('description', this.form.description)
          axios.post('/products', formData,{ 
              'Content-Type': 'multipart/form-data'
            })
            .then(function (response) {
                console.log(response.data);
            });
        }
    },
    
}
</script>
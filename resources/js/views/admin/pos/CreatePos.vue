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
            <form @submit.prevent.stop="storePos">
                <div class="form-group">
                    <label>Sélectionnez le secteur</label>
                   <select class='form-control' v-model='form.sector'>
                      <option value='0' >Selectionnez un secteur</option>
                      <option v-for='data in sectors' :value='data.id'>{{ data.name }}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Sélectionnez le Merchandiser</label>
                   <select class='form-control' v-model='form.user'>
                      <option value='0' >Selectionnez le merchandiser</option>
                      <option v-for='user in users' :value='user.id'>{{ user.first_name +" "+  user.last_name }}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nom du Gérant</label>
                    <input type="text" class="form-control" v-model='form.name'>
                </div>
                <div class="form-group">
                    <label>Contact PDV</label>
                    <input type="text" class="form-control" v-model='form.contact'>
                </div>
                <div class="form-group">
                    <label>PLV présent</label>
                    <input type="text" class="form-control" v-model='form.plv'>
                </div>
                <div class="form-group">
                    <label>Représentant FC</label>
                    <input type="text" class="form-control" v-model='form.representant'>
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
import axios from 'axios';

export default {
    data(){
        return {
          users: [],
          sectors: [],

          form: {
            pos:0,
            sector:0,
            user: 0,
            name:'',
            contact:'',
            plv:'',
            representant:''
          }

        }
      },
      methods:{
        //recuperer les secteurs pour assignation au PDV
        getSector: function(){
            axios.get('/get_sectors')
                .then(function (response) {
                    this.sectors = response.data;
                    console.log(response.data);
                }.bind(this));
        },
        // recuperation des commerciaux pour assignation au PDV
        getMerchandiser: function(){
            axios.get('/get_users')
                .then(function (response) {
                    this.users = response.data;
                    console.log(response.data);
                }.bind(this));
        },

        //enregistrement du point de vente
        storePos: function(){
          /*let formData = new FormData()
          formData.append('name', this.form.name)
          formData.append('contact', this.form.contact)
          formData.append('plv', this.form.plv)
          formData.append('represenant', this.form.representant)*/
          axios.post('/pos', form)
            .then(function (response) {
                console.log(response.data);
            });
        }

      },
      created: function(){
          this.getSector(),
          this.getMerchandiser()
      }
}
</script>
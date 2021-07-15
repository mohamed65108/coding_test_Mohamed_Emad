<template>
  <div>
    <main class="container">
      <div class="bg-light p-5 rounded">
        <label for="postcode">Postcode</label>
        <Postcode id="postcode" class="form-control" @postcode="loadAddresses($event)"/>
        <ul class="list-inline">
          <li v-if="selected" class="list-inline-item">
            <a class="btn btn-link" @click.prevent="unselect">back</a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-link" href="/home">Home</a>
          </li>
        </ul>
      </div>
    </main>

    <br>

    <div class="container marketing">
      <div v-show="addresses.length > 0 && show">

        <div class="row">
          <div class="col-12">
            <h2 class="pb-2 border-bottom">Address</h2>
          </div>
        </div>
        <div class="row">
          <div v-for="address in addresses" class="col-lg-4">
            <div class="card m-2">
              <div class="card-body">
                <h5 class="card-title">{{ address.line_1 }}</h5>
                <ul class="card-text">
                  <li>Country: {{ address.country }}</li>
                  <li>Post Town: {{ address.post_town }}</li>
                  <li>Longitude: {{ address.longitude }}</li>
                  <li>Latitude: {{ address.latitude }}</li>
                </ul>
                <a @click.prevent="select(address)" class="btn btn-primary">Show</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Postcode from './Postcode'

export default {
  name: 'AddressLookup',
  data: function () {
    return {
      addresses: [],
      show: false,
      selected: false
    }
  },
  methods: {
    loadAddresses (postcode) {
      this.$emit('select', null)
      this.selected = false;

      axios.get('https://addresses.iamproperty.com/postcodes/' + postcode + '/addresses')
        // .then(r => r.json())
        .then(i => {

          this.show = true
          this.addresses = i.data.result
        })
        .catch(err => this.addresses = [])
    },
    select(v) {
      this.show = false;
      this.selected = true;
      this.$emit('select', v)
    },
    unselect(v) {
      this.show = true
      this.selected = false;
      this.$emit('select', null)
    }

  },
  components: {
    Postcode
  }
}
</script>

<style scoped>

</style>

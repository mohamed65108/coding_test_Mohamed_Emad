<template>
  <div>
    <AddressLookup @select="select"/>
    <div class="container">
      <div class="row">
        <div class="col">
          <table class="table" v-if="selected">
            <thead>
            <tr>
              <th colspan="2">Postcode Details</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(value,key) in selected">
              <td class="table-primary w-25">{{ key }}</td>
              <td class="table-secondary">{{ value }}</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!--        <pre v-if="selected"><code>{{ selected | json }}</code></pre>-->
  </div>
</template>

<script>
import AddressLookup from './components/AddressLookup'

export default {
  name: 'App',
  data: function () {
    return {
      selected: null
    }
  },
  methods: {
    select(v) {
      this.selected = v
    }
  },
  filters: {
    json: v => JSON.stringify(v, null, 4)
  },
  components: {
    AddressLookup
  }
}
</script>

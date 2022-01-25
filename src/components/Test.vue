<template>
  <div>
    <label>Poruka: </label>
    <input type="text" v-model="message"  />
    <button v-on:click="dodaj">Dodaj</button>
    <div>
      <ul>
        <li v-for="(podatak, index) in nizPodataka" :key="index">
          {{ podatak }} <button v-on:click="brisi(index)">Brisi</button>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: "Test",
  data(){
    return {
      message: '',
      nizPodataka: [
        'podatak 1', 'podatak 2'
      ]

    }
  },
  methods: {
    dodaj(){
      this.nizPodataka.push(this.message);
      this.message='';
    },
    brisi(index){
      this.nizPodataka.splice(index,1);
    }
  }
}
</script>

<style scoped>

</style>
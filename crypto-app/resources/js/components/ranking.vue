<template>
    <div>
 
          
<!-- component -->
   <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          My watch list

        </h1>
      <div class="bg-white shadow-md rounded my-6">
                   <table class="min-w-max w-full table-auto">
                        <thead  class="min-w-max w-full table-auto">
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Logo</th>
                                <th class="py-3 px-6 text-left">Price</th>
                                <th class="py-3 px-6 text-left">Currency</th>
                                <th class="py-3 px-6 text-left">Market Cap</th>

                            </tr>
                        </thead>
                         <tbody class="text-gray-600 text-sm font-light">
                             <tr class="tableRow" v-for="data in rankings" :key="data.id">
                            <td class="py-3 px-6 text-left whitespace-nowrap"><img v-bind:src="data.logo_url" height="30px"
    width="30px"/>  </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">{{data.currency}} </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap"> {{data.price}} </td>
                          <td class="py-3 px-6 text-left whitespace-nowrap"> {{data.market_cap}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
   


    </div>

</template>

<script>
 

    export default {
        name: "Ranking",
        components: {
        
        },

        props: {
          
        },
        data() {
            return {
               // csrf: document.querySelector("meta[name='csrf-token']").getAttribute("content"),
     
                rankings: [],
                
            }
        },
        mounted() {
            this.getRankings();


        },
        methods: {
            getRankings: function () {

                axios.get("/rankings")
                    .then(response => {
                       // console.log(response.data.businesses);
                        this.rankings = response.data;
                        console.log(this.rankings)
                       
                    })
                    .catch(error => {
                        // console.log(error);
                    });

            }
        }
       
        
    }
</script>

<style scoped>

</style>

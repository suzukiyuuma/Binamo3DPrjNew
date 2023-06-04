<template>
    <textarea class="Base_TextBox_Input" type="text" v-model="message" :placeholder="placeMessage">
        placeMessage
    </textarea>
</template>
  
<script>
export default {
    props: {
        placeMessage: {
            type: String,
            default: "",
        },
    
    },
    data() {
        return {
            message: "",
        };
    },
};
</script>

<style scoped>
.Base_TextBox {
/* background-color: #f3f3f3; */
/* width: 100%; */

}
.Base_TextBox_Input{
    border-radius:  10px 10px 10px 10px;
    background-color: white;
    padding: 10px;
    width: 100%;
    min-width: 75px;
    height:40px;
    outline: none;
}
</style>
  
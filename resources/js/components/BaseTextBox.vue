<template>
    <div class="Base_TextBox">
      <input class="Base_TextBox_Input" type="text" v-model="message" :placeholder="placeMessage"  />
    </div>
</template>
  
<script>
export default {
    props: {
        placeholder: {
            type: String,
            default: "placeMessage",
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
    outline: none;
}
</style>
  
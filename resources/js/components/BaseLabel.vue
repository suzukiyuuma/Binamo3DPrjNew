<template>
    <label v-modle="message" class="Base_Label">{{ message }}</label>
</template>
  
<script>
export default {
    data() {
        return {
            message: "テスト文字",
        };
    },
};
</script>

<style scoped>
.Base_Label{
    background-color: rgb(70, 70, 70);
    padding: 10px;
    width: 100%;
    min-width: 75px;
    color:white;
    border: 2px solid white; /* 追加 */
    border-radius:  10px 10px 10px 10px;
    
}
</style>
  
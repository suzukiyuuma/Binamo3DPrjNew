<template>
    <div>
        <button :class="computedClasses">
            {{ InitialMessage  }}
        </button>
    </div>
</template>
<script>
export default {
    props: {
    definedColor: {
        type: String,
        default: '',
    },
    InitialMessage: {
        type: String,
        default: 'ボタン',
    },
  },
    data() {
        return {
            textColor: "white",
            bgColor: "transparent",
        };
    },
    computed: {
        computedClasses() {
        const classes = ["Base-Button"];
        // もし、propsで定義された色があれば、クラスに追加して定義色がなければ、デフォルトの色のクラスを追加する
        if (this.definedColor !== '') {
            classes.push(this.definedColor);
        }else{
            classes.push("Default-Color");
        }
        return classes.join(" ");
        
        },
    },
};
</script>

<style scoped>
.Base-Button{
    border: 2px solid white; /* 追加 */
    border-radius:  10px 10px 10px 10px;
    padding:10px;
    width:100%;
}
.Default-Color{
  color:white;
  background-color: transparent;
}
.Base-Button:hover {
  color: gray;
  background-color: white;
  cursor:pointer;
}

</style>
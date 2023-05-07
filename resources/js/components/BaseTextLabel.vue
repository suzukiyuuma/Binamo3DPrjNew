<template>
    <div class="Base_Text_Parent">
        <label class="Base_Text_Label_Label">{{ InitialLabelMessage }}</label>
        <input class="Base_Text_Label_TextBox" type="text" v-model="TextMessage" />
        <!-- <div class="Base_Text_Label">
        </div>
        <div class="Base_Text_TextBox">
        </div> -->
    </div>
</template>

<script>
export default {
    props: {
    InitialLabelMessage: {
        type: String,
        default: '',
    },
    }
};
</script>

<style scoped>
.Base_Text_Parent{
    width:100%;/* 必要に応じて親コンポーネントで上書き */
    margin:0 atuo;
}
.Base_Text_Label_Label{
    background-color: rgb(191, 191, 191);
    padding: 5px;
    color:rgb(82, 81, 81);
    border-bottom-left-radius: 10px;
    border-top-left-radius: 10px;
    margin-right:-0.5em;
    width:40%;

}
.Base_Text_Label_TextBox{
    background-color: white;
    padding: 5px;
    border: none;
    color:black;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
    width:60%;

}
.Base_Text_Label_TextBox:focus {
    outline: none;
}

/* スマートフォンサイズ用のスタイル */
@media screen and (max-width: 820px) {
  .Base_Text_Parent {
    display: flex;
    flex-direction: column;
  }
  .Base_Text_Label_Label {
    border-radius: 5px;
    width:100%;
  }
  .Base_Text_Label_TextBox {
    border-radius: 5px;
    width:100%;
  }

  @media screen and (max-width: 420px) {
    .Base_Text_Label_Label {
        border-radius: 0px;
        width:100%;
    }
    .Base_Text_Label_TextBox {
        border-radius: 0px;
        width:100%;
    }
  }
}
</style>

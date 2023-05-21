<template>
    <div class="main-container">
        <div class="bord-parent">
            <div style="display:flex; justify-content: center; margin-top: 20px;">
                <BaseButton @click="goToLoginUser()" :InitialMessage="'ログイン'" id="GetLoginBtn"/>
                <BaseButton @click="goToRegistUser()" :InitialMessage="'会員登録'" id="InsertLoginBtn"/>
            </div>

            <BaseTextLabel :InitialLabelMessage="'メールアドレス'" id="LoginMail"/>
            <BaseTextLabel :InitialLabelMessage="'パスワード'" id="LoginPass"/>
            <BaseTextLabel :InitialLabelMessage="'再パスワード入力'" id="LoginPass"/>

            <BaseButton :InitialMessage="'Googleアカウントでログイン'" id="LoginSnsBtn"/>
            <div id="RegisterUserKiyakuContent">
                <div id="RegisterUserKiyakuLbl">
                    <label>利用規約</label>
                </div>
                <BaseTextBox class="Base_TextBox_Input"></BaseTextBox>
                <intput type="checkbox"/>
                <label>利用規約に同意します。</label>
                <BaseButton @click="registBainamoUser()" :InitialMessage="'会員登録'" id="RegistAccountBtn"/>
            </div>
        </div>
    </div>  
</template>
<script>
// BaseTextLabelの読み込み
import BaseTextLabel from "./BaseTextLabel.vue";
import BaseButton from "./BaseButton.vue";
// コンポーネントを使用できるようにする 
export default {
    components: {
        BaseTextLabel,
        BaseButton,
    },
    methods: {
        goToRegistUser: function(){
            this.$router.push('./RegistUser');
        },
        goToLoginUser: function(){
            this.$router.push('./Login');
        },
        registBainamoUser: function(){
            axios.get("/api/registBainamoUser")
            .then(response => {
                const res = response.data;
            })
            .catch(error => console.log(error));
        }
    }
};
</script>
<style scoped>
.Base_TextBox_Input{
    height:200px;
}
#RegisterUserKiyakuContent{
    width:50%;
}
#RegisterUserKiyakuLbl{
    text-align: center;
}
#RegiserUserRiyouKiyaku{
    width: 100%;
}
#GetLoginBtn{
    width:200px;
}
#InsertLoginBtn{
    width:200px;
}
#RegistAccountBtn{
    width:200px;
    margin:0 auto;
} 
#LoginMail{
    margin-top: 50px;
 
}
#LoginPass{
    margin-top: 15px;
 
}
#LoginBtn{
    margin-top: 30px;
    width:200px;
    min-width:150px;
}
#LoginSnsBtn{
    margin-top: 10px;
    margin-bottom: 20px;
    width:350px;
    /* background-image:url('../../img/Google.png'); */
}
.Base_Text_Parent{
    width : 80%;
}
.bord-parent{
    border-radius:10px;
    background-color: rgba(96, 95, 95, 0.5);
    border: solid 2px black;
    width: 50%; 
    margin: 0 auto;
    
}
.bord-parent > * {
    margin: 0 auto;
}
.main-container{
    background-image: url('../../img/MainContainer.png');
    width: 100%; 
    height: 100%; 
    
    
}

/* surface7の場合 */
@media (max-width: 920px) {
    .bord-parent{
        width:70%;
    }
}

/* iPadAirの場合 */
@media (max-width: 820px) {
    .bord-parent{
        width:80%;
    }
}

/* iPhoneXの場合 */
@media (max-width: 420px) {
    .bord-parent{
        width:100%;
        background-color: initial;
        border: initial;
    }

}
</style>
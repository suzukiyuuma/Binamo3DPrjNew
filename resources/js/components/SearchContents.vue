<template>
    <div class="main-container">
        <div class="search-contents-border">
            <div class="search-contents-title">絞り込み検索</div>
            <div class="search-contents-group">
                <div class="search-contents-content">
                    <BaseTextBox id="search-contents-name" :placeMessage="'3Dモデルを検索'"></BaseTextBox>
                    <BaseTextBox id="search-contents-category"></BaseTextBox>
                </div>
                <div class="search-contents-btn">

                </div>
            </div>

        </div>
    </div>
</template>
<script>
// BaseTextLabelの読み込み
import BaseTextLabel from "./BaseTextLabel.vue";
import BaseButton from "./BaseButton.vue";
import BaseTextBox from "./BaseTextBox.vue";
// コンポーネントを使用できるようにする 
export default {
    components: {
        BaseTextLabel,
        BaseButton,
        BaseTextBox,
    },
    
};


</script>
<style scoped>
.main-container{
    background-image: url('../../img/MainContainer.png');
    width: 100%; 
    height: 100%;     
}
.search-contents-border{
    border-width:2px;
    border-style:solid;
    border-color:lightgray;
    border-radius: 20px;
    margin-left:auto;
    margin-right:auto;
    height:100px;
    width: 60%;
}
.search-contents-title{
    background-color:lightgray;
    padding-left:15px;
    border-radius: 17px 17px 0px 0px;
}

.search-contents-group{
    width: 70%;
    margin-left:auto;
    margin-right:auto;
    margin-top:15px;
    margin-bottom:15px;
}
.search-contents-content{
    width:80%;
    display:flex;
}
.search-contents-btn{
    width:20%
}
#search-contents-name{
    width: 50%;
}
#search-contents-category{
    width: 50%;
    margin-left: 20px;
}
</style>
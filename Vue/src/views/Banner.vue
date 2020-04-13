<template>
    <div id="banner">
        <v-headpanel>
            <em>banner更换</em>
            首页图片格式是为1920*600px的jpg或png，其他图片格式是大小为1920*420px的jpg，建议用tinypng压缩
        </v-headpanel>
        <el-row>
            <el-col
                :span="5"
                v-for="(o, index) in bannerlist"
                :key="index"
                :offset="index%4 === 0 ? 0 : 1"
                :style="index%4 === 0 ? 'clear:both' : ''"
            >
                <el-card :body-style="{ padding: '0px' }">
                    <img
                        :src="website+'/imgs/'+o.path+'/'+o.name+'?'+date"
                        class="image"
                    >
                    <div class="buttonbar">
                        <span class="title">{{o.label}}</span>
                        <v-upload
                            @upload="updateImg"
                            :name="o.name.slice(0, -4)"
                            :url="url"
                            :path="o.path"
                        ></v-upload>
                    </div>
                </el-card>
            </el-col>
        </el-row>
    </div>
</template>

<script>
import Headpanel from "../components/Headpanel.vue";
import Upload from "../components/Upload.vue";
import { mapState } from "vuex";

export default {
    data() {
        return {
            url: "banner",
            bannerlist: [],
            date: ""
        };
    },
    methods: {
        updateImg: function(file, path) {
            if (path === "index") {
                let id = file.slice(6, 7);
                this.bannerlist.splice(id - 1, 1, { id: id, name: file });
            }
            this.date = new Date().getTime();
        }
    },
    created() {
        return this.get("bannerlist")
            .then(res => {
                this.bannerlist = res;
            })
            .catch(e => {
                this.$message({
                    type: "warning",
                    message: "获取列表失败!失败原因:" + e
                });
            });
    },
    computed: {
        ...mapState(["website"])
    },
    components: {
        "v-headpanel": Headpanel,
        "v-upload": Upload
    }
};
</script>

<style lang='scss'>
#banner {
    .button {
        padding: 0;
        float: right;
    }

    .image {
        width: 100%;
        display: block;
    }
    .el-col {
        margin-bottom: 30px;
    }
    .buttonbar {
        padding: 14px;
        font-size: 18px;
        .title {
            line-height: 34px;
        }
        span {
            font-size: 18px;
            // line-height: 48px;
        }
        .upload {
            float: right;
            margin-bottom: 12px;
        }
    }
}
</style>

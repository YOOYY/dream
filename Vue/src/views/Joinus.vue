<template>
    <div id="joinus">
        <v-headpanel>
            <em>招聘信息更换</em>删除工作地点将自动删除其所属的招聘信息
        </v-headpanel>

        <el-button
            @click="jobCreate"
            style="margin-bottom:20px"
            type="danger"
            size="small"
        >创建工作地点</el-button>

        <el-table
            :data="jobs"
            style="width: 100%"
        >
            <el-table-column
                label="ID"
                prop="id"
                width="100px"
            >
            </el-table-column>
            <el-table-column
                label="中文名"
                prop="name"
            >
            </el-table-column>
            <el-table-column
                label="英文名"
                prop="english"
            >
            </el-table-column>
            <el-table-column align="right">
                <template slot-scope="scope">
                    <el-button
                        size="mini"
                        @click="jobUpdate(scope.$index, scope.row)"
                    >修改</el-button>
                    <el-button
                        size="mini"
                        type="danger"
                        @click="jobDel(scope.$index, scope.row)"
                    >删除</el-button>
                </template>
            </el-table-column>
        </el-table>

        <el-dialog
            title="编辑工作地点"
            :visible.sync="jobShow"
            :close-on-click-modal="false"
        >
            <el-form
                :model="editjobs"
                inline
            >
                <el-form-item
                    label="中文名"
                    label-width="100px"
                >
                    <el-input
                        v-model.trim="editjobs.name"
                        autocomplete="off"
                    ></el-input>
                </el-form-item>
                <el-form-item
                    label="英文名"
                    label-width="100px"
                >
                    <el-input
                        v-model.trim="editjobs.english"
                        autocomplete="off"
                    ></el-input>
                </el-form-item>
            </el-form>
            <div
                slot="footer"
                class="dialog-footer"
            >
                <el-button @click="closePanel">取 消</el-button>
                <el-button
                    type="primary"
                    @click="submit"
                >确 定</el-button>
            </div>
        </el-dialog>

        <el-button
            @click="handleCreate"
            style="margin:20px 0"
            type="danger"
            size="small"
        >创建招聘信息</el-button>
        <el-select
            v-model="value"
            placeholder="请选择工作地点"
            style="margin-left:20px"
        >
            <el-option
                v-for="(item) in select"
                :key="item.id"
                :label="item.name"
                :value="item.id"
            >
            </el-option>
        </el-select>
        <el-table
            :data="tableData"
            style="width: 100%"
        >
            <el-table-column type="expand">
                <template slot-scope="props">
                    <el-tag type="danger">中文内容</el-tag>
                    <div v-html="props.row.content"></div>
                    <el-tag type="danger">英文内容</el-tag>
                    <div v-html="props.row.content_en"></div>
                </template>
            </el-table-column>
            <el-table-column
                label="ID"
                prop="id"
                width="100px"
            >
            </el-table-column>
            <el-table-column
                label="职位"
                prop="title"
            >
            </el-table-column>
            <el-table-column
                label="英文"
                prop="english"
            >
            </el-table-column>
            <el-table-column
                label="email"
                prop="email"
            >
            </el-table-column>
            <el-table-column
                label="地点"
                prop="jobplace"
            >
            </el-table-column>
            <el-table-column align="right">
                <template slot-scope="scope">
                    <el-button
                        size="mini"
                        @click="handleEdit(scope.$index, scope.row)"
                    >修改</el-button>
                    <el-button
                        size="mini"
                        type="danger"
                        @click="handleDelete(scope.$index, scope.row)"
                    >删除</el-button>
                </template>
            </el-table-column>
        </el-table>
        <el-dialog
            title="编辑招聘信息"
            :visible.sync="panelShow"
            @opened="open"
            :close-on-click-modal="false"
        >
            <el-form
                :model="form"
                ref="form"
                :inline="true"
            >
                <el-form-item
                    label="职位"
                    label-width="100px"
                    prop="title"
                >
                    <el-input
                        v-model.trim="form.title"
                        autocomplete="off"
                    ></el-input>
                </el-form-item>
                <el-form-item
                    label="英文"
                    label-width="100px"
                    prop="english"
                >
                    <el-input v-model.trim="form.english"></el-input>
                </el-form-item>
                <el-form-item
                    label="邮箱"
                    label-width="100px"
                    prop="email"
                >
                    <el-input v-model.trim="form.email"></el-input>
                </el-form-item>
                <el-form-item
                    label="地点"
                    label-width="100px"
                    prop="place"
                >
                    <el-select
                        v-model.trim="form.place"
                        placeholder="请选择"
                    >
                        <el-option
                            v-for="item in jobs"
                            :key="item.id"
                            :label="item.name"
                            :value="item.id"
                        >
                        </el-option>
                    </el-select>
                </el-form-item>
                <el-form-item
                    label="中文内容"
                    label-width="100px"
                    prop="content"
                    class="editorcover"
                >
                    <v-editor
                        ref="text"
                        v-model.trim="form.content"
                        class="editor"
                        :options="editorOption"
                    />
                </el-form-item>

                <el-form-item
                    label="英文内容"
                    label-width="100px"
                    prop="content_en"
                    class="editorcover"
                >
                    <v-editor
                        ref="text_en"
                        v-model.trim="form.content_en"
                        class="editor"
                        :options="editorOption"
                    />
                </el-form-item>
            </el-form>
            <div
                slot="footer"
                class="dialog-footer"
            >
                <el-button @click="closePanel">取 消</el-button>
                <el-button
                    type="primary"
                    @click="submit"
                >确 定</el-button>
            </div>
        </el-dialog>
        <v-upload
            :url="url"
            @upload="upScuccess"
            :uploadType="uploadType"
            ref="upload"
            class="upload"
        >
        </v-upload>
    </div>
</template>

<script>
import Headpanel from "../components/Headpanel.vue";
import Upload from "../components/Upload.vue";
import { mapState } from "vuex";
import { quillEditor } from "vue-quill-editor";
import "quill/dist/quill.core.css";
import "quill/dist/quill.snow.css";
import "quill/dist/quill.bubble.css";
export default {
    data() {
        return {
            url: "uploadfile",
            uploadType: "*",
            editorOption: {},
            textindex: "text",

            type: "create",
            index: "",

            panelShow: false,
            resData: [],
            form: {
                title: "",
                english: "",
                email: "",
                place: "",
                content: "",
                content_en: ""
            },

            jobShow: false,
            jobs: [],
            select: [],
            editjobs: {
                name: "",
                english: ""
            },
            value: "0"
        };
    },
    methods: {
        handleEdit(index, row) {
            this.form = JSON.parse(JSON.stringify(row));
            delete this.form.jobplace;
            this.panelShow = true;
            this.type = "update";
            this.index = index;
        },
        handleCreate() {
            this.form = {
                title: "",
                english: "",
                email: "",
                place: "",
                content: ""
            };
            this.panelShow = true;
            this.type = "create";
        },
        handleDelete(index, row) {
            this.deleteAjax("deljoin", { id: row.id }, this).then(res => {
                this.tableData.splice(index, 1);
                this.$message({
                    type: "success",
                    message: "删除成功"
                });
            });
        },
        jobUpdate(index, row) {
            this.editjobs = JSON.parse(JSON.stringify(row));
            this.jobShow = true;
            this.index = index;
            this.type = "jobupdate";
        },
        jobCreate() {
            this.editjobs = {
                name: "",
                english: ""
            };
            this.jobShow = true;
            this.type = "jobcreate";
        },
        jobDel(index, row) {
            this.deleteAjax("deljob", { id: row.id }, this).then(res => {
                this.resetlist();
                this.$message({
                    type: "success",
                    message: "删除成功"
                });
            });
        },
        closePanel() {
            this.panelShow = false;
            this.jobShow = false;
        },
        submit() {
            let url = "",
                data = {};
            if (this.type === "create" || this.type === "update") {
                data = JSON.parse(JSON.stringify(this.form));
            } else {
                data = JSON.parse(JSON.stringify(this.editjobs));
            }
            if (this.type === "create") {
                url = "createjoin";
            } else if (this.type === "update") {
                url = "updatejoin";
            } else if (this.type === "jobupdate") {
                url = "updatejob";
            } else {
                url = "createjob";
            }
            this.ajax(url, data)
                .then(res => {
                    // console.log(data);
                    // if (this.type === "create") {
                    //     data.id = res.id;
                    //     this.jobs.forEach(val => {
                    //         if (val.id === data.place) {
                    //             data.jobplace = val.name;
                    //         }
                    //     });
                    //     this.tableData.push(data);
                    // } else if (this.type === "update") {
                    //     this.jobs.forEach(val => {
                    //         if (val.id === data.place) {
                    //             data.jobplace = val.name;
                    //         }
                    //     });
                    //     this.tableData.splice(this.index, 1, data);
                    // } else if (this.type === "jobupdate") {
                    //     this.jobs.splice(this.index, 1, data);
                    // } else {
                    //     data.id = res.id;
                    //     this.jobs.push(data);
                    // }
                    this.resetlist().then(res => {
                        this.closePanel();
                        this.$message({
                            type: "success",
                            message: "操作成功"
                        });
                    });
                })
                .catch(err => {
                    this.$message({
                        type: "error",
                        message: "操作失败" + err
                    });
                });
        },
        open() {
            this.$refs.text.quill
                .getModule("toolbar")
                .addHandler("image", this.imgHandler);
            this.$refs.text.quill
                .getModule("toolbar")
                .addHandler("video", this.videoHandler); // 为视频ICON绑定事件
            this.$refs.text_en.quill
                .getModule("toolbar")
                .addHandler("image", this.imgHandler_en);
            this.$refs.text_en.quill
                .getModule("toolbar")
                .addHandler("video", this.videoHandler_en); // 为视频ICON绑定事件
        },
        upScuccess(res) {
            let vm = this;
            let url = res;

            if (url != null && url.length > 0) {
                // 将文件上传后的URL地址插入到编辑器文本中
                let value = url;
                vm.addRange = vm.$refs[this.textindex].quill.getSelection();
                let index = vm.addRange !== null ? vm.addRange.index : 0;
                value = value.indexOf("http") !== -1 ? value : "http:" + value;
                // if (index != 0) {
                //     vm.$refs.text.quill.insertText(index, "\r", "user");
                //     index += 2;
                // }
                vm.$refs[this.textindex].quill.insertEmbed(
                    index,
                    vm.uploadType,
                    value,
                    "user"
                ); // 调用编辑器的 insertEmbed 方法，插入URL
            } else {
                this.$message.error(`${vm.uploadType}插入失败`);
            }
        },
        // 点击图片ICON触发事件
        imgHandler(state) {
            this.addRange = this.$refs.text.quill.getSelection();
            if (state) {
                this.uploadType = "image";
                this.textindex = "text";
                this.$refs.upload.$refs.inputFile.click();
            }
        },

        // 点击视频ICON触发事件
        videoHandler(state) {
            this.addRange = this.$refs.text.quill.getSelection();
            if (state) {
                this.uploadType = "video";
                this.textindex = "text";
                this.$refs.upload.$refs.inputFile.click();
            }
        },

        // 点击图片ICON触发事件
        imgHandler_en(state) {
            this.addRange = this.$refs.text_en.quill.getSelection();
            if (state) {
                this.uploadType = "image";
                this.textindex = "text_en";
                this.$refs.upload.$refs.inputFile.click();
            }
        },

        // 点击视频ICON触发事件
        videoHandler_en(state) {
            this.addRange = this.$refs.text_en.quill.getSelection();
            if (state) {
                this.uploadType = "video";
                this.textindex = "text_en";
                this.$refs.upload.$refs.inputFile.click();
            }
        },

        resetlist() {
            return this.get("joinlist")
                .then(res => {
                    this.resData = res;
                    return this.ajax("joblist");
                })
                .then(res => {
                    this.jobs = res;
                    this.select = [{ name: "全部", id: "0" }].concat(this.jobs);
                })
                .catch(e => {
                    this.$message({
                        type: "warning",
                        message: "获取列表失败!失败原因:" + e
                    });
                });
        }
    },
    created() {
        this.resetlist();
    },
    computed: {
        tableData: function() {
            if (!+this.value) {
                return this.resData;
            } else {
                let arr = [];
                this.resData.forEach(val => {
                    if (val.place === this.value) {
                        arr.push(val);
                    }
                });
                return arr;
            }
        },
        ...mapState(["website"])
    },
    components: {
        "v-headpanel": Headpanel,
        "v-editor": quillEditor,
        "v-upload": Upload
    }
};
</script>

<style lang="scss">
#joinus {
    .editorcover {
        .el-form-item__content {
            width: 80%;
        }
        .ql-container {
            height: 200px !important;
        }
    }
    .ql-editor {
        font-size: 18px;
        -webkit-user-select: text;
    }
    .upload {
        height: 0;
        width: 0;
        opacity: 0;
        overflow: hidden;
    }
}
</style>

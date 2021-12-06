(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["article"],{1399:function(e,t,l){"use strict";var i=l("ef4a"),a=l.n(i);a.a},"3ad6":function(e,t,l){"use strict";l.r(t);var i=function(){var e=this,t=e.$createElement,l=e._self._c||t;return l("div",{attrs:{id:"article"}},[l("v-headpanel",[l("em",[e._v("文章信息更换")]),e._v("文章内图片尺寸宽度1200px,资讯缩略图尺寸275*150px,活动缩略图尺寸为590*200px,建议用tinypng压缩,没有英文内容的情况下会用中文内容代替,时间格式为 2020-04-02 20:39:42,权重和阅读量请填写数字。 ")]),l("el-button",{staticStyle:{margin:"20px 0"},attrs:{type:"danger",size:"small"},on:{click:e.handleCreate}},[e._v("创建文章信息")]),l("el-select",{staticStyle:{"margin-left":"20px"},attrs:{placeholder:"请选择类型"},model:{value:e.value,callback:function(t){e.value=t},expression:"value"}},e._l(e.select,(function(e){return l("el-option",{key:e.id,attrs:{label:e.name,value:e.id}})})),1),l("el-table",{staticStyle:{width:"100%"},attrs:{data:e.tableData}},[l("el-table-column",{attrs:{type:"expand"},scopedSlots:e._u([{key:"default",fn:function(t){return[l("el-tag",{attrs:{type:"danger"}},[e._v("中文内容")]),l("div",{staticClass:"articleContent",domProps:{innerHTML:e._s(t.row.content)}}),l("el-tag",{attrs:{type:"danger"}},[e._v("英文内容")]),l("div",{staticClass:"articleContent",domProps:{innerHTML:e._s(t.row.content_en)}})]}}])}),l("el-table-column",{attrs:{label:"ID",prop:"id",width:"50px"}}),l("el-table-column",{attrs:{label:"标题",prop:"title"}}),l("el-table-column",{attrs:{label:"英文标题",prop:"title_en"}}),l("el-table-column",{attrs:{label:"描述",prop:"des"}}),l("el-table-column",{attrs:{label:"英文描述",prop:"des_en"}}),l("el-table-column",{attrs:{label:"阅读量",prop:"reader",width:"70px"}}),l("el-table-column",{attrs:{label:"类型",prop:"type",width:"70px"},scopedSlots:e._u([{key:"default",fn:function(t){return[e._v(" "+e._s(e._f("typetab")(t.row.type))+" ")]}}])}),l("el-table-column",{attrs:{label:"权重",prop:"weight",width:"100px",sortable:"","sort-method":e.sort}}),l("el-table-column",{attrs:{label:"时间",prop:"time",width:"100px"}}),l("el-table-column",{attrs:{label:"缩略图",prop:"thumb"},scopedSlots:e._u([{key:"default",fn:function(e){return[l("img",{attrs:{src:e.row.thumb,alt:""}})]}}])}),l("el-table-column",{attrs:{align:"right"},scopedSlots:e._u([{key:"default",fn:function(t){return[l("el-button",{attrs:{size:"mini"},on:{click:function(l){return e.handleEdit(t.$index,t.row)}}},[e._v("修改")]),l("el-button",{attrs:{size:"mini",type:"danger"},on:{click:function(l){return e.handleDelete(t.$index,t.row)}}},[e._v("删除")])]}}])})],1),l("el-dialog",{attrs:{title:"编辑文章信息",visible:e.panelShow,"close-on-click-modal":!1},on:{"update:visible":function(t){e.panelShow=t},opened:e.open}},[l("el-form",{ref:"form",attrs:{model:e.form,inline:!0,rules:e.rules}},[l("el-form-item",{attrs:{label:"标题","label-width":"100px",prop:"title"}},[l("el-input",{model:{value:e.form.title,callback:function(t){e.$set(e.form,"title","string"===typeof t?t.trim():t)},expression:"form.title"}})],1),l("el-form-item",{attrs:{label:"英文标题","label-width":"100px",prop:"title_en"}},[l("el-input",{model:{value:e.form.title_en,callback:function(t){e.$set(e.form,"title_en","string"===typeof t?t.trim():t)},expression:"form.title_en"}})],1),l("el-form-item",{attrs:{label:"描述","label-width":"100px",prop:"des"}},[l("el-input",{model:{value:e.form.des,callback:function(t){e.$set(e.form,"des","string"===typeof t?t.trim():t)},expression:"form.des"}})],1),l("el-form-item",{attrs:{label:"英文描述","label-width":"100px",prop:"des_en"}},[l("el-input",{model:{value:e.form.des_en,callback:function(t){e.$set(e.form,"des_en","string"===typeof t?t.trim():t)},expression:"form.des_en"}})],1),l("el-form-item",{attrs:{label:"阅读量","label-width":"100px",prop:"reader"}},[l("el-input",{model:{value:e.form.reader,callback:function(t){e.$set(e.form,"reader",e._n(t))},expression:"form.reader"}})],1),l("el-form-item",{attrs:{label:"类型","label-width":"100px",prop:"type"}},[l("el-select",{attrs:{placeholder:"请选择"},model:{value:e.form.type,callback:function(t){e.$set(e.form,"type","string"===typeof t?t.trim():t)},expression:"form.type"}},e._l(e.articletype,(function(e){return l("el-option",{key:e.id,attrs:{label:e.name,value:e.id}})})),1)],1),l("el-form-item",{attrs:{label:"权重","label-width":"100px",prop:"weight"}},[l("el-input",{model:{value:e.form.weight,callback:function(t){e.$set(e.form,"weight",e._n(t))},expression:"form.weight"}})],1),l("el-form-item",{attrs:{label:"时间","label-width":"100px",prop:"time"}},[l("el-input",{model:{value:e.form.time,callback:function(t){e.$set(e.form,"time","string"===typeof t?t.trim():t)},expression:"form.time"}})],1),l("el-form-item",{attrs:{label:"缩略图","label-width":"100px",prop:"thumb"}},[l("v-upload",{attrs:{url:e.url},on:{upload:e.updateThumb}},[l("el-button",{attrs:{type:"danger"}},[e._v("上传封面图片")])],1)],1),l("el-form-item",{staticClass:"editorcover",attrs:{label:"中文内容","label-width":"100px",prop:"content"}},[l("v-editor",{ref:"text",staticClass:"editor",attrs:{options:e.editorOption},model:{value:e.form.content,callback:function(t){e.$set(e.form,"content","string"===typeof t?t.trim():t)},expression:"form.content"}})],1),l("el-form-item",{staticClass:"editorcover",attrs:{label:"英文内容","label-width":"100px",prop:"content_en"}},[l("v-editor",{ref:"text_en",staticClass:"editor",attrs:{options:e.editorOption},model:{value:e.form.content_en,callback:function(t){e.$set(e.form,"content_en","string"===typeof t?t.trim():t)},expression:"form.content_en"}})],1)],1),l("div",{staticClass:"dialog-footer",attrs:{slot:"footer"},slot:"footer"},[l("el-button",{on:{click:e.closePanel}},[e._v("取 消")]),l("el-button",{attrs:{type:"primary"},on:{click:e.submit}},[e._v("确 定")])],1)],1),l("v-upload",{ref:"upload",staticClass:"upload1",attrs:{url:e.url,uploadType:e.uploadType},on:{upload:e.upScuccess}})],1)},a=[],r=(l("99af"),l("4160"),l("c975"),l("a434"),l("159b"),l("5530")),n=l("b3bc"),o=l("d443"),s=l("2f62"),d=l("953d"),u=(l("a753"),l("8096"),l("14e1"),{data:function(){return{url:"uploadfile",uploadType:"*",editorOption:{},textindex:"text",type:"create",index:"",panelShow:!1,resData:[],form:{title:"",title_en:"",des:"",des_en:"",reader:0,type:"1",weight:0,time:"",content:"",content_en:""},articletype:[{id:"1",name:"资讯"},{id:"2",name:"活动"}],rules:{title:[{required:!0,message:"请输入标题",trigger:"blur"}],reader:[{required:!0,message:"请输入阅读量",trigger:"blur"}],weight:[{required:!0,message:"请输入权重",trigger:"blur"}],type:[{required:!0,message:"请选择类型",trigger:"change"}],time:[{type:"date",required:!0,message:"请输入时间",trigger:"change"}]},select:[],value:"0"}},methods:{handleEdit:function(e,t){this.form=JSON.parse(JSON.stringify(t)),this.panelShow=!0,this.type="update",this.index=e},handleCreate:function(){this.form={title:"",title_en:"",des:"",des_en:"",reader:0,type:"1",weight:0,time:this.getdate(),content:"",content_en:""},this.panelShow=!0,this.type="create"},handleDelete:function(e,t){var l=this;this.deleteAjax("delarticle",{id:t.id},this).then((function(t){l.tableData.splice(e,1),l.$message({type:"success",message:"删除成功"})}))},closePanel:function(){this.panelShow=!1},submit:function(){var e=this,t="",l=JSON.parse(JSON.stringify(this.form));t="create"===this.type?"createarticle":"updatearticle",this.ajax(t,l).then((function(t){e.resetlist().then((function(t){e.closePanel(),e.$message({type:"success",message:"操作成功"})}))})).catch((function(t){e.$message({type:"error",message:"操作失败"+t})}))},open:function(){this.$refs.text.quill.getModule("toolbar").addHandler("image",this.imgHandler),this.$refs.text.quill.getModule("toolbar").addHandler("video",this.videoHandler),this.$refs.text_en.quill.getModule("toolbar").addHandler("image",this.imgHandler_en),this.$refs.text_en.quill.getModule("toolbar").addHandler("video",this.videoHandler_en),this.$refs["form"].clearValidate()},upScuccess:function(e){var t=this,l=e;if(null!=l&&l.length>0){var i=l;t.addRange=t.$refs[this.textindex].quill.getSelection();var a=null!==t.addRange?t.addRange.index:0;i=-1!==i.indexOf("http")?i:"http:"+i,t.$refs[this.textindex].quill.insertEmbed(a,t.uploadType,i,"user")}else this.$message.error("".concat(t.uploadType,"插入失败"))},updateThumb:function(e){this.form.thumb=e},imgHandler:function(e){this.addRange=this.$refs.text.quill.getSelection(),e&&(this.uploadType="image",this.textindex="text",this.$refs.upload.$refs.inputFile.click())},videoHandler:function(e){this.addRange=this.$refs.text.quill.getSelection(),e&&(this.uploadType="video",this.textindex="text",this.$refs.upload.$refs.inputFile.click())},imgHandler_en:function(e){this.addRange=this.$refs.text_en.quill.getSelection(),e&&(this.uploadType="image",this.textindex="text_en",this.$refs.upload.$refs.inputFile.click())},videoHandler_en:function(e){this.addRange=this.$refs.text_en.quill.getSelection(),e&&(this.uploadType="video",this.textindex="text_en",this.$refs.upload.$refs.inputFile.click())},resetlist:function(){var e=this;return this.get("articlelist").then((function(t){e.resData=t,e.select=[{name:"全部",id:"0"}].concat(e.articletype)})).catch((function(t){e.$message({type:"warning",message:"获取列表失败!失败原因:"+t})}))},sort:function(e,t){var l=+e.weight-+t.weight;return l},getdate:function(){var e=new Date,t=e.getFullYear(),l=e.getMonth()+1,i=e.getDate();return t+"-"+(l<10?"0"+l:l)+"-"+(i<10?"0"+i:i)+" "+e.toTimeString().substr(0,8)}},created:function(){this.resetlist()},computed:Object(r["a"])({tableData:function(){var e=this;if(+this.value){var t=[];return this.resData.forEach((function(l){l.type===e.value&&t.push(l)})),t}return this.resData}},Object(s["c"])(["website"])),components:{"v-headpanel":n["a"],"v-editor":d["quillEditor"],"v-upload":o["a"]},filters:{typetab:function(e){var t=["资讯","活动"];return t[e-1]}}}),c=u,p=(l("1399"),l("2877")),f=Object(p["a"])(c,i,a,!1,null,null,null);t["default"]=f.exports},ef4a:function(e,t,l){}}]);
//# sourceMappingURL=article.475d97a3.js.map
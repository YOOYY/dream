(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["joinus"],{"42af":function(e,t,i){"use strict";var l=i("f720"),a=i.n(l);a.a},"9e78":function(e,t,i){"use strict";i.r(t);var l=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",{attrs:{id:"joinus"}},[i("v-headpanel",[i("em",[e._v("招聘信息更换")]),e._v("删除工作地点将自动删除其所属的招聘信息 ")]),i("el-button",{staticStyle:{"margin-bottom":"20px"},attrs:{type:"danger",size:"small"},on:{click:e.jobCreate}},[e._v("创建工作地点")]),i("el-table",{staticStyle:{width:"100%"},attrs:{data:e.jobs}},[i("el-table-column",{attrs:{label:"ID",prop:"id",width:"100px"}}),i("el-table-column",{attrs:{label:"中文名",prop:"name"}}),i("el-table-column",{attrs:{label:"英文名",prop:"english"}}),i("el-table-column",{attrs:{align:"right"},scopedSlots:e._u([{key:"default",fn:function(t){return[i("el-button",{attrs:{size:"mini"},on:{click:function(i){return e.jobUpdate(t.$index,t.row)}}},[e._v("修改")]),i("el-button",{attrs:{size:"mini",type:"danger"},on:{click:function(i){return e.jobDel(t.$index,t.row)}}},[e._v("删除")])]}}])})],1),i("el-dialog",{attrs:{title:"编辑工作地点",visible:e.jobShow},on:{"update:visible":function(t){e.jobShow=t}}},[i("el-form",{attrs:{model:e.editjobs,inline:""}},[i("el-form-item",{attrs:{label:"中文名","label-width":"100px"}},[i("el-input",{attrs:{autocomplete:"off"},model:{value:e.editjobs.name,callback:function(t){e.$set(e.editjobs,"name","string"===typeof t?t.trim():t)},expression:"editjobs.name"}})],1),i("el-form-item",{attrs:{label:"英文名","label-width":"100px"}},[i("el-input",{attrs:{autocomplete:"off"},model:{value:e.editjobs.english,callback:function(t){e.$set(e.editjobs,"english","string"===typeof t?t.trim():t)},expression:"editjobs.english"}})],1)],1),i("div",{staticClass:"dialog-footer",attrs:{slot:"footer"},slot:"footer"},[i("el-button",{on:{click:e.closePanel}},[e._v("取 消")]),i("el-button",{attrs:{type:"primary"},on:{click:e.submit}},[e._v("确 定")])],1)],1),i("el-button",{staticStyle:{margin:"20px 0"},attrs:{type:"danger",size:"small"},on:{click:e.handleCreate}},[e._v("创建招聘信息")]),i("el-select",{staticStyle:{"margin-left":"20px"},attrs:{placeholder:"请选择工作地点"},model:{value:e.value,callback:function(t){e.value=t},expression:"value"}},e._l(e.select,(function(e){return i("el-option",{key:e.id,attrs:{label:e.name,value:e.id}})})),1),i("el-table",{staticStyle:{width:"100%"},attrs:{data:e.tableData}},[i("el-table-column",{attrs:{type:"expand"},scopedSlots:e._u([{key:"default",fn:function(t){return[i("el-tag",{attrs:{type:"danger"}},[e._v("中文内容")]),i("div",{domProps:{innerHTML:e._s(t.row.content)}}),i("el-tag",{attrs:{type:"danger"}},[e._v("英文内容")]),i("div",{domProps:{innerHTML:e._s(t.row.content_en)}})]}}])}),i("el-table-column",{attrs:{label:"ID",prop:"id",width:"100px"}}),i("el-table-column",{attrs:{label:"职位",prop:"title"}}),i("el-table-column",{attrs:{label:"英文",prop:"english"}}),i("el-table-column",{attrs:{label:"email",prop:"email"}}),i("el-table-column",{attrs:{label:"地点",prop:"jobplace"}}),i("el-table-column",{attrs:{align:"right"},scopedSlots:e._u([{key:"default",fn:function(t){return[i("el-button",{attrs:{size:"mini"},on:{click:function(i){return e.handleEdit(t.$index,t.row)}}},[e._v("修改")]),i("el-button",{attrs:{size:"mini",type:"danger"},on:{click:function(i){return e.handleDelete(t.$index,t.row)}}},[e._v("删除")])]}}])})],1),i("el-dialog",{attrs:{title:"编辑招聘信息",visible:e.panelShow},on:{"update:visible":function(t){e.panelShow=t},opened:e.open}},[i("el-form",{ref:"form",attrs:{model:e.form,inline:!0}},[i("el-form-item",{attrs:{label:"职位","label-width":"100px",prop:"title"}},[i("el-input",{attrs:{autocomplete:"off"},model:{value:e.form.title,callback:function(t){e.$set(e.form,"title","string"===typeof t?t.trim():t)},expression:"form.title"}})],1),i("el-form-item",{attrs:{label:"英文","label-width":"100px",prop:"english"}},[i("el-input",{model:{value:e.form.english,callback:function(t){e.$set(e.form,"english","string"===typeof t?t.trim():t)},expression:"form.english"}})],1),i("el-form-item",{attrs:{label:"邮箱","label-width":"100px",prop:"email"}},[i("el-input",{model:{value:e.form.email,callback:function(t){e.$set(e.form,"email","string"===typeof t?t.trim():t)},expression:"form.email"}})],1),i("el-form-item",{attrs:{label:"地点","label-width":"100px",prop:"place"}},[i("el-select",{attrs:{placeholder:"请选择"},model:{value:e.form.place,callback:function(t){e.$set(e.form,"place","string"===typeof t?t.trim():t)},expression:"form.place"}},e._l(e.jobs,(function(e){return i("el-option",{key:e.id,attrs:{label:e.name,value:e.id}})})),1)],1),i("el-form-item",{staticClass:"editorcover",attrs:{label:"中文内容","label-width":"100px",prop:"content"}},[i("v-editor",{ref:"text",staticClass:"editor",attrs:{options:e.editorOption},model:{value:e.form.content,callback:function(t){e.$set(e.form,"content","string"===typeof t?t.trim():t)},expression:"form.content"}})],1),i("el-form-item",{staticClass:"editorcover",attrs:{label:"英文内容","label-width":"100px",prop:"content_en"}},[i("v-editor",{ref:"text_en",staticClass:"editor",attrs:{options:e.editorOption},model:{value:e.form.content_en,callback:function(t){e.$set(e.form,"content_en","string"===typeof t?t.trim():t)},expression:"form.content_en"}})],1)],1),i("div",{staticClass:"dialog-footer",attrs:{slot:"footer"},slot:"footer"},[i("el-button",{on:{click:e.closePanel}},[e._v("取 消")]),i("el-button",{attrs:{type:"primary"},on:{click:e.submit}},[e._v("确 定")])],1)],1),i("v-upload",{ref:"upload",staticClass:"upload",attrs:{url:e.url,uploadType:e.uploadType},on:{upload:e.upScuccess}})],1)},a=[],n=(i("99af"),i("4160"),i("c975"),i("a434"),i("159b"),i("5530")),o=i("b3bc"),s=i("d443"),r=i("2f62"),c=i("953d"),d=(i("a753"),i("8096"),i("14e1"),{data:function(){return{url:"uploadfile",uploadType:"*",editorOption:{},textindex:"text",type:"create",index:"",panelShow:!1,resData:[],form:{title:"",english:"",email:"",place:"",content:"",content_en:""},jobShow:!1,jobs:[],select:[],editjobs:{name:"",english:""},value:"0"}},methods:{handleEdit:function(e,t){this.form=JSON.parse(JSON.stringify(t)),delete this.form.jobplace,this.panelShow=!0,this.type="update",this.index=e},handleCreate:function(){this.form={title:"",english:"",email:"",place:"",content:""},this.panelShow=!0,this.type="create"},handleDelete:function(e,t){var i=this;this.deleteAjax("deljoin",{id:t.id},this).then((function(t){i.tableData.splice(e,1),i.$message({type:"success",message:"删除成功"})}))},jobUpdate:function(e,t){this.editjobs=JSON.parse(JSON.stringify(t)),this.jobShow=!0,this.index=e,this.type="jobupdate"},jobCreate:function(){this.editjobs={name:"",english:""},this.jobShow=!0,this.type="jobcreate"},jobDel:function(e,t){var i=this;this.deleteAjax("deljob",{id:t.id},this).then((function(e){i.resetlist(),i.$message({type:"success",message:"删除成功"})}))},closePanel:function(){this.panelShow=!1,this.jobShow=!1},submit:function(){var e=this,t="",i={};i="create"===this.type||"update"===this.type?JSON.parse(JSON.stringify(this.form)):JSON.parse(JSON.stringify(this.editjobs)),t="create"===this.type?"createjoin":"update"===this.type?"updatejoin":"jobupdate"===this.type?"updatejob":"createjob",this.ajax(t,i).then((function(t){e.resetlist().then((function(t){e.closePanel(),e.$message({type:"success",message:"操作成功"})}))})).catch((function(t){e.$message({type:"error",message:"操作失败"+t})}))},open:function(){this.$refs.text.quill.getModule("toolbar").addHandler("image",this.imgHandler),this.$refs.text.quill.getModule("toolbar").addHandler("video",this.videoHandler),this.$refs.text_en.quill.getModule("toolbar").addHandler("image",this.imgHandler_en),this.$refs.text_en.quill.getModule("toolbar").addHandler("video",this.videoHandler_en)},upScuccess:function(e){var t=this,i=this.website+e;if(null!=i&&i.length>0){var l=i;t.addRange=t.$refs[this.textindex].quill.getSelection();var a=null!==t.addRange?t.addRange.index:0;l=-1!==l.indexOf("http")?l:"http:"+l,t.$refs[this.textindex].quill.insertEmbed(a,t.uploadType,l,"user")}else this.$message.error("".concat(t.uploadType,"插入失败"))},imgHandler:function(e){this.addRange=this.$refs.text.quill.getSelection(),e&&(this.uploadType="image",this.textindex="text",this.$refs.upload.$refs.inputFile.click())},videoHandler:function(e){this.addRange=this.$refs.text.quill.getSelection(),e&&(this.uploadType="video",this.textindex="text",this.$refs.upload.$refs.inputFile.click())},imgHandler_en:function(e){this.addRange=this.$refs.text_en.quill.getSelection(),e&&(this.uploadType="image",this.textindex="text_en",this.$refs.upload.$refs.inputFile.click())},videoHandler_en:function(e){this.addRange=this.$refs.text_en.quill.getSelection(),e&&(this.uploadType="video",this.textindex="text_en",this.$refs.upload.$refs.inputFile.click())},resetlist:function(){var e=this;return this.get("joinlist").then((function(t){return e.resData=t,e.ajax("joblist")})).then((function(t){e.jobs=t,e.select=[{name:"全部",id:"0"}].concat(e.jobs)})).catch((function(t){e.$message({type:"warning",message:"获取列表失败!失败原因:"+t})}))}},created:function(){this.resetlist()},computed:Object(n["a"])({tableData:function(){var e=this;if(+this.value){var t=[];return this.resData.forEach((function(i){i.place===e.value&&t.push(i)})),t}return this.resData}},Object(r["c"])(["website"])),components:{"v-headpanel":o["a"],"v-editor":c["quillEditor"],"v-upload":s["a"]}}),u=d,p=(i("42af"),i("2877")),f=Object(p["a"])(u,l,a,!1,null,null,null);t["default"]=f.exports},f720:function(e,t,i){}}]);
//# sourceMappingURL=joinus.60dbf0b7.js.map
(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["admin"],{3530:function(e,t,a){"use strict";a.r(t);var n=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{attrs:{id:"Admin"}},[a("v-headpanel",[a("em",[e._v("账户管理")])]),a("el-table",{staticStyle:{width:"100%"},attrs:{data:e.tableData}},[a("el-table-column",{attrs:{label:"ID",prop:"id",width:"100px"}}),a("el-table-column",{attrs:{label:"账户",prop:"name"}}),a("el-table-column",{attrs:{label:"昵称",prop:"nickname"}}),a("el-table-column",{attrs:{align:"right"},scopedSlots:e._u([{key:"default",fn:function(t){return[a("el-button",{attrs:{size:"mini"},on:{click:function(a){return e.handleEdit(t.$index,t.row)}}},[e._v("修改")]),a("el-button",{attrs:{size:"mini",type:"danger"},on:{click:function(a){return e.handleDelete(t.$index,t.row)}}},[e._v("删除")])]}}])},[a("template",{slot:"header"},[e._v(" 操作 ")])],2)],1),a("el-dialog",{attrs:{title:"编辑账户信息",visible:e.panelShow,"close-on-click-modal":!1},on:{"update:visible":function(t){e.panelShow=t},opened:e.openPanel}},[a("el-form",{ref:"form",attrs:{model:e.form,inline:!0,rules:e.rules}},[a("el-form-item",{attrs:{label:"账号","label-width":"100px",prop:"name"}},[a("el-input",{attrs:{autocomplete:"off"},model:{value:e.form.name,callback:function(t){e.$set(e.form,"name","string"===typeof t?t.trim():t)},expression:"form.name"}})],1),a("el-form-item",{attrs:{label:"密码","label-width":"100px",prop:"password"}},[a("el-input",{model:{value:e.form.password,callback:function(t){e.$set(e.form,"password","string"===typeof t?t.trim():t)},expression:"form.password"}})],1),a("el-form-item",{attrs:{label:"昵称","label-width":"100px",prop:"nickname"}},[a("el-input",{model:{value:e.form.nickname,callback:function(t){e.$set(e.form,"nickname","string"===typeof t?t.trim():t)},expression:"form.nickname"}})],1)],1),a("div",{staticClass:"dialog-footer",attrs:{slot:"footer"},slot:"footer"},[a("el-button",{on:{click:e.closePanel}},[e._v("取 消")]),a("el-button",{attrs:{type:"primary"},on:{click:e.submit}},[e._v("确 定")])],1)],1),a("el-button",{staticStyle:{"margin-top":"20px"},attrs:{type:"danger",size:"small"},on:{click:e.handleCreate}},[e._v("创建账户")])],1)},s=[],r=(a("a434"),a("5530")),i=a("b3bc"),l=a("2f62"),o={data:function(){return{tableData:[],panelShow:!1,type:"create",form:{name:"",nickname:"",password:""},rules:{name:[{required:!0,message:"请输入用户名",trigger:"blur"},{min:3,max:11,message:"长度在 3 到 11 个字符",trigger:"blur"}],password:[{required:!0,message:"请输入密码",trigger:"blur"},{min:3,max:11,message:"长度在 3 到 11 个字符",trigger:"blur"}],nickname:[{required:!0,message:"请输入昵称",trigger:"blur"}]}}},methods:{handleEdit:function(e,t){this.rules.password[0].required=!1,this.form=JSON.parse(JSON.stringify(t)),this.panelShow=!0,this.type="update",this.index=e},handleCreate:function(){this.rules.password[0].required=!0,this.form={name:"",nickname:"",password:""},this.panelShow=!0,this.type="create"},handleDelete:function(e,t){var a=this;0!==e?this.deleteAjax("deladmin",{id:t.id},this).then((function(t){a.tableData.splice(e,1),a.$message({type:"success",message:"删除成功"})})):this.$message({type:"error",message:"不可删除"})},closePanel:function(){this.panelShow=!1},openPanel:function(){this.$refs["form"].clearValidate()},submit:function(){var e=this;this.$refs["form"].validate((function(t){if(!t)return e.$message({type:"warning",message:"格式错误!"}),!1;var a="",n=JSON.parse(JSON.stringify(e.form));"create"===e.type?a="createadmin":(a="updateadmin",n.password||delete n.password),e.ajax(a,n).then((function(t){console.log(n),"create"===e.type?(n.id=t.id,e.tableData.push(n)):e.tableData.splice(e.index,1,n),e.panelShow=!1,e.$message({type:"success",message:"操作成功"})})).catch((function(t){e.$message({type:"error",message:"操作失败"+t})}))}))}},computed:Object(r["a"])({},Object(l["c"])(["website"])),created:function(){var e=this;this.get("adminlist").then((function(t){e.tableData=t})).catch((function(t){e.$message({type:"warning",message:"获取列表失败!失败原因:"+t})}))},components:{"v-headpanel":i["a"]}},m=o,c=a("2877"),p=Object(c["a"])(m,n,s,!1,null,null,null);t["default"]=p.exports}}]);
//# sourceMappingURL=admin.155b5395.js.map
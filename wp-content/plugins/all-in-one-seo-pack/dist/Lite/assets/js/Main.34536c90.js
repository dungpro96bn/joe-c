import{m as d}from"./links.4e9269a4.js";import{a as l}from"./addons.b699e1f7.js";import{o,c as n,r as f,b as _,w as h,C as g}from"./vue.runtime.esm-bundler.1bf81f69.js";import{_ as e}from"./_plugin-vue_export-helper.4292a25a.js";import"./index.cd7fac8b.js";import"./Caret.0b57d359.js";/* empty css                                            *//* empty css                                              */import"./default-i18n.41786823.js";import"./constants.a78fc4cb.js";import{R as x,a as $}from"./RequiresUpdate.7eecf707.js";/* empty css                                              */import{C as v}from"./Index.2ec2eecb.js";import b from"./Redirects.6175b6d8.js";import"./isArrayLikeObject.76f0d098.js";import"./upperFirst.65f07810.js";import"./_stringToArray.4de3b1f3.js";import"./toString.16b91dfe.js";import"./RequiresUpdate.f2810cb1.js";import"./license.1ec1762f.js";import"./allowed.11aae9a6.js";/* empty css             */import"./params.f0608262.js";import"./Ellipse.ca34fa71.js";import"./Header.7c7dbb46.js";import"./LicenseKeyBar.1b5c44d1.js";import"./LogoGear.8ca170d6.js";import"./AnimatedNumber.8631e13c.js";import"./numbers.cd5a4c70.js";import"./Logo.1d111e7b.js";import"./Support.b047d09d.js";import"./Tabs.23866df2.js";import"./TruSeoScore.177d3103.js";import"./Information.379a165f.js";import"./Slide.c4e68d01.js";import"./Date.f586917f.js";import"./Exclamation.c5d4ba67.js";import"./Url.9f758d2d.js";import"./Gear.a693d6ea.js";import"./Redirects.684b50e3.js";import"./Index.4b5cac99.js";import"./JsonValues.870a4901.js";import"./strings.03d6ae29.js";import"./isString.197b32a2.js";import"./ProBadge.5f8b58d0.js";import"./External.95afe855.js";import"./Checkbox.1a2fc75a.js";import"./Checkmark.20d31f86.js";import"./Row.1358a527.js";import"./Tooltip.fc81232d.js";import"./Plus.bd65010b.js";import"./Blur.7ed1854b.js";import"./Card.37225977.js";import"./Table.9759233a.js";import"./Index.632f6288.js";import"./RequiredPlans.b62db276.js";import"./AddonConditions.9547b419.js";const y={};function S(t,r){return o(),n("div")}const R=e(y,[["render",S]]),w={};function A(t,r){return o(),n("div")}const C=e(w,[["render",A]]),B={};function E(t,r){return o(),n("div")}const L=e(B,[["render",E]]),T={};function k(t,r){return o(),n("div")}const M=e(T,[["render",k]]),U={};function q(t,r){return o(),n("div")}const N=e(U,[["render",q]]);const D={setup(){return{redirectsStore:d()}},components:{CoreMain:v,FullSiteRedirect:R,ImportExport:C,Logs:L,Logs404:M,Redirects:b,Settings:N},mixins:[x,$],data(){return{strings:{pageName:this.$t.__("Redirects",this.$td)}}},computed:{showSaveButton(){return this.$route.name!=="redirects"&&this.$route.name!=="groups"&&this.$route.name!=="logs-404"&&this.$route.name!=="logs"&&this.$route.name!=="import-export"},excludeTabs(){var r,m,p,s,i,c,a,u;const t=l.isActive("aioseo-redirects")?this.getExcludedUpdateTabs("aioseo-redirects"):this.getExcludedActivationTabs("aioseo-redirects");return(p=(m=(r=this.redirectsStore.options)==null?void 0:r.logs)==null?void 0:m.log404)!=null&&p.enabled||t.push("logs-404"),(!((c=(i=(s=this.redirectsStore.options)==null?void 0:s.logs)==null?void 0:i.redirects)!=null&&c.enabled)||((u=(a=this.redirectsStore.options)==null?void 0:a.main)==null?void 0:u.method)==="server")&&t.push("logs"),t}}};function F(t,r,m,p,s,i){const c=f("core-main");return o(),_(c,{"page-name":s.strings.pageName,"show-save-button":i.showSaveButton,"exclude-tabs":i.excludeTabs},{default:h(()=>[(o(),_(g(t.$route.name)))]),_:1},8,["page-name","show-save-button","exclude-tabs"])}const zt=e(D,[["render",F]]);export{zt as default};

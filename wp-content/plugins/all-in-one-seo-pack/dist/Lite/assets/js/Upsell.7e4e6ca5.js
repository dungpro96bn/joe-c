import{S as f}from"./Profile.9b5df52d.js";import{r as c,o,c as h,b as l,w as r,g as i,t as a}from"./vue.runtime.esm-bundler.1bf81f69.js";import{_}from"./_plugin-vue_export-helper.4292a25a.js";import{C as m}from"./Index.632f6288.js";const g={components:{SvgDannieProfile:f},props:{src:String,size:{required:!0,type:Number}}},v=["src","width","height"];function y(s,u,t,p,e,d){const n=c("svg-dannie-profile");return t.src?(o(),h("img",{key:0,src:t.src,width:t.size,height:t.size,alt:"avatar",loading:"lazy",decoding:"async",class:"aioseo-user-avatar"},null,8,v)):(o(),l(n,{key:1,width:t.size,height:t.size,class:"aioseo-user-avatar aioseo-user-avatar--dannie"},null,8,["width","height"]))}const w=_(g,[["render",y],["__scopeId","data-v-4705aae0"]]),$={components:{Cta:m},props:{parentComponentContext:String},data(){return{strings:{ctaHeader:this.$t.sprintf(this.$t.__("SEO Revisions is only available for licensed %1$s %2$s users.",this.$td),"AIOSEO","Pro"),ctaDescription:this.$t.__("Our powerful revisions feature provides a valuable record of SEO updates, allowing you to monitor the effectiveness of your SEO efforts and make informed decisions.",this.$td),ctaFeatures:[this.$t.__("Improved SEO strategy",this.$td),this.$t.__("Easy to manage revisions",this.$td),this.$t.__("Greater transparency and accountability",this.$td),this.$t.__("Historical record of optimization efforts",this.$td)],ctaButtonText:this.$t.sprintf(this.$t.__("Upgrade to %1$s and Unlock SEO Revisions",this.$td),"Pro")}}}};function x(s,u,t,p,e,d){const n=c("cta");return o(),l(n,{"cta-link":s.$links.getPricingUrl("seo-revisions","seo-revisions",t.parentComponentContext),"button-text":e.strings.ctaButtonText,"learn-more-link":s.$links.getUpsellUrl("seo-revisions",t.parentComponentContext,"home"),"feature-list":e.strings.ctaFeatures},{"header-text":r(()=>[i(a(e.strings.ctaHeader),1)]),description:r(()=>[i(a(e.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list"])}const E=_($,[["render",x]]);export{E as S,w as U};
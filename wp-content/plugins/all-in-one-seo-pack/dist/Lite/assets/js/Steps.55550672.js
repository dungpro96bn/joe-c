import{e as S,u as h,f as k}from"./links.4e9269a4.js";import{j as C,_ as b}from"./default-i18n.41786823.js";import{u as w,a as z}from"./Wizard.5b4d0206.js";import{r as d,o as n,c as i,t,i as m,b as A,w as r,g as u,a,d as _,f as M,u as x}from"./vue.runtime.esm-bundler.1bf81f69.js";import{_ as T}from"./_plugin-vue_export-helper.4292a25a.js";import"./index.cd7fac8b.js";import"./Caret.0b57d359.js";/* empty css                                            *//* empty css                                              */import"./constants.a78fc4cb.js";const W={setup(){const{strings:o}=w();return{optionsStore:S(),rootStore:h(),strings:o}},mixins:[z]},B={class:"aioseo-wizard-close-and-exit"},E=["href"],$={class:"aioseo-modal-body"},L=["innerHTML"],N={class:"actions"};function V(o,e,l,s,f,g){const y=d("svg-close"),p=d("base-button"),v=d("core-modal");return n(),i("div",B,[o.$isPro||s.optionsStore.options.advanced.usageTracking?(n(),i("a",{key:0,href:s.rootStore.aioseo.urls.aio.dashboard},t(s.strings.closeAndExit),9,E)):(n(),i("a",{key:1,href:"#",onClick:e[0]||(e[0]=m(c=>o.showModal=!0,["prevent"]))},t(s.strings.closeAndExit),1)),o.showModal&&!o.$isPro?(n(),A(v,{key:2,onClose:e[3]||(e[3]=c=>o.showModal=!1)},{header:r(()=>[u(t(s.strings.buildABetterAioseo)+" ",1),a("button",{class:"close",onClick:e[2]||(e[2]=m(c=>o.showModal=!1,["stop"]))},[_(y,{onClick:e[1]||(e[1]=c=>o.showModal=!1)})])]),body:r(()=>[a("div",$,[a("div",{class:"reset-description",innerHTML:s.strings.getImprovedFeatures},null,8,L),a("div",N,[_(p,{tag:"a",href:s.rootStore.aioseo.urls.aio.dashboard,type:"gray",size:"medium"},{default:r(()=>[u(t(s.strings.noThanks),1)]),_:1},8,["href"]),_(p,{type:"blue",size:"medium",loading:o.loading,onClick:o.processOptIn},{default:r(()=>[u(t(s.strings.yesCountMeIn),1)]),_:1},8,["loading","onClick"])])])]),_:1})):M("",!0)])}const J=T(W,[["render",V]]);const I={class:"aioseo-wizard-steps"},K={__name:"Steps",setup(o){const e="all-in-one-seo-pack",l=k(),s=C(b("Step %1$s of %2$s",e),l.getCurrentStageCount,l.getTotalStageCount);return(f,g)=>(n(),i("div",I,t(x(s)),1))}};export{J as W,K as _};

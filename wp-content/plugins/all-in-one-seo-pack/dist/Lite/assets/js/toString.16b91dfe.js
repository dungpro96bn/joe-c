import{b as c,c as l,S as i,a as f}from"./isArrayLikeObject.76f0d098.js";var p="[object Symbol]";function y(n){return typeof n=="symbol"||c(n)&&l(n)==p}function m(n,t){for(var r=-1,o=n==null?0:n.length,s=Array(o);++r<o;)s[r]=t(n[r],r,n);return s}var b=1/0,e=i?i.prototype:void 0,u=e?e.toString:void 0;function a(n){if(typeof n=="string")return n;if(f(n))return m(n,a)+"";if(y(n))return u?u.call(n):"";var t=n+"";return t=="0"&&1/n==-b?"-0":t}function _(n){return n==null?"":a(n)}export{m as a,a as b,y as i,_ as t};

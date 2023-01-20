import{r as o,h as i,H as t,a as n}from"./p-d15ec307.js";import{i as s,b as r,g as e,c,d as a}from"./p-40ae2aa7.js";const l=o=>{if(1===o.nodeType){if("script"===o.nodeName.toLowerCase())return!1;for(let i=0;i<o.attributes.length;i++){const t=o.attributes[i].name;if(s(t)&&0===t.toLowerCase().indexOf("on"))return!1}for(let i=0;i<o.childNodes.length;i++)if(!l(o.childNodes[i]))return!1}return!0},h=new Map,d=new Map;let f;const u=class{constructor(i){o(this,i),this.iconName=null,this.inheritedAttributes={},this.isVisible=!1,this.mode=m(),this.lazy=!1,this.sanitize=!0,this.hasAriaHidden=()=>{const{el:o}=this;return o.hasAttribute("aria-hidden")&&"true"===o.getAttribute("aria-hidden")}}componentWillLoad(){this.inheritedAttributes=r(this.el,["aria-label"])}connectedCallback(){this.waitUntilVisible(this.el,"50px",(()=>{this.isVisible=!0,this.loadIcon()}))}disconnectedCallback(){this.io&&(this.io.disconnect(),this.io=void 0)}waitUntilVisible(o,i,t){if(this.lazy&&"undefined"!=typeof window&&window.IntersectionObserver){const n=this.io=new window.IntersectionObserver((o=>{o[0].isIntersecting&&(n.disconnect(),this.io=void 0,t())}),{rootMargin:i});n.observe(o)}else t()}loadIcon(){if(this.isVisible){f||(f=new DOMParser);const o=e(this);if(o)if(h.has(o))this.svgContent=h.get(o);else if(o.startsWith("data:")){const i=f.parseFromString(o,"text/html").body.querySelector("svg");this.svgContent=null!==i?i.outerHTML:""}else((o,i)=>{let t=d.get(o);if(!t){if("undefined"==typeof fetch||"undefined"==typeof document)return h.set(o,""),Promise.resolve();t=fetch(o).then((t=>{if(t.ok)return t.text().then((t=>{t&&!1!==i&&(t=(o=>{const i=document.createElement("div");i.innerHTML=o;for(let o=i.childNodes.length-1;o>=0;o--)"svg"!==i.childNodes[o].nodeName.toLowerCase()&&i.removeChild(i.childNodes[o]);const t=i.firstElementChild;if(t&&"svg"===t.nodeName.toLowerCase()){const o=t.getAttribute("class")||"";if(t.setAttribute("class",(o+" s-ion-icon").trim()),l(t))return i.innerHTML}return""})(t)),h.set(o,t||"")}));h.set(o,"")})),d.set(o,t)}return t})(o,this.sanitize).then((()=>this.svgContent=h.get(o)))}const o=this.iconName=c(this.name,this.icon,this.mode,this.ios,this.md);o&&(this.ariaLabel=o.replace(/\-/g," "))}render(){const{iconName:o,ariaLabel:n,el:s,inheritedAttributes:r}=this,e=this.mode||"md",c=this.flipRtl||o&&(o.indexOf("arrow")>-1||o.indexOf("chevron")>-1)&&!1!==this.flipRtl;return i(t,Object.assign({"aria-label":void 0===n||this.hasAriaHidden()?null:n,role:"img",class:Object.assign(Object.assign({[e]:!0},b(this.color)),{[`icon-${this.size}`]:!!this.size,"flip-rtl":!!c&&a(s)})},r),i("div",this.svgContent?{class:"icon-inner",innerHTML:this.svgContent}:{class:"icon-inner"}))}static get assetsDirs(){return["svg"]}get el(){return n(this)}static get watchers(){return{name:["loadIcon"],src:["loadIcon"],icon:["loadIcon"]}}},m=()=>"undefined"!=typeof document&&document.documentElement.getAttribute("mode")||"md",b=o=>o?{"ion-color":!0,[`ion-color-${o}`]:!0}:null;u.style=":host{display:inline-block;width:1em;height:1em;contain:strict;fill:currentColor;-webkit-box-sizing:content-box !important;box-sizing:content-box !important}:host .ionicon{stroke:currentColor}.ionicon-fill-none{fill:none}.ionicon-stroke-width{stroke-width:32px;stroke-width:var(--ionicon-stroke-width, 32px)}.icon-inner,.ionicon,svg{display:block;height:100%;width:100%}:host(.flip-rtl) .icon-inner{-webkit-transform:scaleX(-1);transform:scaleX(-1)}:host(.icon-small){font-size:18px !important}:host(.icon-large){font-size:32px !important}:host(.ion-color){color:var(--ion-color-base) !important}:host(.ion-color-primary){--ion-color-base:var(--ion-color-primary, #3880ff)}:host(.ion-color-secondary){--ion-color-base:var(--ion-color-secondary, #0cd1e8)}:host(.ion-color-tertiary){--ion-color-base:var(--ion-color-tertiary, #f4a942)}:host(.ion-color-success){--ion-color-base:var(--ion-color-success, #10dc60)}:host(.ion-color-warning){--ion-color-base:var(--ion-color-warning, #ffce00)}:host(.ion-color-danger){--ion-color-base:var(--ion-color-danger, #f14141)}:host(.ion-color-light){--ion-color-base:var(--ion-color-light, #f4f5f8)}:host(.ion-color-medium){--ion-color-base:var(--ion-color-medium, #989aa2)}:host(.ion-color-dark){--ion-color-base:var(--ion-color-dark, #222428)}";export{u as ion_icon}
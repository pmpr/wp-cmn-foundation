(()=>{"use strict";const e=class{};const t=class extends e{alert(e,t={}){"string"==typeof t&&(t={content:t}),t=PRHelper.getFormat().parseArgs(t,{type:"warning",content:"",replace:!0});const s=PRHelper.getHTML();if(PRHelper.getType().isEmpty(t.content))!0===t.replace&&s.empty(e);else{let r=s.createElement(`<div class="alert alert-${t.type}" role="alert">${t.content}</div>`);s.fadeIn(r,{start:()=>{t.replace?s.replace(r,e):s.append(r,e)}})}}};const s=class extends e{onSubmit(e={}){e=PRHelper.getFormat().parseArgs(e,{form:"",error:null,success:null,action:"",messageWrapper:"",removeForm:!1,clear:!0});const t=this,s=e.messageWrapper,r=PRHelper.getHTML();let n=e.error,l=e.success;PRHelper.getHook().on("submit",(function(a){a.preventDefault();const o=r.getTarget(a,"form");if(!r.isElement(o))return!1;if(t.removeErrors(o,s),!r.hasClass(o,"active")){"function"!=typeof l&&(l=t=>{if(e.removeForm)r.fadeOut(o,(()=>{o.remove()}),"fast");else if(e.clear){let e=r.getElements("input, textarea, select",o);PRHelper.getType().each(e,(e=>{r.setValue(e,"")}))}r.fadeIn(s,{start:()=>{r.replace(t,s)}})}),"function"!=typeof n&&(n=e=>{t.showErrors(o,e,s)});const a=r.getElement("[type=submit]",o);r.addClass(o,"active"),r.setElementActivity(a,!1),PRHelper.getRequest().ajax(e.action).onSuccess(l).onError(n).onFinally((()=>{r.removeClass(o,"active"),r.setElementActivity(a,!0)})).addNonce().send(r.serializeForm(o))}}),e.form)}loadForm(e,t,s){const r=PRHelper.getHTML();(e=r.getElements(e)).forEach((e=>{PRHelper.getRequest().ajax(r.getData(e,"action")).addNonce().onSuccess((s=>{"string"==typeof s&&r.fadeIn(e,{start:()=>{r.replace(s,e),"function"==typeof t&&t(r.getElement("form",e))}})})).onError((t=>{r.fadeIn(e,{start:()=>{r.replace(t,e)}}),"function"==typeof s&&s()})).send()}))}removeErrors(e,t=null){const s=PRHelper.getHTML(),r=s.getElement(".is-invalid",e);s.removeClass(r,"is-invalid"),(t=s.getElement(t))&&s.setText(t,"")}showErrors(e,t,s=null){const r=PRHelper.getHTML(),n=PRHelper.getType();if(!n.isEmpty(t)){let l,a,o,c=[];if("object"==typeof t)for(a in t)if(l=t[a],o=r.getElement(`[name=${a}]`,e),r.isElement(o)){const e=o.closest(".pr-field");r.isElement(e)?PRHelper.getForm().showFieldMessage(e,l):c.push(l)}else c.push(l);else c=t;s=r.getElement(s),r.isElement(s)&&!n.isEmpty(c)&&r.fadeIn(s,{start:()=>{"string"==typeof c?PRFrontendHelper.getHTML().alert(s,c):n.isIterable(c)&&n.each(c,(e=>{PRFrontendHelper.getHTML().alert(s,e)}))}})}}};const r=class{instances={};getHelperInstance(e){let t=null;return t=e in this.instances?this.instances[t]:new e,t}};const n=new class extends r{getForm(){return this.getHelperInstance(s)}getHTML(){return this.getHelperInstance(t)}};window.PRFrontendHelper=n})();
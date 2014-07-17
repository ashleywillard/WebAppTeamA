(function(jQuery){jQuery.fn.__bind__=jQuery.fn.bind;jQuery.fn.__unbind__=jQuery.fn.unbind;jQuery.fn.__find__=jQuery.fn.find;var hotkeys={verison:'0.7.7',override:/keydown|keypress|keyup/g,triggersMap:{},specialKeys:{27:'esc',9:'tab',32:'space',13:'return',8:'backspace',145:'scroll',20:'capslock',144:'numlock',19:'pause',45:'insert',36:'home',46:'del',35:'end',33:'pageup',34:'pagedown',37:'left',38:'up',39:'right',40:'down',112:'f1',113:'f2',114:'f3',115:'f4',116:'f5',117:'f6',118:'f7',119:'f8',120:'f9',121:'f10',122:'f11',123:'f12'},firefoxNumPad:{96:'0',97:'1',98:'2',99:'3',100:'4',101:'5',102:'6',103:'7',104:'8',105:'9'},shiftNums:{"`":"~","1":"!","2":"@","3":"#","4":"$","5":"%","6":"^","7":"&","8":"*","9":"(","0":")","-":"_","=":"+",";":":","'":"\"",",":"<",".":">","/":"?","\\":"|"},newTrigger:function(type,combi,callback){var result={};result[type]={};result[type][combi]={cb:callback,propagate:true,disableInInput:false};return result}};jQuery.fn.find=function(selector){this.query=selector;return jQuery.fn.__find__.apply(this,arguments)};jQuery.fn.unbind=function(type,combi,fn){if(jQuery.isFunction(combi)){fn=combi;combi=null}if(combi&&typeof combi==='string'){var selectorId=((this.prevObject&&this.prevObject.query)||(this[0].id&&this[0].id)||this[0]).toString();type=type.split(' ');for(var x=0;x<type.length;x++){delete hotkeys.triggersMap[selectorId][type[x]][combi]}}return this.__unbind__(type,fn)};jQuery.fn.bind=function(type,data,fn){var handle=type.match(hotkeys.override);if(jQuery.isFunction(data)||!handle){return this.__bind__(type,data,fn)}else{var result=null,pass2jq=jQuery.trim(type.replace(hotkeys.override,''));if(typeof data==="string"){data={'combi':data}}if(data.combi){for(var x=0;x<handle.length;x++){var eventType=handle[x];var combi=data.combi.toLowerCase(),trigger=hotkeys.newTrigger(eventType,combi,fn),selectorId=((this.prevObject&&this.prevObject.query)||(this[0].id&&this[0].id)||this[0]).toString();trigger[eventType][combi].propagate=data.propagate;trigger[eventType][combi].disableInInput=data.disableInInput;if(!hotkeys.triggersMap[selectorId]){hotkeys.triggersMap[selectorId]=trigger}else if(!hotkeys.triggersMap[selectorId][eventType]){hotkeys.triggersMap[selectorId][eventType]=trigger[eventType]}else{hotkeys.triggersMap[selectorId][eventType][combi]=trigger[eventType][combi]}result=this.each(function(){var jqElem=jQuery(this);if(jqElem.attr('hkId')&&jqElem.attr('hkId')!==selectorId){selectorId=jqElem.attr('hkId')+";"+selectorId}jqElem.attr('hkId',selectorId);jQuery.event.add(this,eventType,hotkeys.handler)})}}if(pass2jq){result=this.__bind__(pass2jq,data,fn)}return result}};hotkeys.findElement=function(elem){if(!jQuery(elem).attr('hkId')){if(jQuery.browser.opera||jQuery.browser.safari){while(!jQuery(elem).attr('hkId')&&elem.parentNode){elem=elem.parentNode}}}return elem};hotkeys.handler=function(event){var target=hotkeys.findElement(event.currentTarget),jTarget=jQuery(target),ids=jTarget.attr('hkId');if(ids){ids=ids.split(';');var code=event.which,type=event.type,special=hotkeys.specialKeys[code],character=!special&&String.fromCharCode(code).toLowerCase(),shift=event.shiftKey,ctrl=event.ctrlKey,alt=event.altKey||event.originalEvent.altKey,mapPoint=null;if(jQuery.browser.mozilla){if(code>=96&&code<=105){character=hotkeys.firefoxNumPad[code]}}for(var x=0;x<ids.length;x++){if(hotkeys.triggersMap[ids[x]][type]){mapPoint=hotkeys.triggersMap[ids[x]][type];break}}if(mapPoint){var trigger;if(!shift&&!ctrl&&!alt){trigger=mapPoint[special]||(character&&mapPoint[character])}else{var modif='';if(alt){modif+='alt+'}if(ctrl){modif+='ctrl+'}if(shift){modif+='shift+'}trigger=mapPoint[modif+special];if(!trigger){if(character){trigger=mapPoint[modif+character]||mapPoint[modif+hotkeys.shiftNums[character]]}}}if(trigger){if(trigger.disableInInput){var elem=jQuery(event.target);if(jTarget.is("input")||jTarget.is("textarea")||elem.is("input")||elem.is("textarea")){return true}}trigger.cb(event);if(!trigger.propagate){event.stopPropagation();event.preventDefault()}return trigger.propagate}}return true}};window.hotkeys=hotkeys;return jQuery})(jQuery);
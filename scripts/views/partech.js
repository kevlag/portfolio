app.Views=app.Views||{},function(){"use strict";app.Views.partech=Backbone.View.extend({el:$(".case-study-container"),caseStudyContainer:$(".case-study-container"),caseStudyElem:$('section[data-case-study="partech"]'),template:"",title:"Partech",name:"partech",dragCursorPartech:$(".dragCursorPartech"),partechScreen:$("#partechScreenImg"),anchorsPositions:[],anchorsName:"partech",dragScreen:function(){var a=this,b=Math.round(a.dragCursorPartech.width()),c=$(".toDrag").width()-22;(app.homeView.windowWidth-c)/2;var f,g,h=990/c;a.dragCursorPartech.on("mousedown",function(){g=parseInt(a.dragCursorPartech.css("margin-left").split("px")[0]),f=parseInt(a.dragCursorPartech.css("margin-left").split("px")[0]),$(document).on("mousemove",function(d){var e=$(window).width();return f=e>c?d.clientX-(e-c)/2:d.clientX,f>c-b?(a.dragCursorPartech.css("margin-left",c-b+"px"),!1):0>f?(a.dragCursorPartech.css("margin-left","0px"),!1):(a.dragCursorPartech.css("margin-left",f+"px"),a.partechScreen.css("margin-left",-f/h+"px"),void 0)}),$(document).on("mouseup",function(){f=parseInt(a.dragCursorPartech.css("margin-left").split("px")[0]),$(document).unbind("mouseup"),$(document).unbind("mousemove"),a.dragCursorPartech.css("margin-left",f+"px"),a.partechScreen.css("margin-left",-f/h+"px")})})},refreshAnchors:function(){this.anchorsPositions=[$("#partech-introduction").offset().top-1,$("#partech-client").offset().top-1,$("#partech-dragScreen").offset().top-1,$("#partech-sketch").offset().top-1,$("#partech-mobile").offset().top-1,$("#partech-ui").offset().top-1]},initialize:function(){$("#partechProject .enter-button").on("click",this.enterProjectAnim)},enterProjectAnim:function(){var b=this;app.homeView.disableSlider(),$(".border").removeClass("close"),$(".border").addClass("open"),app.homeView.disableSlider(),$(".partechEnterLayout").addClass("active"),$(".partechEnterLayout").bind("webkitTransitionEnd mozTransitionEnd msTransitionEnd oTransitionEnd transitionend",function(){$(this).unbind("webkitTransitionEnd mozTransitionEnd msTransitionEnd oTransitionEnd transitionend"),app.router.navigate("/"+b.getName()+"/case-study",{trigger:!1}),app.homeView.homeProjectsContainer.css("display","none"),b.caseStudyElem.css({display:"block"}),setTimeout(function(){$("#partech-introduction").addClass("active"),clearTimeout(this)},100),b.enterProject()})},leaveProject:function(){var a=this;$(".partechEnterLayout").removeClass("active"),$("#partech-introduction").removeClass("active"),app.homeView.homeProjectsContainer.css("display","block"),$(".pagination.partech").removeClass("active"),a.caseStudyElem.css("display","none"),$("body").addClass("userSelect")},enterFromRouter:function(){$(".border").removeClass("close"),$(".border").addClass("open"),this.caseStudyElem.css({display:"block"}),this.enterProject(),app.homeView.homeProjectsContainer.css("display","none"),$("#partech-introduction").addClass("active")},enterProject:function(){$("body").removeClass("userSelect"),$(".button-menu").removeClass("open"),$(".button-menu").addClass("close"),app.setCaseStudyActive(!0),$("body").removeClass("userSelect"),$(".pagination.partech").addClass("active"),app.initScrollAnims(),this.dragScreen(),this.refreshAnchors(),app.refreshAnchors()},getName:function(){return this.name}})}();
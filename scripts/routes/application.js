app.Routers=app.Routers||{},function(){"use strict";app.Routers.ApplicationRouter=Backbone.Router.extend({routes:{":project":"projectHandler",":project/case-study":"caseStudyHandler"},projectHandler:function(a){app.homeView.isValidProjectName(a)&&(app.activeProjectView&&app.activeCaseStudy&&app.leaveProject(),this.loadView(a),app.homeView.slideToProject(a))},caseStudyHandler:function(a){return app.isCaseStudyActive()&&app.activeProjectView.leaveProject(),app.activeProjectView&&app.activeProjectView.name==a?(app.setCaseStudyActive(!0),app.activeProjectView.enterProjectAnim(),!0):(this.loadView(a),app.activeProjectView.enterFromRouter(),void 0)},loadView:function(a){switch(a){case"social-coke":app.loadView(new app.Views.socialCoke);break;case"partech":app.loadView(new app.Views.partech);break;case"the-whole":app.loadView(new app.Views.theWhole);break;case"100ansdetour":app.loadView(new app.Views._100ansDeTour);break;default:app.loadView(null)}}})}();
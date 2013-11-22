/*global kevinPortfolio, Backbone*/

kevinPortfolio.Routers = kevinPortfolio.Routers || {};

(function () {
    'use strict';

    kevinPortfolio.Routers.ApplicationRouter = Backbone.Router.extend({

		routes:{
			':project':'projectHandler',
			':project/case-study':'caseStudyHandler'
		},
		projectHandler: function(project){
			if(kevinPortfolio.homeView.isValidProjectName(project)){
				this.loadView(project);
				if(kevinPortfolio.homeView.projectOpenned){
					kevinPortfolio.homeView.closeProjectAnim();
				}
				kevinPortfolio.homeView.slideToProject(project);
			};
		},
		caseStudyHandler:function(project){
/*			if(kevinPortfolio.homeView.isValidProjectName(project)){
				if(kevinPortfolio.homeView.projectOpenned){
					kevinPortfolio.homeView.closeProjectAnim();
					console.log('close-project');
					kevinPortfolio.closeProject();
				}
				this.loadView(project);
				kevinPortfolio.homeView.slideToProject(project);
				kevinPortfolio.homeView.enterProjectAnim();
			};*/
		},
		loadView: function(project){
			switch(project){
				case 'social-coke':
					kevinPortfolio.loadView(new kevinPortfolio.Views.socialCoke());
				break;
				case 'partech':
					kevinPortfolio.loadView(new kevinPortfolio.Views.partech());
				break;
				case 'the-whole':
					kevinPortfolio.loadView(new kevinPortfolio.Views.theWhole());
				break;
				case '100ansdetour':
					kevinPortfolio.loadView(new kevinPortfolio.Views._100ansDeTour());
				break;
				default:
					kevinPortfolio.loadView(null);
				break; 
			}
		}
    });

})();

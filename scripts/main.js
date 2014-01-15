/*global app, $*/


window.app = {
    Models: {},
    Collections: {},
    Views: {},
    Routers: {},
    homeView: null,
    activeProjectView: null,
    activeCaseStudy: false,

    init: function () {
        'use strict';
        this.homeView = new this.Views.HomeView();
        this.router = new this.Routers.ApplicationRouter();
        Backbone.history.start();
        
        $('#home').addClass('entered');
        $('#borderTop').removeClass('open');
        $('#borderBottom').removeClass('open');
        $('#borderLeft').removeClass('open');
        $('#borderRight').removeClass('open');     
        $('#borderTop').addClass('close');
        $('#borderBottom').addClass('close');
        $('#borderLeft').addClass('close');
        $('#borderRight').addClass('close');

    },

    //Charge la vu provenant du router
    loadView: function(pView) {

        this.activeProjectView = pView;

        return this;

    },
    isCaseStudyActive: function() {
        return this.activeCaseStudy;
    },
    setCaseStudyActive: function(param) {
        this.activeCaseStudy = param;
        return true;
    },
    getActiveView: function(){
        return this.activeProjectView;
    },

    // Animation scroll de la page active
    positionsArticle: [],
    articles: [],
    initScrollAnims: function(){

        var that = this;

        this.articles = [];
        this.positionsArticle = [];

        this.articles = this.activeProjectView.caseStudyElem.find('.animation-on-scroll');

        _.each(this.articles, function(article){

            $article = $(article);
            that.positionsArticle.push($article.offset().top + $article.height() + parseInt($article.attr('data-start-margin')));

        });

        $(window).on('scroll', function(){

            _.each(that.positionsArticle, function(positionArticle, key){
                if(positionArticle<$(document).scrollTop() + that.homeView.windowHeight){

                    $(that.articles[key]).addClass('active');

                    delete that.positionsArticle[key];

                }

            });

        });
    },

};

$(document).ready(function () {
    'use strict';
    app.init();

    setTimeout(function() {
      
      $('#loader').fadeOut();

    }, 2000);

});


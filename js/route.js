
var app = angular.module("myWS", ["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "home.html",
    })
    .when("/about", {
        templateUrl : "about.html",
       
    })

    .when("/projects", {
        templateUrl : "projects.html",
       
    })

    .when("/contact", {
        templateUrl : "contact.html",

        
       
    });

   

   
    
});




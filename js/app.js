angular.module('app',[])
.controller('SiteController', function( $scope ){

    $scope.team = [
        {
            name: 'Raul Neves',
            function: 'Diretor',
            image: 'Raul_MG_9298.jpg'
        },
        {
            name: 'Ivan Neves',
            function: 'Videomaker',
            image: 'Ivan_MG_9150.JPG'
        },
        {
            name: 'Diego Neves',
            function: 'Videomaker & Editor',
            image: 'Diego_MG_9192.JPG'
        },
        {
            name: 'Junior',
            function: 'Editor',
            image: 'Junior_MG_9171.JPG'
        },
        {
            name: 'Lene',
            function: 'Comercial',
            image: 'Lene_MG_9226.JPG'
        }
    ]

})
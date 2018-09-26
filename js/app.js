angular.module('app',[])
.controller('SiteController', function( $scope ){

    $scope.team = [
        {
            name: 'Raul Neves',
            function: 'Diretor',
            image: 'Raul_MG_9298.jpg',
            description: `Começou na RBS TV como cinegrafista, teve passagens pela TV furb, Em 1994, iniciou seu próprio negócio, Com mais de 30 anos de experiência no ramo de vídeo, já produziu vídeos para o Senai, Teka. Hoje o negócio virou da família e todos estão envolvidos.
            `
        },
        {
            name: 'Ivan Neves',
            function: 'Videomaker',
            image: 'Ivan_MG_9150.JPG',
            description: `Comprometido e com um olhar atento as imagens aéreas. `
        },
        {
            name: 'Diego Neves',
            function: 'Videomaker & Editor',
            image: 'Diego_MG_9192.JPG',
            description: `Profissional responsável pelas belas imagens e edições diferenciadas. `
        },
        {
            name: 'Junior Neves',
            function: 'Editor',
            image: 'Junior_MG_9171.JPG',
            description: `Filho mais novo, desde muito cedo envolvido com os trabalhos na empresa, hoje ele é o responsável pelas animações em vídeo. `
        },
        {
            name: 'Lene Neves',
            function: 'Comercial',
            image: 'Lene_MG_9226.JPG',
            description: `Esposa, mãe e comprometida com a área comercial da empresa. 
            `
        }
    ]

})
// Funções Js

//Function abrir a modal
function openModal(url, width, height) {
    //Setando o tamanho da modal  de acordo com os valores passados como parâmetros
        $('.modal').css("width",width);
        $('.modal').css("height",height);
        $('body').css("overflow","hidden");
        $('body').css("width","100%");
        $('body').css("height","100vh");
    
    $( ".container_modal" ).fadeIn( 1000 );
		$.ajax( {
			type: "POST",
			url: url,
			success: function ( dados ) {
				$( '.modal' ).html( dados );
			}
		} );

	}

//Fechar modal
function closeModal(){
	$( ".container_modal" ).fadeOut( 1000 );
    $('body').css("overflow","inherit");
    $('body').css("width","auto");
    $('body').css("height","auto");
}

//Tela asyncrona 
function syncTela(url,container){
	
	$.ajax({
		type:"POST",
		url: url,
		success: function (dados){
			
			$(container).html(dados);
		}
	})
	
}
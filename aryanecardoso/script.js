


// MENU

const btMenu = document.getElementById("bt-menu");
const btMenuFechar = document.getElementById("bt-menu-fechar");
const menu = document.querySelector(".sumario");

btMenu.addEventListener("click", ()=>{
    menu.classList.add("ativo");
});
btMenuFechar.addEventListener("click", ()=>{
    menu.classList.remove("ativo");
});

// ACCORDION PERGUNTAS

$(document).ready(function(){
    $('.accordion-list > li > .answer').hide();
        
    $('.accordion-list > li').click(function() {
        if ($(this).hasClass("active")) {
        $(this).removeClass("active").find(".answer").slideUp();
        } else {
        $(".accordion-list > li.active .answer").slideUp();
        $(".accordion-list > li.active").removeClass("active");
        $(this).addClass("active").find(".answer").slideDown();
        }
        return false;
    });
    
    });

// CADASTRO INDEX

$(document).ready(function() {
    $('#form-cadastro').submit(function(e) {
        e.preventDefault();
        let serializeDados = $(this).serialize();
        
        $.ajax({
            url: 'cadastro.php',
            type: 'POST',
            data: serializeDados,
            success: function(data) {
                if(data == 1){
                    $('#msg-cadastro-index').html('<p class="sucesso">Obrigado por cadastrar!</p>');
                    this.reset();
                    setTimeout(()=>{
                        $('#msg-cadastro-index').html("");
                    }, 3000);
                }else{
                    $('#msg-cadastro-index').html('<p class="erro">Erro ao cadastrar!</p>'); 
                    setTimeout(()=>{
                        $('#msg-cadastro-index').html("");
                    }, 3000);

                }
            }
        });     
          
    });
})
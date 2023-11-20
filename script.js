document.addEventListener('scroll', rolar);

var ultimaPosicao = 0;

function rolar() {
        var atualPosicao = window.scrollY;
        var logo = document.getElementById('logo')
        var menu = document.getElementById('menu-home')
        var conteudo = document.getElementById('content')
        var roxo = document.getElementById('card')
        var btnLogin = document.getElementById('btn-login')
        var btnCar = document.getElementById('btn-carrinho')
        var contato = document.getElementById('link')
        var drop = document.getElementById('drop')
        if(atualPosicao > ultimaPosicao) {
            logo.style.fontSize = "3rem"
            menu.style.paddingBottom = "3rem"
            conteudo.style.top = "7rem"
            roxo.style.top = "8rem"
            btnCar.classList.remove('d-none')
            btnCar.classList.add('d-flex')
            btnLogin.classList.remove('d-none')
            btnLogin.classList.add('d-flex')
            contato.classList.remove('d-none')
            contato.classList.add('d-flex')
            menu.classList.add('shadow', 'p-3', 'mb-5', 'bg-white', 'rounded')

          
           
        } else {
            conteudo.style.top = "27rem"
            logo.style.fontSize = "20rem"
            menu.style.paddingBottom = "22rem"
            btnCar.classList.remove('d-flex')
            btnCar.classList.add('d-none')
            btnLogin.classList.remove('d-flex')
            btnLogin.classList.add('d-none')
            contato.classList.remove('d-flex')
            contato.classList.add('d-none')
            menu.classList.remove('shadow', 'p-3', 'mb-5', 'bg-white', 'rounded')
    
       
        }

       
    }


    
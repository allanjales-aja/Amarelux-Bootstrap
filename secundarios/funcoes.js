function select_categ(categoria){
    //alert(categoria);
    let elementos = document.getElementsByClassName("ItemProdutos");
    //console.log(opcao);
    for(var i=0; i<elementos.length; i++){
        //console.log(elementos[i].id);
        if (categoria == elementos[i].id)
            elementos[i].style = "display:inline-block;";
        else
            elementos[i].style = "display:none;";
    }
    let opcao = document.getElementsByTagName("li");
    for(var l=0; l<opcao.length; l++){
        console.log(opcao[l].id == categoria);
        if (opcao[l].id == categoria)
            switch(opcao[l].id){
            case 'ar':
                opcao[l].style = "font-weight: bold;";
                break;
            case 'fogao':
                opcao[l].style = "font-weight: bold;";
                break;
            case 'geladeira':
                opcao[l].style = "font-weight: bold;";
                break;
            case 'lavaroupas':
                opcao[l].style = "font-weight: bold;";
                break;
            case 'lavaloucas':
                opcao[l].style = "font-weight: bold;";
                break;
            case 'microondas':
                opcao[l].style = "font-weight: bold;";
                break;
            default:
                opcao[l].style = "font-weight: normal;";
        }
        else
            opcao[l].style = "font-weight: normal;";
    }
};

let select_todos = (categoria) => {
    let elementos = document.getElementsByClassName("ItemProdutos");
    //console.log(elementos);
    for(var i=0; i<elementos.length; i++){
            elementos[i].style = "display:inline-block;";
    }

    let opcao = document.getElementsByTagName("li");
    for(var t=0; t<opcao.length; t++){
        console.log(opcao[t].id == categoria);
        if (opcao[t].id == categoria)
        opcao[t].style = "font-weight: bold;";
        else
        opcao[t].style = "font-weight: normal;";
    }
};

let zoom = (imagem) => {
    //console.log(imagem);
    if(imagem.width==250)
        imagem.width=120;
    else
        imagem.width=250;
};

let destacar = (produto) => {
    produto.style = "border-radius: 30px; border-color: #edde07; border-style: double; border-width: 5pt;";
}

let normal = (produto) => {
    produto.style = "border-radius: 0; border-color: none; border-style: none; border-width: 0;";
}

let destacarMenu = (pagina) => {
    pagina.style = "background-color: #e4db5b";
}

let normalMenu = (pagina) => {
    pagina.style = "background-color: #edde07";
}

let destacarLogo = (logo) => {
    logo.style = "border-radius: 10px; border-color: #0944b5; border-style: inset; border-width: 3pt;";
}

let normalLogo = (logo) => {
    logo.style = "border-radius: 0; border-color: none; border-style: none; border-width: 0;";
}

let destacarMain = (main) => {
    main.style = "font-size: 25px; background-color: #ffef09; font-weight: bold";
}

let normalMain = (main) => {
    main.style = "font-size: 22px; background-color: none;";
}

let destacarLoja = (produto) => {
    produto.style = "border-radius: 20px; border-color: #edde07; border-style: groove; border-width: 2pt;";
}

let normalLoja = (produto) => {
    produto.style = "border-radius: 0; border-color: none; border-style: none; border-width: 0;";
}
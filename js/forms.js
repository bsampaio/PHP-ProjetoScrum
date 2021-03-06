function formhash(form, password) {
    // Crie um novo elemento de imput, o qual será o campo para a senha com hash
    var p = document.createElement("input");

    // Adicione um novo elemento ao nosso formulário
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Cuidado para não deixar que a senha em texto simples não seja enviada
    password.value = "";

    // Finalmente envie o formulário
    form.submit();
}

function regformhash(form, uid, email, password, conf) {
    // Confira se cada campo tem um valor
    if(uid.value == ''       ||
        email.value == ''    ||
        password.value == '' ||
        conf.value == '') {

        alert('Você deve preencher todas as infomações requeridas. Por favor, tente novamente');
        return false;
    }

    //Verifique o nome de usuário

    re = /^\w+$/;
    if(!re.test(form.username.value)) {
        alert("O campo de usuário deve conter apenas letras, números and underlines(_). Por favor, tente novamente");
        form.username.focus();
        return false;
    }

    // Confira se a senha é comprida o suficiente (no mínimo, 6 caracteres)
    // A verificação é duplicada abaixo, mas o cuidado extra é para dar mais
    // orientações específicas ao usuário
    if(password.value.length < 6) {
        alert('As senhas precisam ter no mínimo 6 caracteres. Por favor, tente novamente');
        form.password.focus();
        return false;
    }

    // Pelo menos um número, uma letra minúscula e outra maíuscula
    // Pelo menos 6 caracteres

    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;

    if (!re.test(password.value)) {
        alert('Senhas precisam ter no mínimo um número, uma letra maiúscula e uma minúscula.  Por favor, tente novamente');
        return false;
    }
 
    // Verificar se a senha e a confirmação são as mesmas
    if (password.value != conf.value) {
        alert('Sua senha e a confirmação da senha não são as mesmas. Por favor, tente novamente');
        form.password.focus();
        return false;
    }

    // Crie um novo elemento de input que será o campo para a senha com o hash
    var p = document.createElement("input");

    // Adicione um novo elemento ao nosso formulário
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Cuidado para não deixar que a senha em texto simples não seja enviada.
    password.value = "";
    conf.value = "";

    // Finalizando envie o formulário
    form.submit();
    return true;
}
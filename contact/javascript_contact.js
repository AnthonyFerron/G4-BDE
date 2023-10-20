const formRegister = document.forms['register-form'];
if (formRegister) {
 const name = formRegister['name'];
 const email = formRegister['email'];
 const message = formRegister['message'];
 if (name.value !== '' && email.value !== '' && message.value !== '') {
        console.log("ok");
    }
}

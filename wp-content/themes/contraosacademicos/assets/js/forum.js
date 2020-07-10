let ajaxLogin = document.querySelector('#affu-ajax-login');
let ajaxRegister = document.querySelector('#affu-ajax-register');
let containerFormLogin = document.querySelector('#affu_login_form .affu-form-container');
let containerFormRegister = document.querySelector('#affu_register_form .affu-form-container');

function createClosedButtonFormForum(container) {
  const newDiv = document.createElement('div');
  const iconForm = document.createElement('i');

  newDiv.classList.add('affu-form-row');
  newDiv.classList.add('affu-closed');
  iconForm.classList.add('fas');
  iconForm.classList.add('fa-times');

  newDiv.append(iconForm)
  container.insertBefore(newDiv, container.childNodes[0])
}

createClosedButtonFormForum(containerFormLogin)
createClosedButtonFormForum(containerFormRegister)


const closedButton = document.querySelectorAll('.affu-closed');

function closedFormsForum(button) {
  button.addEventListener('click', () => {
    ajaxLogin.style.display = 'none';
    ajaxRegister.style.display = 'none';
  })
}

closedFormsForum(closedButton[0])
closedFormsForum(closedButton[1])
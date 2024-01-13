const inputs = document.querySelectorAll('.form input');

const patterns = {
  uname:{
    regix: /^[a-zA-Z]+$/, 
    message: "firstname not valide (exampl:khalid) ",
  },

  email:{
    regix: /^[a-zA-Z0-9_\.\-]+@[a-z]+\.[a-z]{2,6}$/, 
    message: "email not valide (exampl: exmple@gmail.com) ",
  },
}
//function to check valid inputs
function valide(pattern,input){
  fieldMessage = document.getElementById(input.attributes.name.value + "-message")
  if(!pattern.regix.test(input.value))
  {
    fieldMessage.innerText = pattern.message;
    fieldMessage.style.color = "red";
  }
  else{
    fieldMessage.innerText = "valid";
    fieldMessage.style.color = "green";
  }
  
  if (isAllInputsValide()) {
    document.getElementById("submitBtn").disabled = false;
  } else {
    document.getElementById("submitBtn").disabled = true;
  }
}

inputs.forEach((input) =>{
  input.addEventListener('keyup',function(e){
      valide(patterns[e.target.attributes.name.value],e.target);
  });
});

function isAllInputsValide() {
  let allInputs = document.querySelectorAll(".form > span");
  let isAllValid = true;
  allInputs.forEach(input => {
    if(input.style.color != "green")
      isAllValid = false;
  })
  return isAllValid;
}
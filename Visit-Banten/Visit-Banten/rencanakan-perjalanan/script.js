const inputs = document.querySelector("div[name='input_data']").querySelectorAll("input[type='number']");
const prices = document.querySelectorAll("span[name='pricevalue']");
const total = document.querySelector("span[name='totalvalue']");


function toIntPrices(index){
  let _str = prices[index].innerHTML.split(",").join("");
  return parseInt(_str);
}

function toIntInputs(index){
  return parseInt(inputs[index].value);
}


for(let i = 0; i < inputs.length; i++){
  inputs[i].addEventListener("input", (el) => {
    let _total = 0;

    for(let i = 0; i < inputs.length; i++){
      _total += toIntInputs(i) * toIntPrices(i);
    }

    total.innerHTML = _total;
  });
}
function maskCellPhone(element){
    let value = element.value

    value = value.replace(/[^0-9]/g, "")
    if (value.length > 11){
        value = value.substring(0, 11)
    }

    if(value.length > 2 && value.length <= 6){
        value = value.replace(/^(\d{2})(\d{0,4})$/g, "($1) $2")
    }else if (value.length > 6 && value.length < 11){
        value = value.replace(/^(\d{2})(\d{4})(\d{1,4})$/g, "($1) $2-$3")
    }else{
        value = value.replace(/^(\d{2})(\d{1})(\d{4})(\d{4})$/g, "($1) $2 $3-$4")
    }
       
    element.value = value

}

function maskName(element){
    let value = element.value
    value = value.toLowerCase()
    value = value.replace(/[^a-zA-ZÀ-úü\s]/g, "")
    value = value.replace(/\s{2,}/g, " ")
    value = value.replace(/^(\s{1,})(.*)/g, "$2")
    value = value.replace(/(^\b|\s)([a-zA-ZÀ-úü])/g, c => c.toUpperCase())
    value = value.replace(/\sD[a-u]{1}s?\s/g, c => c.toLowerCase())

    element.value = value
}

function maskNameUpper(element){
    let value = element.value
    value = value.toUpperCase();
    value = value.replace(/[^a-zA-ZÀ-úü\s]/g, "")
    value = value.replace(/\s{2,}/g, " ")
    value = value.replace(/^(\s{1,})(.*)/g, "$2")
    
    element.value = value
}

function maskEmail(element){
    let value = element.value

    value = value.toLowerCase()
    value = value.replace(/\s/g, "")

    element.value = value
}

function maskPositiveInteger(element){
    let value = element.value

    value = value.replace(/[^0-9]/g, "")

    element.value = value
}

function maskDecimal(input){
    if(typeof input === "undefined" || input == null)
     {
        input.value = 0;
        return;
     }
  
    let valor = '';
  
    if(typeof input.value !== "undefined"){
      valor = input.value;
    } else {
      valor = input;
    }
  
    if(valor.length == 2)
     {
      input.valor=valor;
      return;
     }  
  
     let v = valor;
     v = v.replace(/\D/g, '');
     v = v.replace(/(\d{1,2})$/, '.$1');
     //v = v.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');
     
     input.value = v;
  }

function maskCNPJ(element){
    let value = element.value

    value = value.replace(/[^0-9]/g, "")
    if (value.length > 14){
        value = value.substring(0, 14)
    }

    if(value.length > 2 && value.length <= 5){
        value = value.replace(/^(\d{2})(\d{0,3})$/g, "$1.$2")
    }else if (value.length > 5 && value.length <= 8){
        value = value.replace(/^(\d{2})(\d{3})(\d{1,3})$/g, "$1.$2.$3")
    }else if (value.length > 8 && value.length <= 12){
        value = value.replace(/^(\d{2})(\d{3})(\d{3})(\d{1,4})$/g, "$1.$2.$3/$4")
    }else{
        value = value.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d{1,2})$/g, "$1.$2.$3/$4-$5")
    }
       
    element.value = value

}

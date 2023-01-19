function changeAllDeleteRows(check)
 {
    let i, n;
    let data=[]
    
    let checks = document.querySelectorAll("input[name=deleteRow]");
    n = checks.length;

    for(i=0; i<n; i++)
    {
     checks[i].checked = check.checked;
    }   
    
 }

function getDeleteRows()
 {
    let i, n;
    let data=[]

    let checks = document.querySelectorAll("input[name=deleteRow]:checked");
    n = checks.length;

    if(n < 1) return;

    for(i=0; i<n; i++)
    {
     data.push(checks[i].id);
    }   
    
    let form = document.getElementById("formDeleteRows");
    let field = document.getElementById("DeleteRows");

    field.value = JSON.stringify(data);
    form.submit();   
 }
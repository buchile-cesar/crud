function RemoveMessage(){
    window.setTimeout(
        function remove(){
            let element = document.getElementsByClassName("template-message-group")
            if(element.length > 0){
                element[0].remove()
            }
        },
        5000
    )       
}
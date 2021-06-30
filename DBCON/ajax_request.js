/*
    1. Create xhr
    2. Callback
    3. Open
    4. Send
 */

function click_me(){
    let xhr = new XMLHttpRequest();
    let container = document.getElementsByClassName('container')[0];
    let container_str = "<ul>";
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status ===200){
            let str_mod = xhr.responseText;
            str_mod = str_mod.replace(',]', ']');
            console.log(str_mod);
            let res_arr = JSON.parse(str_mod);
            console.log(res_arr);

            // if responseText ok
            for (let i = 0; i < res_arr.length; i++) {
                container_str += "<li>" + res_arr[i].name + "</li>";
            }
            container.innerHTML = container_str + "</ul>";

        } else if (xhr.status === 404){
            console.log('Document not found !');
        } else if (xhr.status === 500){
            console.log('Internal server error !');
        }
    }
    xhr.open("GET", "db_connection.php");
    xhr.send();
}
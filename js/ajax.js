function ajax(params, filename, link, message) {
    let res = new XMLHttpRequest();

    res.onreadystatechange = function() {
        if(res.readyState == 4 && res.status == 200) {
            if(res.responseText == '1') {
                document.querySelector('#add-success').innerHTML = message;
                setTimeout(() => {
                    window.location.href = link;
                }, 1000);
            }
            else {
                document.querySelector('#add-error').innerHTML = JSON.parse(res.responseText).error;
                console.log(res.responseText);
            }
        }
    }

    res.open('post', filename, true);
    res.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    res.send(params);
}

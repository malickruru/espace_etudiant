

function Open_popup(array) {
    
    array.forEach(elem => {
        // créer une div avec la classe comment_row
        let row = document.createElement('div');
        row.setAttribute('class','comment_row');

        // créer comment_pic,comment_text dans comment row
        let pic = document.createElement('div');
        pic.setAttribute('class','comment_pic');
        let text = document.createElement('div');
        text.setAttribute('class','comment_text');
        // modifier la data
        pic.innerHTML = `
        <img src=${elem[1]} class='rounded-img-1'>
        `;
        text.innerHTML =` 
        <p>${elem[0].text}</p>
        <span>${elem[0].date}</span>
        `;
        // inserer le titre et la photo dans row
        row.appendChild(pic);
        row.appendChild(text);
        //inserer la row dans popup_body
        document.querySelector('.popup_body').appendChild(row)
    });
    document.querySelector('.popup_wrapper').style.display='flex';
}

function Close_popup() {
    document.querySelector('.popup_wrapper').style.display='none';
    document.querySelector('.popup_body').innerHTML='';

}
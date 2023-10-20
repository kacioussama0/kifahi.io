const arabicReplacements = {
    "س": "ـ,s,ـ",
    "ص": "ـ,s,ـ",
    "ظ": "ـ,z,ـ",
    "ذ": "ـ,z,ـ",
    "ذ": "ـ,z,ـ",
    "ز": "ـ,z,ـ",
    "ك": "ـ,k,ـ",
    "ه": "ـ,h,ـ",
    "ط": "ـ,t,ـ",
    "ت": "ـ,t,ـ",
    "ن": "ـ,n,ـ",
    "د": "ـ,d,ـ",
    "و": "ـ,w,ـ",
    "ج": "ـ,g,ـ",
    "ب": "ـ,b,ـ",
    "ر":"ـ,r,ـ",
    "ت":"ـ,t,ـ",
    "ث":"ـ,s,ـ",
    "ض":"ـ,d,ـ",
    "ف":"ـ,f,ـ",
    "ق":"ـ,k,ـ",
    "ل":"ـ,l,ـ",
    "م":"ـ,m,ـ"
};


const removeArabic = {
    "أ": "ا",
    "ا": "ا",
    "إ": "ا",
    "ب": "ٹ",
    "ت": "ټ",
    "ث": "ٽ",
    "ج": "چ",
    "ح": "ڂ",
    "خ": "ځ",
    "د": "ڍ",
    "ذ": "ڎ",
    "ر": "ڔ",
    "ز": "ژ",
    "س": "ڛ",
    "ش": "ڛ",
    "ص": "ڝ",
    "ض": "ڞ",
    "ط": "ط",
    "ظ": "ڟ",
    "ع": "ع",
    "غ": "ڠ",
    "ف": "ڢ‍",
    "ق": "ڣ‍",
    "ك": "ک",
    "ل": "ڷ",
    "م": "۾",
    "ن": "ن",
    "ه": "ه",
    "و": "ﯝ",
    "ي": "ﻰ",
    "ئ": "ئ",
};

function modifyWord (word,obj) {
        let modifiedWord = word.split('');
        let found = false;

        for (let i = 0; i < word.length; i++) {
            let char = word[i];
            if (obj[char] && !found) {
            modifiedWord[i] = obj[char];
            found = true;
    }
}
    return modifiedWord.join('');
}



function modifyText (inputText,obj,dict) {

    let words = inputText.split(' ');
    let modifiedText = [];

    words.forEach(word => {
    if (dict) {
    modifiedText.push(modifyWord(word,obj));
} else {
    modifiedText.push(word);
}
});

    return modifiedText.join(' ');
}

    let paraBtn = document.querySelector('.para-btn');


    paraBtn.onclick = async ()=> {

        let result = document.querySelector('.result');
        let text = document.querySelector('.para-input').value.trimEnd();

        if(text) {

            let response = await fetch('api/send-post',{
                method: "POST",
                body: JSON.stringify({
                    content : text
                }),

                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('[name="csrf-token"]').getAttribute('content')
                },

            })

            let btnCopy = document.querySelector('#copy-button');
            let hashSelector = document.querySelector('#hashSelector');

            btnCopy.classList.add('btn-success');
            btnCopy.removeAttribute('disabled');

            if(hashSelector.value == 1) {
                result.textContent = modifyText(text,arabicReplacements,true);
            }else if (hashSelector.value == 2) {
                result.textContent = text.split(' ').map((item)=> item.split('').join(`ــ؍`)).join(' ')
            }else if (hashSelector.value == 3) {
                result.textContent = text.split(' ').map((item)=> item.split('').join(`/ـــ/`)).join(' ')
            }else if (hashSelector.value == 4) {
                result.textContent = text.split(' ').map((item)=> item.split('').map((item)=>  removeArabic[item] ? removeArabic[item] : item).join('')).join(' ')
            }

        }else {
            alert('أدخل أي نص للتم معالجته')
        }

    };


    const copyButton = document.getElementById('copy-button');

    copyButton.addEventListener('click',
    () => {

    let text = document.querySelector('.result').textContent.trimEnd();

    if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(text);
    alert('تم نسخ النص بنجاح, النصر و العزة لفلسطين!');
} else {
    alert('لم يتم نسخ النص قم بنسخه يدويا!!!');
}
});

let typeSelector = document.querySelector('#typeSelector');

typeSelector.onchange = (event) => {

    const value = event.target.value;

    let hashtagInput = document.querySelector('.hashtag-generator-input');
    let hashtagBtn = document.querySelector('.hashtag-generator-btn');
    let paraInput = document.querySelector('.para-input');
    let paraBtn = document.querySelector('.para-btn');



    if(value == 2) {

        hashtagInput.classList.remove('d-none');
        hashtagBtn.classList.remove('d-none');
        paraInput.classList.add('d-none');
        paraBtn.classList.add('d-none');


    }else if (value == 1) {
        hashtagInput.classList.add('d-none');
        hashtagBtn.classList.add('d-none');
        paraInput.classList.remove('d-none');
        paraBtn.classList.remove('d-none');
    }

}


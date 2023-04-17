//Submit function

//Begin with declaring two variables, form element and the element that will display the Qr code.
const form = document.getElementById('generate-form');
const qr = document.getElementById('qrcode');

//Next add this code provided by the library we are using, generateQRCode()
// will take in two arguments and generate the QR code correlated to the arguments passed in.
const generateQRCode = (url, size) => {
    const qrcode = new QRCode('qrcode', {
        text: url,
        width: size,
        height: size
    })
};

const onSubmit = (e) => {
    e.preventdefault();

    const url = document.getElementById('url').value;
    const size = document.getElementById('size').value;
    if(url === '') {
        alert('Please enter a URL');
    } else {
        generateQRCode(url, size);
    }
};

form.addEventListener("submit", onSubmit);
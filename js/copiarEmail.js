const emailElement = document.getElementById('btnCopiarEmail');

emailElement.addEventListener('click', function () {
    const tempTextArea = document.createElement('textarea');
    tempTextArea.value = 'contato@giovannins.xyz';
    document.body.appendChild(tempTextArea);
    tempTextArea.select();
    document.execCommand('copy');
    document.body.removeChild(tempTextArea);
    
    alert('Endereço de e-mail copiado para a área de transferência!');
});

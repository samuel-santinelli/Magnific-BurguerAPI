'use scrict';

const url = 'http://localhost/ds2t20212/samuel/ProjectHamburgueria2/Admin/api/produtos';

const getProdutos = async () => {
    const response = await fetch(url);
    return response.json();
};

const postProduto = (produto) => {
    const options = {
        method: 'POST',
        body: JSON.stringify(produto),
        headers: {
            'content-type': 'application/json'
        },
    };
    fetch(url, options);
};



export {
    getProdutos,
    postProduto,


};
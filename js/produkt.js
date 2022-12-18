export default class Produkt {
    constructor() {
        this.data = {
            password:"KickPHP"
        }

        this.rootElem = document.querySelector('.produkter');
        this.items = this.rootElem.querySelector('.items');

    }

    async init(){

        await this.render();
    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-6', 'justify-content-center', 'col-md-6', 'col-lg-3', 'p-2', 'm-0');

            col.innerHTML = `
        <div class="card bg-cardPrimary" style="max-width: 18rem;">
    <img src="images/${item.prodBilled}" class="card-img-top" alt="...">
    <div class="card-body mx-2 mb-2">
        <h2 class="card-title p-0 mb-0">${item.prodNavn}</h2>
        <p class="card-text">${item.prodBeskrivelse}</p>

        <div class="row mt-2">
            <div class="col-10 pris"><p>${item.prodPris}</p></div>
            <a class="col-2 mb-4" href=""><img src="images/darkCart.png" class="img-cart" alt="cart"></a>
        </div>
        <div class="d-grid"><a href="#" class="btn" style="background-color: #71783a">Læs mere</a></div>
    </div>
</div>
        `;





            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);

    }

    async getData(){
        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }}
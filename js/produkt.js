export default class produkt {
    constructor() {
        this.data = {
            password:"KickPHP"
        }

        this.rootElem = document.querySelector('.mejeri.saft.krydderier.frugt');
        this.filter = this.rootElem.querySelector('.filter');
        this.items = this.rootElem.querySelector('.items');

        this.nameSearch = this.filter.querySelector('.nameSearch');
    }

    async init(){
        this.nameSearch.addEventListener('input', () => {
            this.render();
        })
        await this.render();
    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-12', 'col-md-6', 'col-lg-5', 'p-2', 'm-5', 'shadow');

            col.innerHTML = `
        `;

            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row);

    }

    async getData(){
        this.data.nameSearch = this.nameSearch.value;
        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }}

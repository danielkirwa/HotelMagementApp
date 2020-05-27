

//book class represent books
class Book {

	constructor(item,quantity,price){
		this.item = item;
		this.quantity = quantity;
		this.price = price;
	}
}
//ui class handles ui tasks
class UI {
	static displayBooks()  {
		const StoredBooks = [{item: 'Bread',
							quantity: '1',
							price:'Ksh 50'},
		 					{item: 'Maffin',
		 					quantity: '1',
		 					price:'Ksh 30'}];  

		 const books = StoredBooks;

		 books.forEach((book) => UI.addBookToList(book));
	}
	static addBookToList(book){
		const list = document.querySelector('book-list');
		const row = document.createElement('tr');
		row.innerHTML= `
		<td>${book.item}</td>
		<td>${book.quantity}</td>
		<td>${book.price}</td>
		<td><a href ="#">X</a></td>
		`;

		list.appendChild(row);
	}
}

//store class handles storage
 
//event display blockk
document.addEventListener('DOMContentLoaded',UI.displayBooks);

//event add book 
document.querySelector('book-form').addEventListener('submit',{e}=>{
	//create form values
	e.preventDefault();
	const item = document.querySelector('item').value;
	const quantity= document.querySelector('quantity').value;
	const price = document.querySelector('price').value;

	// 
	const book = new Book(item,quantity,price);
	console.log(book); 
});

//event remove book


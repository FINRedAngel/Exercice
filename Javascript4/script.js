const bookName = document.querySelector('#name');
const bookSummary = document.querySelector('#summary');
const booksContainer = document.querySelector('.books');
const bookDelete = document.querySelector('#delete');
const submit = document.querySelector('#submit');

const books = document.getElementsByClassName('book');
submit.addEventListener('click', function (event) {
  event.preventDefault();

  const name = bookName.value;
  const summary = bookSummary.value;

  if (!name && !summary) {
    return alert(
      'Please provide a name and summary for your book'
    );
  }

  /*   const card = `
  <div class="book">
    <h2 class="book__title">Book's title : ${name}</h2>
    <p class="book__summary">${summary}</p>
  </div>
  `;

  booksContainer.innerHTML = card; */

  const container = document.createElement('div');
  container.setAttribute('class', 'book');
  // ajouter les index des element
  container.setAttribute('data-index', books.length);

  container.innerHTML = `
    <h2 class="book__title">Book's title : ${name}</h2>
    <p class="book__summary">${summary}</p>
    <button class="book__delete">delete</button>
    `;

  const btn = document.createElement('button');
  btn.innerText = 'delete';

  booksContainer.appendChild(container);
  console.log(bookDelete, bookDelete.length);

  // Method add:
  // innerHTML
});

// Supprimer un element
bookDelete.addEventListener('click', function () {
  // document.querySelector('.content').removeChild(bookDelete);
  document
    .querySelector('#description')
    .removeChild(document.querySelector('#add'));
});